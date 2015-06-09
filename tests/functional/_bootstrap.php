<?php

// start DI container
$container = require __DIR__ . '/../../app/bootstrap.php';

// store container
\Codeception\Util\Fixtures::add('container', $container);
