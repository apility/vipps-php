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
      $config->clientId
    );

    $this->assertEquals(
      null,
      $config->clientSecret
    );

    $this->assertEquals(
      'https://api.vipps.no',
      $config->endpoint
    );

    $this->assertEquals(
      null,
      $config->merchantSerialNumber
    );

    $this->assertEquals(
      null,
      $config->accessTokenSubscriptionKey
    );

    $this->assertEquals(
      null,
      $config->ecommerceSubscriptionKey
    );

    $this->assertEquals(
      null,
      $config->callbackPrefix
    );

    $this->assertEquals(
      null,
      $config->fallBack
    );
  }

  public function testBuilderPattern(): void
  {
    $config = Config::create()
      ->set('clientId', 'client_id')
      ->set('clientSecret', 'client_secret')
      ->set('endpoint', 'http://test.domain.tld')
      ->set('merchantSerialNumber', 'merchant_serial_number')
      ->set('accessTokenSubscriptionKey', 'access_token_subscription_key')
      ->set('ecommerceSubscriptionKey', 'ecommerce_subscription_key')
      ->set('callbackPrefix', 'callback_prefix')
      ->set('fallBack', 'fallback');

    $this->assertInstanceOf(
      Config::class,
      $config
    );

    $this->assertEquals(
      'client_id',
      $config->clientId
    );

    $this->assertEquals(
      'client_secret',
      $config->clientSecret
    );

    $this->assertEquals(
      'http://test.domain.tld',
      $config->endpoint
    );

    $this->assertEquals(
      'merchant_serial_number',
      $config->merchantSerialNumber
    );

    $this->assertEquals(
      'access_token_subscription_key',
      $config->accessTokenSubscriptionKey
    );

    $this->assertEquals(
      'ecommerce_subscription_key',
      $config->ecommerceSubscriptionKey
    );

    $this->assertEquals(
      'callback_prefix',
      $config->callbackPrefix
    );

    $this->assertEquals(
      'fallback',
      $config->fallBack
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
      'callbackPrefix' => 'callback_prefix',
      'fallBack' => 'fallback'
    ]);

    $this->assertInstanceOf(
      Config::class,
      $config
    );

    $this->assertEquals(
      'client_id',
      $config->clientId
    );

    $this->assertEquals(
      'client_secret',
      $config->clientSecret
    );

    $this->assertEquals(
      trim('https://test.domain.tld/', '/'),
      $config->endpoint
    );

    $this->assertEquals(
      'merchant_serial_number',
      $config->merchantSerialNumber
    );

    $this->assertEquals(
      'access_token_subscription_key',
      $config->accessTokenSubscriptionKey
    );

    $this->assertEquals(
      'ecommerce_subscription_key',
      $config->ecommerceSubscriptionKey
    );

    $this->assertEquals(
      'callback_prefix',
      $config->callbackPrefix
    );

    $this->assertEquals(
      'fallback',
      $config->fallBack
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

    $config->callbackPrefix = 'callback_prefix';
    $this->assertEquals(
      'callback_prefix',
      $config->callbackPrefix
    );

    $config->fallBack = 'fallback';
    $this->assertEquals(
      'fallback',
      $config->fallBack
    );
  }

  public function testCanBecomeImmuteable(): void {
    $config = Config::create();
    $config->clientId = '1234';

    $this->assertEquals(
      '1234',
      $config->clientId
    );

    $config->immuteable(true);

    $config->clientId = '5678';
    $this->assertEquals(
      '1234',
      $config->clientId
    );
  }
}
