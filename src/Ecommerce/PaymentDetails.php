<?php

namespace Vipps\Ecommerce;

use Vipps\Model;
use Vipps\Vipps;

/**
 * @package Vipps
 *
 * @property string $orderId
 * @property TransactionLog[] $transactionLogHistory
 */
class PaymentDetails extends Model
{
  /** @var string */
  const VIPPS_ENDPOINT = '/ecomm/v2/payments/';

  /** @var array */
  protected $fields = [
    'orderId',
    'transactionLogHistory'
  ];

  /**
   * Retrieves a PaymentDetails
   *
   * @param string $id
   * @return PaymentDetails
   */
  public static function retrieve(string $id): PaymentDetails
  {
    $paymentDetails = Vipps::getClient(self::VIPPS_ENDPOINT)
      ->get('/' . $id . '/details')
      ->toArray();

    return new static($paymentDetails);
  }

  /**
   * Sets the transactionLogHistoru
   *
   * @param array $transactionLogHistory
   * @return PaymentDetails
   */
  public function setTransactionLogHistory(array $transactionLogHistory = []): PaymentDetails
  {
    $this->attributes['transactionLogHistory'] = array_map(function (array $transactionLog) {
      if ($transactionLog instanceof TransactionLog)
        return $transactionLog;

      return TransactionLog::create($transactionLog);
    }, $transactionLogHistory);

    return $this;
  }
}
