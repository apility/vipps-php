<?php

namespace Vipps;

use ArrayAccess;

/**
 * @pacakge Vipps
 */
class Response extends Model implements ArrayAccess
{
  /**
   * Instantiatesa new Response object
   *
   * @param array $params = []
   * @param bool $immuteable = true
   */
  public function __construct(array $response = [], $immuteable = true)
  {
    $this->attributes = $response;
    $this->fields = array_keys($this->attributes);

    $this->immuteable($immuteable);
  }
}
