<?php

namespace App\Tests;

use Codeception\TestCase\Test;
use Codeception\Util\Fixtures;
use Nette\DI\Container;

abstract class FunctionalTest extends Test {

  /** @var Container */
  protected $container;

  protected function _before() {
    parent::_before();
    $this->container = Fixtures::get('container');
  }
}
