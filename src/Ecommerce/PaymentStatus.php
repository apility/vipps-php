<?php

namespace Vipps\Ecommerce;

use Vipps\Model;
use Vipps\Vipps;

/**
 * @package Vipps
 *
 * @property string $orderId
 * @property TransactionInfo $transactionInfo
 */
class PaymentStatus extends Model
{
  /** @var array */
  protected $fields = [
    'orderId',
    'transactionInfo'
  ];

  /** @var string */
  const VIPPS_ENDPOINT = '/ecomm/v2/payments/';

  /**
   * Instantiates a PaymentStatus
   *
   * @param array $paymentStatus = []
   * @param bool $immuteable = true
   */
  private function __construct(array $paymentStatus = [], $immuteable = true)
  {
    parent::__construct([], false);

    $this->orderId = $paymentStatus['orderId'];
    $this->transactionInfo = TransactionInfo::create($paymentStatus['transactionInfo'], $immuteable);

    $this->immuteable($immuteable);
  }

  /**
   * Retrieves a PaymentStatus
   *
   * @param string $id
   * @return PaymentStatus
   */
  public static function retrieve(string $id): PaymentStatus
  {
    $paymentStatus = Vipps::getClient(self::VIPPS_ENDPOINT)
      ->get('/' . $id . '/status')
      ->toArray();

    return new static($paymentStatus);
  }
}
