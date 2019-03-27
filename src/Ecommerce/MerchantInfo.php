<?php

namespace Vipps\Ecommerce;

use Vipps\Model;
use Vipps\Vipps;

/**
 * @package Vipps
 *
 * @property string $authToken
 * @property string $callbackPrefix
 * @property string $consentRemovalPrefix
 * @property bool $isApp
 * @property string $merchantSerialNumber
 * @property string $paymentType
 * @property string $shippingDetailsPrefix
 * @property string $fallBack
 */
class MerchantInfo extends Model
{
  protected $fields = [
    'authToken',
    'callbackPrefix',
    'consentRemovalPrefix',
    'isApp',
    'merchantSerialNumber',
    'paymentType',
    'shippingDetailsPrefix',
    'fallBack'
  ];

  public function __construct(array $merchantInfo = [], $immuteable = true)
  {
    parent::__construct([], false);

    if (!$this->merchantSerialNumber) {
      $this->merchantSerialNumber = $merchantInfo['merchantSerialNumber'] ?? Vipps::getConfig()->merchantSerialNumber ?? null;
    }

    if (!$this->callbackPrefix) {
      $this->callbackPrefix = $merchantInfo['callbackPrefix'] ?? Vipps::getConfig()->callbackPrefix ?? null;
    }

    if (!$this->fallBack) {
      $this->fallBack = $merchantInfo['fallBack'] ?? Vipps::getConfig()->fallBack ?? null;
    }

    $this->immuteable($immuteable);
  }
}
