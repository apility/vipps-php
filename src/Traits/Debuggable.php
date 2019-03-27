<?php

namespace Vipps\Traits;

trait Debuggable
{
  /**
   * Magic method to customize debug info
   *
   * @return array
   */
  public function __debugInfo(): array
  {
    $model = [];

    foreach ($this->fields as $field) {
      $model[$field] = $this->{$field};
    }

    return $model;
  }
}
