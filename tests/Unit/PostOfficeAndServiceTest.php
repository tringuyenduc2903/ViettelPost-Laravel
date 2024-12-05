<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getListPostOffice must be array', function () {
    expect(ViettelPost::getListPostOffice())->toBeArray()->dump();
});

test('getListService must be array', function () {
    expect(ViettelPost::getListService())->toBeArray()->dump();
});

test('getListServiceExtend must be array', function (string $service_code) {
    expect(ViettelPost::getListServiceExtend($service_code))->toBeArray()->dump();
})->with('service code');
