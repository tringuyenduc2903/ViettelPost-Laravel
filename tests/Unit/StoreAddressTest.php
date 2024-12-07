<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getCategoryStore must be array', function () {
    expect(ViettelPost::getCategoryStore())->toBeArray()->dump();
});

test('createNewStore must be array', function () {
    expect(ViettelPost::createNewStore([
        'PHONE' => vnfaker()->mobilePhone(),
        'NAME' => fake()->name,
        'ADDRESS' => fake()->streetAddress,
        'WARDS_ID' => 471,
    ]))->toBeArray()->dump();
});
