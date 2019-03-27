<?php

namespace Vipps\Traits;

/**
 * @package Vipps
 *
 * @property bool $_immuteable Determines if this object is immuteable
 */
trait Immuteable
{
  /**
   * Sets the immuteable flag. Can not be disabled once enabled
   *
   * @param bool $immuteable
   * @return void
   */
  public function immuteable(bool $immuteable)
  {
    if (!property_exists($this, '_immuteable')) {
      $this->_immuteable = false;
    }

    if (!$this->_immuteable) {
      $this->_immuteable = $immuteable;
    }
  }

  /**
   * Performs the mutation if not immuteable
   *
   * @param callable $mutation
   * @return bool
   */
  public function mutate(callable $mutation): bool
  {
    if (!($this->_immuteable ?? false)) {
      $mutation();
      return true;
    }

    return false;
  }
}
