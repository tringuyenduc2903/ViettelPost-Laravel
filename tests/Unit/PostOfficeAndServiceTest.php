<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getListPostOffice must be array', function () {
    expect(ViettelPost::getListPostOffice())->toBeArray()->dump();
});
