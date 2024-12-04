<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getListProvince must be array', function (int $province_id) {
    expect(ViettelPost::getListProvinceCodes($province_id))->toBeArray()->dump();
})->with('province id');

test('getListDistrictCodes must be array', function (int $province_id) {
    expect(ViettelPost::getListDistrictCodes($province_id))->toBeArray()->dump();
})->with('province id');
