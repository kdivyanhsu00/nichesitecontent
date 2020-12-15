<?php

namespace App\Http\Controllers;

use Mews\Purifier\Facades\Purifier;
use App\Services\CartService;
use App\Services\CalculatorService;
use App\Enums\CartType;
use App\Http\Requests\StoreOrderRequest;

class CartController extends Controller
{

    public function storeOrderInSession(StoreOrderRequest $request, CalculatorService $calculator, CartService $cart)
    {
        $data = $request->validated();
        $data = array_merge($data, $calculator->calculatePrice($data));
        $data['customer_id'] = auth()->user()->id;
        $data['cart_total'] = $data['total'];
        $data['staff_payment_amount'] = $calculator->staffPaymentAmount($data['cart_total']);
        $data['title'] = Purifier::clean($request->input('title'));
        $data['instruction'] = Purifier::clean($request->input('instruction'));

        $cart->setCart($data, CartType::NewOrder);

        return response()->json([
            'status' => 'success',
            'redirect_url' => route('choose_payment_method')
        ]);
    }
}
