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

  public function setUp () {
    Dotenv::create(__DIR__ . '/..')->load();

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
