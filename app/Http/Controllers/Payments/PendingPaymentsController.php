<?php

namespace App\Http\Controllers\Payments;

use App\User;
use App\Service;
use App\Urgency;
use App\WorkLevel;
use App\Enums\PaymentReason;
use Illuminate\Http\Request;
use App\Events\PaymentApprovedEvent;
use App\Events\PaymentDisapprovedEvent;
use App\PendingForApprovalPayment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\PaymentRecordService;
use Yajra\DataTables\Facades\DataTables;

class PendingPaymentsController extends Controller
{
    public function index(Request $request)
    {
        return view('payment.pending_for_approval');
    }

    public function datatable(Request $request)
    {
        $payments = PendingForApprovalPayment::with([
            'from'
        ])->orderBy('id', 'DESC');

        return Datatables::eloquent($payments)
            ->addColumn('date', function ($payment) {
                return date("d-M-Y", strtotime($payment->created_at));
            })
            ->editColumn('amount', function ($payment) {
                return format_money($payment->amount);
            })
            ->editColumn('attachment', function ($payment) {
                if ($payment->attachment) {
                    $url = route('download_attachment', ['file' => $payment->attachment]);
                    return   anchor('Download', $url);
                }
            })
            ->editColumn('payment_reason', function ($payment) {
                if ($payment->payment_reason == PaymentReason::order) {
                    $url = route('pending_payment_approvals_view_order', $payment->id);
                    return  anchor('Order', $url);
                }
                return 'Wallet Top-up';
            })
            ->addColumn('from', function ($payment) {

                return '<a href="' . route('user_profile', $payment->user_id) . '">' . $payment->from->full_name . '</a>';
            })
            ->addColumn('details', function ($payment) {

                return '<a href="' . route('user_profile', $payment->user_id) . '">View Details</a>';
            })
            ->addColumn('action', function ($payment) {

                $a = '<a class="btn btn-sm btn-success approve" href="' . route('pending_payment_approve', $payment->id) . '"><i class="far fa-thumbs-up"></i></a>';
                $a .= ' <a class="btn btn-sm btn-danger disapprove" href="' . route('pending_payment_disapprove', $payment->id) . '"><i class="far fa-thumbs-down"></i></a>';
                return $a;
            })
            ->rawColumns([
                'date',
                'amount',
                'from',
                'attachment',
                'action',
                'payment_reason'
            ])
            ->make(true);
    }

    public function approvePendingPayment(PendingForApprovalPayment $approvedPayment, PaymentRecordService $paymentRecordService)
    {
        DB::beginTransaction();
        $success = false;
        try {

            // Store the payment
            $payment = $paymentRecordService->store($approvedPayment->user_id, $approvedPayment->method, $approvedPayment->amount, $approvedPayment->reference, $approvedPayment->attachment);

            // Trigger event
            event(new PaymentApprovedEvent($payment));

            // If the reason for payment was order, then create the order
            if (($approvedPayment->payment_reason == PaymentReason::order) && !empty($approvedPayment->cart)) {

                // Create Order
                $orderService = app()->make('App\Services\OrderService');
                // Convert the cart data to array from object
                $cart = json_decode(json_encode($approvedPayment->cart), true);
                // Store the order
                $orderService->create($cart);
            }
            // Now delete the record
            $approvedPayment->delete();
            $success = true;
            DB::commit();
        } catch (\Exception  $e) {
            $success = false;
            DB::rollback();
        }

        if ($success) {
            // the transaction worked ...            
            return redirect()->route('pending_payment_approvals')->withSuccess('Payment Approved');
        } else {

            return redirect()->back()->withFail('Sorry the request was not successful, please try again');
        }
    }

    function disapprovePendingPayment(PendingForApprovalPayment $disapprovedPayment)
    {
        // Now delete the record
        $data = $disapprovedPayment->toArray();
        $disapprovedPayment->delete();
        event(new PaymentDisapprovedEvent($data));

        return redirect()->back()->withSuccess('Payment Disapproved');
    }

    function viewOrder(PendingForApprovalPayment $payment)
    {
        $order = $payment->cart;
        $order->service = Service::find($order->service_id);
        $order->urgency = Urgency::find($order->urgency_id);
        $order->work_level = WorkLevel::find($order->work_level_id);
        $order->customer = User::find($order->customer_id);
        return view('payment.intended_order', compact('payment', 'order'));
    }
}
