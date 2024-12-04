<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getListProvinceCodes must be array', function (int $province_id) {
    expect(ViettelPost::getListProvinceCodes($province_id))->toBeArray()->dump();
})->with('province id');

test('getListDistrictCodes must be array', function (int $province_id) {
    expect(ViettelPost::getListDistrictCodes($province_id))->toBeArray()->dump();
})->with('province id');

test('getListWardCodes must be array', function (int $district_id) {
    expect(ViettelPost::getListWardCodes($district_id))->toBeArray()->dump();
})->with('district id');
