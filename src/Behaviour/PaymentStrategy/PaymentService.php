<?php

namespace App\Behaviour\PaymentStrategy;

class PaymentService
{
    public function __construct(private readonly IPay $paySystem) {}

    public function makePay(float $sum)
    {
        if ($this->paySystem->pay($sum)) {
            echo 'Оплачено успешно!' . PHP_EOL;
        }
    }
}