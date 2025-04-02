<?php

require __DIR__ . '/vendor/autoload.php';

use App\Generative\Behaviour\ActivityStrategy\Coding;
use App\Generative\Behaviour\ActivityStrategy\Developer;
use App\Generative\Behaviour\ActivityStrategy\Sleeping;
use App\Generative\Behaviour\PaymentStrategy\CryptoPayment;
use App\Generative\Behaviour\PaymentStrategy\PaymentService;
use App\Generative\Singleton\Singleton;

// Singleton
//$singleton = Singleton::getInstance();
//$singleton->doSomething();

// Strategy payment
//$cryptoPayment = new CryptoPayment();
//$paymentService = new PaymentService($cryptoPayment);
//$paymentService->makePay(123);

// Strategy developer activity
$developer = new Developer();
$developer->setActivity(new Sleeping());
$developer->make();
$developer->setActivity(new Coding());
$developer->make();



