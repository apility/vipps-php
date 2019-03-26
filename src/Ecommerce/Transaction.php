<?php

namespace Vipps\Ecommerce;

use Vipps\Model;
use Vipps\Vipps;

/**
 * @package Vipps
 *
 * @property float $amount
 * @property string $orderId
 * @property string $timeStamp
 * @property string $transactionText
 */
class Transaction extends Model
{
  use \Vipps\Traits\AmountMutator;

  /** @var array */
  protected $fields = [
    'amount',
    'orderId',
    'timeStamp',
    'transactionText'
  ];

  /** @var array */
  protected $rawValues = ['amount'];

  /**
   * Creates a Transaction
   *
   * @param array $transaction = []
   * @return Transaction
   */
  public static function create(array $transaction = [], $immuteable = false): self
  {
    $transaction['orderId'] = $transaction['orderId'] ?? Vipps::getUniqueID();
    $transaction['timeStamp'] = $transaction['timeStamp'] ?? Vipps::getTimestamp();

    return new static($transaction, $immuteable);
  }
}
