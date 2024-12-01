<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('signInByPartnerAccount must be array', function () {
    expect(ViettelPost::signInByPartnerAccount())->toBeArray()->dump();
});
