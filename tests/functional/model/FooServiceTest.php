<?php

namespace App\Tests\Model;

use App\Model\FooService;
use App\Tests\FunctionalTest;

class FooServiceTest extends FunctionalTest {

  public function testFooFail() {
    /** @var FooService $service */
    $service = $this->container->getByType(FooService::class);

    $this->assertNotEquals('foo', $service->doBar());
  }

  public function testFooSuccess() {
    /** @var FooService $service */
    $service = $this->container->getByType(FooService::class);

    $this->assertEquals('bar', $service->doBar());
  }
}
