<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('signInByPartnerAccount must be array', function () {
    expect(ViettelPost::signInByPartnerAccount())->toBeArray()->dump();
});

test('registerCustomerAccounts must be array', function () {
    expect(ViettelPost::registerCustomerAccounts([
        'EMAIL' => vnfaker()->email(['gmail.com']),
        'PHONE' => vnfaker()->mobilePhone(),
        'NAME' => fake()->name,
        'ADDRESS' => fake()->streetAddress,
        'WARDS_ID' => 471,
    ]))->toBeArray()->dump();
});

test('signInByCustomerAccount must be array', function () {
    expect(ViettelPost::signInByCustomerAccount())->toBeArray()->dump();
});
