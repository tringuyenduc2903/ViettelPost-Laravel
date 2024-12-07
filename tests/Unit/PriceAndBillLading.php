<?php

use TriNguyenDuc\ViettelPost\Facades\ViettelPost;

test('createBill must be array', function () {
    expect(ViettelPost::createBill([
        'ORDER_NUMBER' => '12',
        'GROUPADDRESS_ID' => 5818802,
        'CUS_ID' => 722,
        'DELIVERY_DATE' => '11/10/2018 15=>09=>52',
        'SENDER_FULLNAME' => 'Yanme Shop',
        'SENDER_ADDRESS' => 'Số 5A ngách 22 ngõ 282 Kim Giang, Đại Kim, Quận Hoàng Mai, Hà Nội',
        'SENDER_PHONE' => '0967.363.789',
        'SENDER_EMAIL' => 'vanchinh.libra@gmail.com',
        'SENDER_WARD' => 0,
        'SENDER_DISTRICT' => 4,
        'SENDER_PROVINCE' => 1,
        'SENDER_LATITUDE' => 0,
        'SENDER_LONGITUDE' => 0,
        'RECEIVER_FULLNAME' => 'Hoàng - Test',
        'RECEIVER_ADDRESS' => '1 NKKN P.Nguyễn Thái Bình, Quận 1, TP Hồ Chí Minh',
        'RECEIVER_PHONE' => '0907882792',
        'RECEIVER_EMAIL' => 'hoangnh50@fpt.com.vn',
        'RECEIVER_WARD' => 0,
        'RECEIVER_DISTRICT' => 43,
        'RECEIVER_PROVINCE' => 2,
        'RECEIVER_LATITUDE' => 0,
        'RECEIVER_LONGITUDE' => 0,
        'PRODUCT_NAME' => 'Máy xay sinh tố Philips HR2118 2.0L ',
        'PRODUCT_DESCRIPTION' => 'Máy xay sinh tố Philips HR2118 2.0L ',
        'PRODUCT_QUANTITY' => 1,
        'PRODUCT_PRICE' => 2292764,
        'PRODUCT_WEIGHT' => 40000,
        'PRODUCT_LENGTH' => 38,
        'PRODUCT_WIDTH' => 24,
        'PRODUCT_HEIGHT' => 25,
        'PRODUCT_TYPE' => 'HH',
        'ORDER_PAYMENT' => 3,
        'ORDER_SERVICE' => 'VCN',
        'ORDER_SERVICE_ADD' => '',
        'ORDER_VOUCHER' => '',
        'ORDER_NOTE' => 'cho xem hàng, không cho thử',
        'MONEY_COLLECTION' => 2292764,
        'MONEY_TOTALFEE' => 0,
        'MONEY_FEECOD' => 0,
        'MONEY_FEEVAS' => 0,
        'MONEY_FEEINSURRANCE' => 0,
        'MONEY_FEE' => 0,
        'MONEY_FEEOTHER' => 0,
        'MONEY_TOTALVAT' => 0,
        'MONEY_TOTAL' => 0,
        'LIST_ITEM' => [[
            'PRODUCT_NAME' => 'Máy xay sinh tố Philips HR2118 2.0L',
            'PRODUCT_PRICE' => 2150000,
            'PRODUCT_WEIGHT' => 2500,
            'PRODUCT_QUANTITY' => 1,
        ]],
    ]))->toBeArray()->dump();
});

test('updateBillStatus must be null', function () {
    expect(ViettelPost::updateBillStatus([
        'TYPE' => 4,
        'ORDER_NUMBER' => '11506020148',
        'NOTE' => 'Ghi chú',
    ]))->toBeNull()->dump();
});

test('pricing must be array', function () {
    expect(ViettelPost::pricing([
        'PRODUCT_WEIGHT' => 7500,
        'PRODUCT_PRICE' => 5000,
        'MONEY_COLLECTION' => 5000,
        'ORDER_SERVICE_ADD' => '',
        'ORDER_SERVICE' => 'VCN',
        'SENDER_PROVINCE' => '1',
        'SENDER_DISTRICT' => '14',
        'RECEIVER_PROVINCE' => '2',
        'RECEIVER_DISTRICT' => '43',
        'PRODUCT_TYPE' => 'HH',
        'NATIONAL_TYPE' => 1,
    ]))->toBeArray()->dump();
});

test('pricingAllMatchingServices must be array', function () {
    expect(ViettelPost::pricingAllMatchingServices([
        'SENDER_PROVINCE' => 2,
        'SENDER_DISTRICT' => 53,
        'RECEIVER_PROVINCE' => 39,
        'RECEIVER_DISTRICT' => 449,
        'PRODUCT_TYPE' => 'HH',
        'PRODUCT_WEIGHT' => 500,
        'PRODUCT_PRICE' => 5000000,
        'MONEY_COLLECTION' => '5000000',
        'TYPE' => 1,
    ]))->toBeArray()->dump();
});

test('pricingWithTextAddress must be array', function () {
    expect(ViettelPost::pricingWithTextAddress([
        'PRODUCT_WEIGHT' => 7500,
        'PRODUCT_PRICE' => 5000,
        'MONEY_COLLECTION' => 5000,
        'ORDER_SERVICE_ADD' => '',
        'ORDER_SERVICE' => 'VCN',
        'SENDER_ADDRESS' => 'Đại Mỗ, Nam Từ liêm, Hà Nội',
        'RECEIVER_ADDRESS' => 'Định Công, Hoàng Mai, Hà Nội',
        'PRODUCT_TYPE' => 'HH',
        'NATIONAL_TYPE' => 1,
    ]))->toBeArray()->dump();
});

test('pricingAllMatchingServicesWithTextAddress must be array', function () {
    expect(ViettelPost::pricingAllMatchingServicesWithTextAddress([
        'SENDER_ADDRESS' => 'Đại Mỗ, Nam Từ liêm, Hà Nội',
        'RECEIVER_ADDRESS' => 'Định Công, Hoàng Mai, Hà Nội',
        'PRODUCT_TYPE' => 'HH',
        'PRODUCT_WEIGHT' => 300,
        'PRODUCT_PRICE' => 597000,
        'MONEY_COLLECTION' => '597000',
        'PRODUCT_LENGTH' => 0,
        'PRODUCT_WIDTH' => 0,
        'PRODUCT_HEIGHT' => 0,
        'TYPE' => 1,
    ]))->toBeArray()->dump();
});
