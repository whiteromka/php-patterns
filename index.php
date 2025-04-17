<?php

require __DIR__ . '/vendor/autoload.php';

use App\Behaviour\ActivityStrategy\Coding;
use App\Behaviour\ActivityStrategy\Developer;
use App\Behaviour\ActivityStrategy\Sleeping;
use App\Behaviour\PaymentStrategy\CryptoPayment;
use App\Behaviour\PaymentStrategy\PaymentService;
use App\Generative\FactoryDocument\DocumentFactory;
use App\Generative\FactoryMethodBlacksmith\ForgeService;
use App\Generative\FactoryMethodBlacksmith\JapanBlacksmith;
use App\Generative\Singleton\Singleton;
use App\LiveCoding\Generators\BigFileReader;
use App\LiveCoding\Generators\BigFileReaderAdvancedGenerator;
use App\LiveCoding\Generators\BigFileReaderGenerator;
use App\LiveCoding\Others\SimpleRecursion;
use App\Structure\PizzaDecorator\BasePizza;
use App\Structure\PizzaDecorator\PepperoniDecorator;
use App\Structure\WarriorBridge\Footman;
use App\Structure\WarriorBridge\Horseman;
use App\Structure\WarriorBridge\Pike;
use App\Structure\WarriorBridge\Sword;

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
//$blacksmith = new JapanBlacksmith();
//$forge = new ForgeService($blacksmith);
//$sword = $forge->makeSword();
//$sword->makeDamage();

// Factory documents
//$pdf = DocumentFactory::createDocument('pdf');
//$pdf->showText();

// Warrior Bridge
//$horseman = new Horseman((new Pike()));
//$footman = new Footman((new Sword()));
//
//$horseman->fight();
//$footman->fight();

// BigFileReaderGenerator
//$startMemory = memory_get_usage();
//$file = './example_500kb.csv';

// Чанки не помогают ни как(
//$reader = new BigFileReaderAdvancedGenerator();
//$generator = $reader->readBigFile($file);
//foreach ($generator as $line) {
//    echo $line . "/n";
//}

// простой генератор самый эффективный (file_exists, fopen, while >>> fgets fclose)
//$reader = new BigFileReaderGenerator();
//$generator = $reader->readBigFile($file);
//foreach ($generator as $line) {
//    echo $line . "/n";
//}

//$reader = new BigFileReader();
//$reader->readBigFile($file);
//
//echo "\n";
//echo 'Память использовано: ' . (memory_get_usage() - $startMemory) . ' байт' . "\n";
//echo 'Пиковое значение: ' . memory_get_peak_usage() . ' байт'  . "\n";

//$simpleRecursion = new SimpleRecursion();
//$res = $simpleRecursion->recursiveSum(4);
//echo ' = ' . $res;

//$res = $simpleRecursion->recursiveSum_(1, 4);
//echo ' = ' . $res;


