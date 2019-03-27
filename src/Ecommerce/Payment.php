<?php

namespace Vipps\Ecommerce;

use Vipps\Model;
use Vipps\Vipps;
use Vipps\Response;

/**
 * @package Vipps
 *
 * @property string $orderId
 * @property string $url
 * @property MerchantInfo $merchantInfo
 * @property CustomerInfo $customerInfo
 * @property Transaction $transaction
 */
class Payment extends Model
{
  /** @var string */
  const VIPPS_ENDPOINT = '/ecomm/v2/payments/';

  /** @var array */
  protected $fields = [
    'url',
    'orderId',
    'merchantInfo',
    'customerInfo',
    'transaction',
  ];

  /**
   * Instantiates a Payment
   *
   * @param array $payment = []
   * @param bool $immuteable = true
   */
  public function __construct(array $payment = [], bool $immuteable = true)
  {
    parent::__construct([], false);

    $this->__set('merchantInfo', MerchantInfo::create($payment['merchantInfo'] ?? [], $immuteable));
    $this->__set('customerInfo', CustomerInfo::create($payment['customerInfo'] ?? [], $immuteable));
    $this->__set('transaction', Transaction::create($payment['transaction'] ?? [], $immuteable));

    $this->immuteable($immuteable);
  }

  /**
   * Charges the payment reserves or captures depending on Vipps account
   *
   * @return void
   */
  public function charge()
  {
    $response = Vipps::getClient(self::VIPPS_ENDPOINT)->post('/', $this);

    $this->url = $response->url;
    $this->orderId = $response->orderId;
    $this->immuteable(true);

    return $this;
  }

  /**
   * Retrieves the Payment status
   *
   * @param string $id
   * @return selfStatus|null
   */
  public static function status(string $id): ? PaymentStatus
  {
    return PaymentStatus::retrieve($id);
  }

  /**
   * Retrieves the Payment details
   *
   * @param string $id
   * @return selfDetails|null
   */
  public static function details(string $id): ? PaymentDetails
  {
    return PaymentDetails::retrieve($id);
  }

  /**
   * Captures a payment by orderId
   *
   * @param string $orderId
   * @param float $amount
   * @param string $message
   * @return Response
   */
  public static function capture($orderId, $amount = 0, string $message = null)
  {
    return Vipps::getClient(self::VIPPS_ENDPOINT)
      ->post('/' . $orderId . '/capture', [
        'merchantInfo' => MerchantInfo::create(),
        'transaction' => Transaction::create()
          ->set('amount', $amount)
          ->set('transactionText', $message)
      ]);
  }

  /**
   * Cancels a payment by orderId
   *
   * @param string $orderId
   * @param string $message
   * @return Response
   */
  public static function cancel($orderId, string $message = null): Response
  {
    return Vipps::getClient(self::VIPPS_ENDPOINT)
      ->put('/' . $orderId . '/cancel', [
        'merchantInfo' => MerchantInfo::create(),
        'transaction' => Transaction::create([
          'transactionText' => $message
        ])
      ]);
  }

  /**
   * Refunds a payment by orderId
   *
   * @param string $orderId
   * @param float $amount
   * @param string $message
   * @return Response
   */
  public static function refund($orderId, $amount = 0, string $message = null): Response
  {
    return Vipps::getClient(self::VIPPS_ENDPOINT)
      ->post('/' . $orderId . '/refund', [
        'merchantInfo' => MerchantInfo::create(),
        'transaction' => Transaction::create()
          ->set('amount', $amount)
          ->set('transactionText', $message)
      ]);
  }
}
