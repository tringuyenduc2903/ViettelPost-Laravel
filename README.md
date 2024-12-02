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
