<?php

namespace Vipps;

/**
 * @package Vipps
 *
 * @property string $endpoint
 * @property string $clientId
 * @property string $clientSecret
 * @property string $merchantSerialNumber
 * @property string $accessTokenSubscriptionKey
 * @property string $ecommerceSubscriptionKey
 */
class Config extends Model
{
  /** @var array */
  protected $fields = [
    'endpoint',
    'clientId',
    'clientSecret',
    'merchantSerialNumber',
    'accessTokenSubscriptionKey',
    'ecommerceSubscriptionKey'
  ];

  /**
   * Creates a new configuration object
   *
   * @param array $config = []
   * @return self
   */
  public static function create(array $config = [], $immuteable = false)
  {
    return new static($config, $immuteable);
  }

  /**
   * Retrieves the Vipps API endpoint
   *
   * @return string|null
   */
  public function getEndpoint(): ? string
  {
    return trim(($this->attributes['endpoint'] ?? 'https://api.vipps.no'), '/');
  }

  /**
   * Sets the Vipps API endpoint
   *
   * @param string $value = 'https://api.vipps.no'
   * @return \Vipps\Config
   */
  public function setEndpoint(string $value = 'https://api.vipps.no'): Config
  {
    $this->attributes['endpoint'] = $value;
    return $this;
  }
}
