<?php

namespace Vipps\Ecommerce;

use Vipps\Model;

/**
 * @package Vipps
 *
 * @property float $amount
 * @property string $status
 * @property string $timeStamp
 */
class TransactionInfo extends Model
{
  use \Vipps\Traits\AmountMutator;

  /** @var array */
  protected $fields = ['amount', 'status', 'timeStamp'];

  /** @var array */
  protected $rawValues = ['amount'];
}
