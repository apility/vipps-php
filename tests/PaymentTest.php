<?php

declare (strict_types = 1);

use Vipps\Ecommerce\Payment;
use Vipps\Ecommerce\MerchantInfo;
use Vipps\Ecommerce\CustomerInfo;
use Vipps\Ecommerce\Transaction;

use Vipps\Tests\TestCase;

final class PaymentTest extends TestCase
{
  public function testCanSpecifyOrderId (): void {
    $payment = Payment::create();
    $payment->transaction->orderId = '1234';

    $this->assertEquals(
      '1234',
      $payment->transaction->orderId
    );
  }

  public function testCanCreatePayment (): void {
    $payment = Payment::create();

    $this->assertInstanceOf(
      Payment::class,
      $payment
    );

    $this->assertInstanceOf(
      MerchantInfo::class,
      $payment->merchantInfo
    );

    $this->assertInstanceOf(
      CustomerInfo::class,
      $payment->customerInfo
    );

    $this->assertInstanceOf(
      Transaction::class,
      $payment->transaction
    );
  }
}
