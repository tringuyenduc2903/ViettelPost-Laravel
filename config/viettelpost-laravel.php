<?php

return [
    'api_url' => env('VTP_API_URL', 'https://partner.viettelpost.vn'),

    'partner' => [
        'user_name' => env('VTP_PARTNER_USERNAME'),
        'password' => env('VTP_PARTNER_PASSWORD'),
    ],

    'token' => env('VTP_TOKEN'),
];
