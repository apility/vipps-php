<?php

namespace Vipps;

use ArrayAccess;
use JsonSerializable;

/**
 * @package Vipps
 */
abstract class Model implements ArrayAccess, JsonSerializable
{
  use \Vipps\Traits\Getters;
  use \Vipps\Traits\Setters;
  use \Vipps\Traits\Immuteable;
  use \Vipps\Traits\ArrayLike;
  use \Vipps\Traits\Debuggable;

  protected $_immuteable = false;

  /** @var array */
  protected $fields = [];

  /** @var array */
  protected $attributes = [];

  /** @var array */
  protected $rawValues = [];

  /**
   * Instantiates a Model
   *
   * @param array $attributes = []
   * @param bool $immuteable = true
   */
  public function __construct(array $attributes = [], $immuteable = true)
  {
    foreach ($attributes as $key => $value) {
      if (in_array($key, $this->fields)) {
        $this->{$key} = $value;
      }
    }

    $this->immuteable($immuteable);
  }

  /**
   * Creates a new Model
   *
   * @param array $attributes = []
   * @return self
   */
  public static function create(array $attributes = [], $immuteable = false)
  {
    return new static($attributes, $immuteable);
  }

  /**
   * Overrides the json serialization of the object
   *
   * @return array
   */
  public function jsonSerialize(): array
  {
    $model = array_filter($this->__debugInfo(), function ($value) {
      return !is_null($value);
    });

    foreach ($this->rawValues as $key) {
      $model[$key] = $this->attributes[$key] ?? null;
    }

    return $model;
  }
}
