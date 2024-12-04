<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getListProvince must be array', function (int $province_id) {
    expect(ViettelPost::getListProvince($province_id))->toBeArray()->dump();
})->with('province id');
