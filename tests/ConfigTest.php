<?php

declare (strict_types = 1);

use Vipps\Config;

use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
  public function testCanBeCreatedWithoutParameters(): void
  {
    $config = Config::create();

    $this->assertInstanceOf(
      Config::class,
      $config
    );

    $this->assertEquals(
      null,
      $config->getClientId()
    );

    $this->assertEquals(
      null,
      $config->getClientSecret()
    );

    $this->assertEquals(
      'https://api.vipps.no',
      $config->getEndpoint()
    );

    $this->assertEquals(
      null,
      $config->getMerchantSerialNumber()
    );

    $this->assertEquals(
      null,
      $config->getAccessTokenSubscriptionKey()
    );

    $this->assertEquals(
      null,
      $config->getEcommerceSubscriptionKey()
    );
  }

  public function testBuilderPattern(): void
  {
    $config = Config::create()
      ->setClientId('client_id')
      ->setClientSecret('client_secret')
      ->setEndpoint('http://test.domain.tld')
      ->setMerchantSerialNumber('merchant_serial_number')
      ->setAccessTokenSubscriptionKey('access_token_subscription_key')
      ->setEcommerceSubscriptionKey('ecommerce_subscription_key');

    $this->assertInstanceOf(
      Config::class,
      $config
    );

    $this->assertEquals(
      'client_id',
      $config->getClientId()
    );

    $this->assertEquals(
      'client_secret',
      $config->getClientSecret()
    );

    $this->assertEquals(
      'http://test.domain.tld',
      $config->getEndpoint()
    );

    $this->assertEquals(
      'merchant_serial_number',
      $config->getMerchantSerialNumber()
    );

    $this->assertEquals(
      'access_token_subscription_key',
      $config->getAccessTokenSubscriptionKey()
    );

    $this->assertEquals(
      'ecommerce_subscription_key',
      $config->getEcommerceSubscriptionKey()
    );
  }

  public function testTrimEndpointURL(): void
  {
    $url = 'https://test.domain.tld/';

    $config = Config::create()->setEndpoint($url);

    $this->assertEquals(
      trim($url, '/'),
      $config->getEndpoint()
    );
  }

  public function testCanBeCreatedWithParameters(): void
  {
    $config = Config::create([
      'endpoint' => 'https://test.domain.tld/',
      'clientId' => 'client_id',
      'clientSecret' => 'client_secret',
      'merchantSerialNumber' => 'merchant_serial_number',
      'accessTokenSubscriptionKey' => 'access_token_subscription_key',
      'ecommerceSubscriptionKey' => 'ecommerce_subscription_key',
    ]);

    $this->assertInstanceOf(
      Config::class,
      $config
    );

    $this->assertEquals(
      'client_id',
      $config->getClientId()
    );

    $this->assertEquals(
      'client_secret',
      $config->getClientSecret()
    );

    $this->assertEquals(
      trim('https://test.domain.tld/', '/'),
      $config->getEndpoint()
    );

    $this->assertEquals(
      'merchant_serial_number',
      $config->getMerchantSerialNumber()
    );

    $this->assertEquals(
      'access_token_subscription_key',
      $config->getAccessTokenSubscriptionKey()
    );

    $this->assertEquals(
      'ecommerce_subscription_key',
      $config->getEcommerceSubscriptionKey()
    );
  }

  public function testGettersAndSetters(): void
  {
    $config = Config::create();

    $config->clientId = 'client_id';
    $this->assertEquals(
      'client_id',
      $config->clientId
    );

    $config->clientSecret = 'client_secret';
    $this->assertEquals(
      'client_secret',
      $config->clientSecret
    );

    $config->endpoint = 'https://test.domain.tld';
    $this->assertEquals(
      'https://test.domain.tld',
      $config->endpoint
    );

    $config->merchantSerialNumber = 'merchant_serial_number';
    $this->assertEquals(
      'merchant_serial_number',
      $config->merchantSerialNumber
    );

    $config->accessTokenSubscriptionKey = 'access_token_subscription_key';
    $this->assertEquals(
      'access_token_subscription_key',
      $config->accessTokenSubscriptionKey
    );

    $config->ecommerceSubscriptionKey = 'ecommerce_subscription_key';
    $this->assertEquals(
      'ecommerce_subscription_key',
      $config->ecommerceSubscriptionKey
    );
  }
}
