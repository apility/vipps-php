<?php

declare (strict_types = 1);

namespace Vipps\Tests;

use Vipps\Vipps;
use Vipps\Config;
use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
  protected $config;

  public function setUp()
  {
    putenv('VIPPS_ENDPOINT=https://apitest.vipps.no');
    putenv('VIPPS_CLIENT_ID=12345678-1234-5678-1234-56781234');
    putenv('VIPPS_CLIENT_SECRET=A1bcdEFGHijkL2MNOpQrsTUVW34=');
    putenv('VIPPS_MERCHANT_SERIAL_NUMBER=10000');
    putenv('VIPPS_ACCESS_TOKEN_SUBSCRIPTION_KEY=123456789abcdef123456789abcdef12');
    putenv('VIPPS_ECOMMERCE_SUBSCRIPTION_KEY=123456789abcdef123456789abcdef12');

    $this->config = Config::create([
      'endpoint' => getenv('VIPPS_ENDPOINT'),
      'clientId' => getenv('VIPPS_CLIENT_ID'),
      'clientSecret' => getenv('VIPPS_CLIENT_SECRET'),
      'merchantSerialNumber' => getenv('VIPPS_MERCHANT_SERIAL_NUMBER'),
      'accessTokenSubscriptionKey' => getenv('VIPPS_ACCESS_TOKEN_SUBSCRIPTION_KEY'),
      'ecommerceSubscriptionKey' => getenv('VIPPS_ECOMMERCE_SUBSCRIPTION_KEY'),
    ]);

    Vipps::setConfig($this->config);
  }
}
