<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Services\AvatarUploadService;
use App\Tag;
use App\Http\Requests\ChangeProfilePhotoRequest;
use App\Services\UserService;
use App\Services\CartService;
use App\Enums\CartType;

class MyAccountController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $user = auth()->user();
        $user->setMetaData();

        if ($request->group == 'edit-profile') {
            $data['tag_id_list'] = Tag::orderBy('name', 'ASC')->pluck('name', 'id')->toArray();
        }

        return view('my_account.index', compact('user', 'data'));
    }

    public function change_password(Request $request)
    {
        $password = auth()->user()->password;

        $validator = Validator::make($request->all(), [
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) use ($password) {

                    if (!Hash::check($value, $password)) {
                        return $fail(__('Current password is not valid'));
                    }
                }
            ],
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->save();

        // Log user's activity       
        logActivity($user, 'updated password');

        return redirect()->back()->withSuccess('Password updated');
    }

    public function update_profile(Request $request, UserService $userService)
    {
        $rule = [
            'first_name' => 'required',
            'last_name' => 'required',
            'bio' => 'max:500',
            'address' => 'max:500'
        ];

        if (auth()->user()->hasRole('staff')) {
            $rule['preferred_payment_method'] = 'required';
            $rule['payment_method_details'] = 'required';
        }

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $userService->update_self_profile($request, auth()->user());

        // Log user's activity       
        logActivity(auth()->user(), 'updated profile');

        return redirect()->back()->withSuccess('Successfully updated');
    }

    public function change_photo(ChangeProfilePhotoRequest $request, AvatarUploadService $avatar)
    {
        // Log user's activity       
        logActivity(auth()->user(), 'updated avatar');
        return response()->json($avatar->upload($request, auth()->user()));
    }

    public function orders()
    {
        $orders = auth()->user()
            ->my_orders()
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('my_account.orders', compact('orders'));
    }

    public function walletTopup(Request $request, CartService $cart)
    {
        $validator = Validator::make($request->all(), [
            'amount'=> 'required|regex:/^\d+(\.\d{1,2})?$/'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = ['cart_total' => $request->amount];
        $cart->setCart($data, CartType::WalletTopUp);

        return redirect()->route('choose_payment_method');
    }
}
