# ViettelPost (VTP) SDK for Laravel Framework

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tringuyenduc2903/viettelpost-laravel.svg?style=flat-square)](https://packagist.org/packages/tringuyenduc2903/viettelpost-laravel)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/tringuyenduc2903/viettelpost-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/tringuyenduc2903/viettelpost-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/tringuyenduc2903/viettelpost-laravel.svg?style=flat-square)](https://packagist.org/packages/tringuyenduc2903/viettelpost-laravel)

## Installation

You can install the package via composer:

```bash
composer require tringuyenduc2903/viettelpost-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="viettelpost-laravel-config"
```

This is the contents of the published config file:

```php
return [
    'api_url' => env('VTP_API_URL', 'https://partner.viettelpost.vn'),

    'partner' => [
        'user_name' => env('VTP_PARTNER_USERNAME'),
        'password' => env('VTP_PARTNER_PASSWORD'),
    ],

    'customer' => [
        'user_name' => env('VTP_CUSTOMER_USERNAME'),
        'password' => env('VTP_CUSTOMER_PASSWORD'),
    ],

    'token' => env('VTP_TOKEN'),
];
```

## Usage

### #1 [Sign in by partner account](https://partner.viettelpost.vn/?uId=login)

**Syntax**

```php
\ViettelPost::signInByPartnerAccount();
```

**Result**

```php
array:9 [
  "userId" => 13840789
  "token" => "eyJhbGciOiJFUzI1NiJ9.eyJzdWIiOiIwOTgyMjEzODU0IiwiVXNlcklkIjoxMzg0MDc4OSwiRnJvbVNvdXJjZSI6NSwiVG9rZW4iOiJTSEk5QUFXM0c3VkxQNldWN0YiLCJleHAiOjE3MzMxNTUyMDksIlBhcnRuZXIiOjEzODQwNzg5fQ.mssFkIWgeZ1VE4mQrnrDTZpafgvLlAp73AqW_KftOotS4ntVqTNcV5Q_-gc1ZiPq-E96oiumUMF70vJ5MD2SVQ"
  "partner" => 13840789
  "phone" => "0982213854"
  "postcode" => null
  "expired" => 1733155209335
  "encrypted" => null
  "source" => 5
  "infoUpdated" => true
]
```

### #2 [Register customer accounts](https://partner.viettelpost.vn/?uId=login)

**Syntax**

```php
\ViettelPost::registerCustomerAccounts([
    'EMAIL' => $email,
    'PHONE' => $phone,
    'NAME' => $name,
    'ADDRESS' => $address,
    'WARDS_ID' => $wards_id,
]);
```

**Example**

```php
\ViettelPost::registerCustomerAccounts([
    'EMAIL' => 'luan.ictu.2014@gmail.com',
    'PHONE' => '0968666888',
    'NAME' => 'Luân Test 2',
    'ADDRESS' => '61 K2 Cầu Diễn',
    'WARDS_ID' => 493,
]);
```

**Result**

```php
array:9 [
  "userId" => 15421466
  "token" => "eyJhbGciOiJFUzI1NiJ9.eyJzdWIiOiIwODIzMTUzNjU2IiwiVXNlcklkIjoxNTQyMTQ2NiwiRnJvbVNvdXJjZSI6NSwiVG9rZW4iOiJaRzU3VVlRSjY4RiIsImV4cCI6MTgxOTU1MzI4MSwiUGFydG5lciI6MTM4NDA3ODl9.n0e6Uw7ZnvfmhbCEQmdrNbK9tTJElzA2BBG5zYLNqB8-686mWc1oukZbBAFoh2vziyutxleJ_2glF4Ow8_E3Wg"
  "partner" => 13840789
  "phone" => "0968666888"
  "postcode" => null
  "expired" => 1819553281019
  "encrypted" => null
  "source" => 5
  "infoUpdated" => true
]
```

### #3 [Sign in by customer account](https://partner.viettelpost.vn/?uId=login)

**Syntax**

```php
\ViettelPost::signInByCustomerAccount();
```

**Result**

```php
array:9 [
  "userId" => 13840789
  "token" => "eyJhbGciOiJFUzI1NiJ9.eyJzdWIiOiIwOTgyMjEzODU0IiwiVXNlcklkIjoxMzg0MDc4OSwiRnJvbVNvdXJjZSI6NSwiVG9rZW4iOiJTSEk5QUFXM0c3VkxQNldWN0YiLCJleHAiOjE4MTk1NTU3NzgsIlBhcnRuZXIiOjEzODQwNzg5fQ._hCVqWmMaAN0y4kGhsFZSHJqCbPqp8LuoVRh4qW3UIPk7F2HT9swiPEMd3NjGT3Odu63WIxJXShiq0zYUP9P_g"
  "partner" => 13840789
  "phone" => "0982213854"
  "postcode" => null
  "expired" => 1819555778518
  "encrypted" => null
  "source" => 5
  "infoUpdated" => true
]
```

### #4 [Get list of province or city codes](https://partner.viettelpost.vn/?uId=danh-muc-dia-danh)

**Syntax**

```php
\ViettelPost::getListProvinceCodes($province_id);
```

**Example**

```php
\ViettelPost::getListProvinceCodes(22);
```

**Result**

```php
array:1 [
  0 => array:3 [
    "PROVINCE_ID" => 22
    "PROVINCE_CODE" => "LSN"
    "PROVINCE_NAME" => "Lạng Sơn"
  ]
]
```

### #5 [Get list of district codes](https://partner.viettelpost.vn/?uId=danh-muc-dia-danh)

**Syntax**

```php
\ViettelPost::getListDistrictCodes($province_id);
```

**Example**

```php
\ViettelPost::getListDistrictCodes(22);
```

**Result**

```php
array:11 [
  0 => array:4 [
    "DISTRICT_ID" => 231
    "DISTRICT_VALUE" => "2439"
    "DISTRICT_NAME" => "HUYỆN VĂN QUAN"
    "PROVINCE_ID" => 22
  ]
  ...
]
```

### #6 [Get list of ward codes](https://partner.viettelpost.vn/?uId=danh-muc-dia-danh)

**Syntax**

```php
\ViettelPost::getListWardCodes($district_id);
```

**Example**

```php
\ViettelPost::getListWardCodes(127);
```

**Result**

```php
array:14 [
  0 => array:3 [
    "WARDS_ID" => 1813
    "WARDS_NAME" => "XÃ QUẢNG PHÚ"
    "DISTRICT_ID" => 127
  ]
  ...
]
```

### #7 [Get list post office](https://partner.viettelpost.vn/?uId=danh-muc-buu-cuc-va-dich-vu)

**Syntax**

```php
\ViettelPost::getListPostOffice();
```

**Result**

```php
array:3705 [
  0 => array:11 [
    "TEN_TINH" => "Hà Nội"
    "TEN_QUANHUYEN" => "QUẬN HOÀNG MAI"
    "TEN_PHUONGXA" => "PHƯỜNG GIÁP BÁT"
    "MA_BUUCUC" => "GPG"
    "TEN_BUUCUC" => "Giải Phóng"
    "DIA_CHI" => "837 giải phóng, giáp bát, hoàng mai, hn"
    "LATITUDE" => "20.962681969735417"
    "LONGITUDE" => "105.83058721657046"
    "DIEN_THOAI" => null
    "PHUTRACH" => null
    "PHUTRACHPHONE" => null
  ]
  ...
]
```

### #8 [Get list service](https://partner.viettelpost.vn/?uId=danh-muc-buu-cuc-va-dich-vu)

**Syntax**

```php
\ViettelPost::getListService();
```

**Result**

```php
array:36 [
  0 => array:3 [
    "SERVICE_CODE" => "V510"
    "SERVICE_NAME" => "Dịch vụ 5+ gói 1000g"
    "DESCRIPTION" => null
  ]
  ...
]
```

### #9 [Get list service extend](https://partner.viettelpost.vn/?uId=danh-muc-buu-cuc-va-dich-vu)

**Syntax**

```php
\ViettelPost::getListServiceExtend($service_code);
```

**Example**

```php
\ViettelPost::getListServiceExtend('QTK');
```

**Result**

```php
array:18 [
  0 => array:3 [
    "SERVICE_CODE" => "CALE"
    "SERVICE_NAME" => "08/03"
    "DESCRIPTION" => null
  ]
  ...
]
```

### #10 [Get category store](https://partner.viettelpost.vn/?uId=dia-chi-lay-hang)

**Syntax**

```php
\ViettelPost::getCategoryStore();
```

**Result**

```php
array:1 [
  0 => array:10 [
    "groupaddressId" => 16700883
    "cusId" => 13840789
    "name" => "Nguyễn Đức Trí"
    "phone" => "0982213854"
    "address" => "Số 138 Phố Dương Văn Bé, P.Vĩnh Tuy, Q.Hai Bà Trưng, TP.Hà Nội"
    "provinceId" => 1
    "districtId" => 9
    "wardsId" => 208
    "postId" => null
    "merchant" => null
  ]
]
```

### #11 [Create a new store](https://partner.viettelpost.vn/?uId=dia-chi-lay-hang)

**Syntax**

```php
\ViettelPost::createNewStore([
    'PHONE' => $phone,
    'NAME' => $name,
    'ADDRESS' => $address,
    'WARDS_ID' => $wards_id,
]);
```

**Example**

```php
\ViettelPost::createNewStore([
    'PHONE' => '0968625207',
    'NAME' => 'Luân Test 2',
    'ADDRESS' => '61 K2 Cầu Diễn',
    'WARDS_ID' => 493,
]);
```

**Result**

```php
array:2 [
  0 => array:10 [
    "groupaddressId" => 21129764
    "cusId" => 13840789
    "name" => "Luân Test 2"
    "phone" => "0968625207"
    "address" => "61 K2 Cầu Diễn"
    "provinceId" => 1
    "districtId" => 25
    "wardsId" => 493
    "postId" => null
    "merchant" => null
  ]
  1 => array:10 [
    "groupaddressId" => 16700883
    "cusId" => 13840789
    "name" => "Nguyễn Đức Trí"
    "phone" => "0982213854"
    "address" => "Số 138 Phố Dương Văn Bé, P.Vĩnh Tuy, Q.Hai Bà Trưng, TP.Hà Nội"
    "provinceId" => 1
    "districtId" => 9
    "wardsId" => 208
    "postId" => null
    "merchant" => null
  ]
]
```

### #12 [Get link print](https://partner.viettelpost.vn/?uId=mo-rong)

**Syntax**

```php
\ViettelPost::createBill([
    'TYPE' => $type,
    'ORDER_ARRAY' => $orders,
    'EXPIRY_TIME' => $expiry_time,
    'PRINT_TOKEN' => $print_token,
]);
```

**Example**

```php
\ViettelPost::createBill([
    'TYPE' => 1,
    'ORDER_ARRAY' => [
        'ORDER_1',
        'ORDER_2',
    ],
    'EXPIRY_TIME' => 1583639063000,
    'PRINT_TOKEN' => 'Token in do Viettelpost Cấp',
]);
```

**Result**

```php
```

### #13 [Create bill](https://partner.viettelpost.vn/?uId=cuoc-va-van-don)

**Syntax**

```php
\ViettelPost::createBill([
    'ORDER_NUMBER' => $order_number,
    'GROUPADDRESS_ID' => $group_address_id,
    'CUS_ID' => $customer_id,
    'DELIVERY_DATE' => $delivery_date,
    'SENDER_FULLNAME' => $sender_fullname,
    'SENDER_ADDRESS' => $sender_address,
    'SENDER_PHONE' => $sender_phone,
    'SENDER_EMAIL' => $sender_email,
    'SENDER_WARD' => $sender_ward,
    'SENDER_DISTRICT' => $sender_district,
    'SENDER_PROVINCE' => $sender_province,
    'SENDER_LATITUDE' => $sender_latitude,
    'SENDER_LONGITUDE' => $sender_longitude,
    'RECEIVER_FULLNAME' => $receiver_fullname,
    'RECEIVER_ADDRESS' => $receiver_address,
    'RECEIVER_PHONE' => $receiver_phone,
    'RECEIVER_EMAIL' => $receiver_email,
    'RECEIVER_WARD' => $receiver_ward,
    'RECEIVER_DISTRICT' => $receiver_district,
    'RECEIVER_PROVINCE' => $receiver_province,
    'RECEIVER_LATITUDE' => $receiver_latitude,
    'RECEIVER_LONGITUDE' => $receiver_longitude,
    'PRODUCT_NAME' => $product_name,
    'PRODUCT_DESCRIPTION' => $product_description,
    'PRODUCT_QUANTITY' => $product_quantity,
    'PRODUCT_PRICE' => $product_price,
    'PRODUCT_WEIGHT' => $product_weight,
    'PRODUCT_LENGTH' => $product_length,
    'PRODUCT_WIDTH' => $product_width,
    'PRODUCT_HEIGHT' => $product_height,
    'PRODUCT_TYPE' => $product_type,
    'ORDER_PAYMENT' => $order_payment,
    'ORDER_SERVICE' => $order_service,
    'ORDER_SERVICE_ADD' => $order_service_add,
    'ORDER_VOUCHER' => $order_voucher,
    'ORDER_NOTE' => $order_note,
    'MONEY_COLLECTION' => $money_collection,
    'MONEY_TOTALFEE' => $money_total_fee,
    'MONEY_FEECOD' => $money_fee_cod,
    'MONEY_FEEVAS' => $money_fee_vas,
    'MONEY_FEEINSURANCE' => $money_fee_insurance,
    'MONEY_FEE' => $money_fee,
    'MONEY_FEEOTHER' => $money_fee_other,
    'MONEY_TOTALVAT' => $money_fee_total_vat,
    'MONEY_TOTAL' => $money_fee_total,
    'LIST_ITEM' => [[
        'PRODUCT_NAME' => $product_name,
        'PRODUCT_QUANTITY' => $product_quantity,
        'PRODUCT_PRICE' => $product_price,
        'PRODUCT_WEIGHT' => $product_weight,
    ]],
]);
```

**Example**

```php
\ViettelPost::createBill([
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
]);
```

**Result**

```php
```

### #14 [Update bill status](https://partner.viettelpost.vn/?uId=cuoc-va-van-don)

**Syntax**

```php
\ViettelPost::updateBillStatus([
    'TYPE' => $type,
    'ORDER_NUMBER' => $order_number,
    'NOTE' => $note,
    'DATE' => $date,
]);
```

**Example**

```php
\ViettelPost::updateBillStatus([
    'TYPE' => 4,
    'ORDER_NUMBER' => '11506020148',
    'NOTE' => 'Ghi chú',
]);
```

**Result**

```php
```

### #15 [Pricing](https://partner.viettelpost.vn/?uId=cuoc-va-van-don)

**Syntax**

```php
\ViettelPost::pricing([
    'PRODUCT_WEIGHT' => $product_weight,
    'PRODUCT_PRICE' => $product_price,
    'MONEY_COLLECTION' => $money_collection,
    'ORDER_SERVICE_ADD' => $order_service_add,
    'ORDER_SERVICE' => $order_service,
    'SENDER_PROVINCE' => $sender_province,
    'SENDER_DISTRICT' => $sender_district,
    'RECEIVER_PROVINCE' => $receiver_province,
    'RECEIVER_DISTRICT' => $receiver_district,
    'PRODUCT_TYPE' => $product_type,
    'NATIONAL_TYPE' => $national_type,
    'PRODUCT_WIDTH' => $product_width,
    'PRODUCT_HEIGHT' => $product_height,
    'PRODUCT_LENGTH' => $product_length,
]);
```

**Example**

```php
\ViettelPost::pricing([
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
]);
```

**Result**

```php
```

### #16 [Pricing for all matching services](https://partner.viettelpost.vn/?uId=cuoc-va-van-don)

**Syntax**

```php
\ViettelPost::pricingAllMatchingServices([
    'SENDER_PROVINCE' => $sender_province,
    'SENDER_DISTRICT' => $sender_district,
    'RECEIVER_PROVINCE' => $receiver_province,
    'RECEIVER_DISTRICT' => $receiver_district,
    'PRODUCT_TYPE' => $product_type,
    'PRODUCT_WEIGHT' => $product_weight,
    'PRODUCT_PRICE' => $product_price,
    'MONEY_COLLECTION' => $money_collection,
    'TYPE' => $type,
]);
```

**Example**

```php
\ViettelPost::pricingAllMatchingServices([
    'SENDER_PROVINCE' => 2,
    'SENDER_DISTRICT' => 53,
    'RECEIVER_PROVINCE' => 39,
    'RECEIVER_DISTRICT' => 449,
    'PRODUCT_TYPE' => 'HH',
    'PRODUCT_WEIGHT' => 500,
    'PRODUCT_PRICE' => 5000000,
    'MONEY_COLLECTION' => '5000000',
    'TYPE' => 1,
]);
```

### #17 [Pricing with text address](https://partner.viettelpost.vn/?uId=cuoc-va-van-don)

**Syntax**

```php
\ViettelPost::pricingWithTextAddress([
    'PRODUCT_WEIGHT' => $produc_weight,
    'PRODUCT_PRICE' => $product_price,
    'MONEY_COLLECTION' => $money_collection,
    'ORDER_SERVICE_ADD' => $order_service_add,
    'ORDER_SERVICE' => $order_service,
    'SENDER_ADDRESS' => $sender_address,
    'RECEIVER_ADDRESS' => $receiver_address,
    'PRODUCT_TYPE' => $product_type,
    'NATIONAL_TYPE' => $national_type,
    'PRODUCT_WIDTH' => $product_width,
    'PRODUCT_HEIGHT' => $product_height,
    'PRODUCT_LENGTH' => $product_length,
]);
```

**Example**

```php
\ViettelPost::pricingWithTextAddress([
    'PRODUCT_WEIGHT' => 7500,
    'PRODUCT_PRICE' => 5000,
    'MONEY_COLLECTION' => 5000,
    'ORDER_SERVICE_ADD' => '',
    'ORDER_SERVICE' => 'VCN',
    'SENDER_ADDRESS' => 'Đại Mỗ, Nam Từ liêm, Hà Nội',
    'RECEIVER_ADDRESS' => 'Định Công, Hoàng Mai, Hà Nội',
    'PRODUCT_TYPE' => 'HH',
    'NATIONAL_TYPE' => 1,
]);
```

**Result**

```php
```

### #18 [Pricing for all matching services with text address](https://partner.viettelpost.vn/?uId=cuoc-va-van-don)

**Syntax**

```php
\ViettelPost::pricingAllMatchingServicesWithTextAddress([
    'SENDER_ADDRESS' => $sender_address,
    'RECEIVER_ADDRESS' => $receiver_address,
    'PRODUCT_TYPE' => $product_type,
    'PRODUCT_PRICE' => $product_price,
    'MONEY_COLLECTION' => $money_collection,
    'PRODUCT_WEIGHT' => $product_weight,
    'PRODUCT_WIDTH' => $product_width,
    'PRODUCT_HEIGHT' => $product_height,
    'TYPE' => $type,
]);
```

**Example**

```php
\ViettelPost::pricingAllMatchingServicesWithTextAddress([
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
]);
```

**Result**

```php
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](https://github.com/tringuyenduc2903/ViettelPost-Laravel/security/policy) on how to
report security vulnerabilities.

## Credits

- [Nguyễn Đức Trí](https://github.com/tringuyenduc2903)
- [All Contributors](https://github.com/tringuyenduc2903/ViettelPost-Laravel/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
