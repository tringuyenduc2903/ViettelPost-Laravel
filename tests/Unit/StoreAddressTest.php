<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getCategoryStore must be array', function () {
    expect(ViettelPost::getCategoryStore())->toBeArray()->dump();
});
