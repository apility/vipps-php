<?php

namespace Vipps\Traits;

use ReflectionClass;

trait AmountMutator
{
  /**
   * Sets the amount
   *
   * @param string $amount
   * @return self
   */
  public function setAmount(float $amount)
  {
    if (property_exists($this, 'attributes') &&  property_exists($this, 'fields') && in_array('amount', $this->fields)) {
      $value = $amount * 100;

      $callback = function () use ($value) {
        $this->attributes['amount'] = $value;
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

    return $this;
  }

  /**
   * Retrieves the amount
   *
   * @return string|null
   */
  public function getAmount(): float
  {
    return ($this->attributes['amount'] ?? 0) / 100;
  }
}
