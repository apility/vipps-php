<?php

namespace Vipps\Traits;

use ReflectionClass;

trait Setters
{

  /**
   * Magic method to handle setters
   *
   * @param string $key
   * @param mixed $value
   * @return mixed
   */
  public function __set(string $key, $value)
  {
    $method = 'set' . $key;

    $callback = function () use ($method, $key, $value) {
      if (method_exists($this, $method))
        return $this->{$method}($value);

      if (property_exists($this, 'attributes') && property_exists($this, 'fields') && in_array($key, $this->fields))
        return $this->attributes[$key] = $value;
    };

    $usingImmuteableTrait = in_array(
      Immuteable::class,
      array_keys((new ReflectionClass(static::class))->getTraits())
    );

    if ($usingImmuteableTrait) {
      return $this->mutate($callback);
    }

    return $callback();
  }

  /**
   * Set values in a builder pattern
   *
   * @param string $key
   * @param mixed $value
   * @return self
   */
  public function set (string $key, $value): self {
    $this->__set($key, $value);
    return $this;
  }
}
