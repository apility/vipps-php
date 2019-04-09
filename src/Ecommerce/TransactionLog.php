<?php

namespace Vipps\Ecommerce;

use Vipps\Model;

/**
 * @package Vipps
 *
 * @property float $amount
 * @property string $transactionText
 * @property string $timeStamp
 * @property string $operation
 * @property string $requestId
 * @property bool $operationSuccess
 */
class TransactionLog extends Model
{
  use \Vipps\Traits\AmountMutator;

  /** @var array */
  protected $fields = [
    'amount',
    'transactionText',
    'transactionId',
    'timeStamp',
    'operation',
    'requestId',
    'operationSuccess',
  ];

  /** @var array */
  protected $rawValues = ['amount'];

  /**
   * Gets the operationSuccess
   *
   * @return bool
   */
  public function getOperationSuccess(): bool
  {
    return boolval($this->attributes['operationSuccess']);
  }
}
