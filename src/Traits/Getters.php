<?php

namespace Vipps\Traits;

trait Getters
{
  /**
   * Magic method to handle getters
   *
   * @param string $key
   * @return mixed
   */
  public function __get(string $key)
  {
    $method = 'get' . $key;

    if (method_exists($this, $method))
      return $this->{$method}();

    if (property_exists($this, 'attributes') &&  array_key_exists($key, $this->attributes))
      return $this->attributes[$key];
  }
}
