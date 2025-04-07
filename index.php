<?php

require __DIR__ . '/vendor/autoload.php';

use App\Behaviour\ActivityStrategy\Coding;
use App\Behaviour\ActivityStrategy\Developer;
use App\Behaviour\ActivityStrategy\Sleeping;
use App\Behaviour\PaymentStrategy\CryptoPayment;
use App\Behaviour\PaymentStrategy\PaymentService;
use App\Generative\FactoryMethodBlacksmith\ForgeService;
use App\Generative\FactoryMethodBlacksmith\JapanBlacksmith;
use App\Generative\Singleton\Singleton;
use App\Structure\PizzaDecorator\BasePizza;
use App\Structure\PizzaDecorator\PepperoniDecorator;

// Singleton
//$singleton = Singleton::getInstance();
//$singleton->doSomething();

// Strategy payment
//$cryptoPayment = new CryptoPayment();
//$paymentService = new PaymentService($cryptoPayment);
//$paymentService->makePay(123);

// Strategy developer activity
//$developer = new Developer();
//$developer->setActivity(new Sleeping());
//$developer->make();
//$developer->setActivity(new Coding());
//$developer->make();

// Decorator pizza
//$pizza = new BasePizza();
//$pepperoniPizza = new PepperoniDecorator($pizza);
//echo $pepperoniPizza->getCost();
//echo $pepperoniPizza->getIngridients();

// Factory method Blacksmith
$blacksmith = new JapanBlacksmith();
$forge = new ForgeService($blacksmith);
$sword = $forge->makeSword();
$sword->makeDamage();

