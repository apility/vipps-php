<?php

namespace Vipps;

use DateTime;

/**
 * @package Vipps
 */
class Vipps
{
  /** @var Config Holds the global configuration */
  private static $config;

  /**
   * Retrieves the global configuration
   *
   * @return Config|null
   */
  public static function getConfig(): ? Config
  {
    return self::$config;
  }

  /**
   * Sets the global configuration
   *
   * @param Config $config
   * @return void
   */
  public static function setConfig(Config $config): void
  {
    self::$config = $config;
  }

  /**
   * Instatiates a new Client
   *
   * @param string $endpoint = '/'
   * @return Client
   */
  public static function getClient($endpoint = '/'): Client
  {
    return new Client($endpoint);
  }

  /**
   * Utility method to generate a unique id
   *
   * @return string
   */
  public static function getUniqueID(): string
  {
    $cstrong = true;
    return bin2hex(openssl_random_pseudo_bytes(15, $cstrong));
  }

  /**
   * Utility method to get the current timestamp
   *
   * @return string
   */
  public static function getTimestamp(): string
  {
    return (new DateTime())->format('Y-m-d\TH:i:s\Z');
  }
}
