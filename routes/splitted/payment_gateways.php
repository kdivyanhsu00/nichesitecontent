<?php
Route::namespace('Payments\Gateways')->group(function () {

    // Controllers Within The "App\Http\Controllers\PaymentGateways" Namespace

    // Paypal Checkout
    Route::prefix('paypal/checkout')->group(function () {

        Route::get('/', 'PaypalCheckoutController@index')
            ->name('paypal_checkout');

        Route::post('process', 'PaypalCheckoutController@capturePayment')
            ->name('paypal_checkout_process');

        Route::post('generate/token', 'PaypalCheckoutController@generateToken')
            ->name('paypal_checkout_generate_token');
    });

    // Stripe
    Route::prefix('stripe')->group(function () {

        Route::get('/', 'StripeController@index')
            ->name('stripe');

        Route::post('process', 'StripeController@capturePayment')
            ->name('stripe_process');
    });

    //Braintree
    Route::prefix('braintree')->group(function () {

        Route::get('/', 'BraintreeController@index')
            ->name('braintree');

        Route::post('process', 'BraintreeController@capturePayment')
            ->name('braintree_process');
    });
});
