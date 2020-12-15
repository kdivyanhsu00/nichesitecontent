<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Payment Gateways
    |--------------------------------------------------------------------------
    |
    'name' => '',
     The route that will take the user to pay through the gateway
     route' => ''
     The fields that will be fetched from database when loading the settings page
    'fields' => [];
    |
    */

    'gateways' => [
        'paypal_checkout' => [
            'name' => 'Paypal Smart Checkout',
            'route' => 'paypal_checkout',
            'settings_view' => 'paypal_checkout',

        ],
        'stripe' => [
            'name' => 'Stripe',
            'route' => 'stripe',
            'settings_view' => 'stripe',
        ],
        'braintree' => [
            'name' => 'Braintree',
            'route' => 'braintree',
            'settings_view' => 'braintree',
            'options' => [],
            
        ],
    ],

    'default_gateway' => 'paypal_checkout',
    'view_folder' => 'setup.payment.gateways',
    'generic_options'   => [
        'env_list' => [
             'sandbox' => 'Sandbox',
             'production' => 'Production'
         ]
     ]


];
