<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('getLinkPrint must be array', function () {
    expect(ViettelPost::getLinkPrint([
        'TYPE' => 1,
        'ORDER_ARRAY' => [
            'ORDER_1',
            'ORDER_2',
        ],
        'EXPIRY_TIME' => 1583639063000,
        'PRINT_TOKEN' => 'Token in do Viettelpost Cấp',
    ]))->toBeArray()->dump();
});
