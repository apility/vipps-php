# Vipps eCommerce PHP

[![License: MIT](https://img.shields.io/packagist/l/apility/vipps.svg)](https://opensource.org/licenses/MIT)
[![Version](https://img.shields.io/packagist/v/apility/php.svg)](https://github.com/apility/vipps-php/releases/latest)

## Basic usage

```php
<?php

use Vipps\Vipps;
use Vipps\Config;
use Vipps\Ecommerce\Payment;

// The given values are just for illustration
Vipps::setConfig(Config::create([
  'endpoint' => 'https://apitest.vipps.no',
  'clientId' => '12345678-1234-5678-1234-56781234',
  'clientSecret' => 'A1bcdEFGHijkL2MNOpQrsTUVW34=',
  'merchantSerialNumber' => 10000,
  'accessTokenSubscriptionKey' => '123456789abcdef123456789abcdef12',
  'ecommerceSubscriptionKey' => '123456789abcdef123456789abcdef12',
]));

$payment = Payment::create([
  'merchantInfo' => [
    'callbackPrefix' => 'https://domain.tld/callback',
    'fallBack' => 'https://domain.tld/fallback'
  ],
  'customerInfo' => [
    'mobileNumber' => '12345678'
  ],
  'transaction' => [
    'amount' => 1337 //1337.00 NOK,
    'transactionText' => 'Hello World!'
  ]
]);

$payment->charge();

header('Location: ' . $payment->url);
die();
```
