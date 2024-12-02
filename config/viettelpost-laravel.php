<?php

return [
    'api_url' => env('VTP_API_URL', 'https://partner.viettelpost.vn'),

    'partner' => [
        'user_name' => env('VTP_PARTNER_USERNAME'),
        'password' => env('VTP_PARTNER_PASSWORD'),
    ],

    'customer' => [
        'user_name' => env('VTP_CUSTOMER_USERNAME'),
        'password' => env('VTP_CUSTOMER_PASSWORD'),
    ],

    'token' => env('VTP_TOKEN'),
];
