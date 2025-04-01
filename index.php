<?php

require __DIR__ . '/vendor/autoload.php';

use App\Generative\Singleton\Singleton;

$singleton = Singleton::getInstance();
$singleton->doSomething();
