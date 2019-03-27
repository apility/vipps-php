<?php

declare (strict_types = 1);

use Vipps\Vipps;
use Vipps\Config;
use Vipps\Client;

use Vipps\Tests\TestCase;

final class VippsTest extends TestCase
{
  public function testCanSetAndGetConfig (): void {
    $this->assertInstanceOf(
      Config::class,
      Vipps::getConfig()
    );

    $this->assertEquals(
      $this->config,
      Vipps::getConfig()
    );
  }

  public function testCanGetTimestamp (): void {
    $timestamp = Vipps::getTimestamp();

    $this->assertNotFalse(
      DateTime::createFromFormat('Y-m-d\TH:i:s\Z' , $timestamp),
      Vipps::getTimestamp()
    );
  }

  public function testCanCreateUniqueId (): void {
    $uniqueIds = [];

    for ($i = 0; $i < 100; $i++) {
      $id = Vipps::getUniqueID();

      $this->assertNotContains(
        $id,
        $uniqueIds
      );

      $uniqueIds[] = $id;
    }

    $this->assertCount(
      100,
      $uniqueIds
    );
  }
}
