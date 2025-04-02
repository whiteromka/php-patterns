<?php

namespace App\Generative\Behaviour\PaymentStrategy;

class YandexPayment implements IPay
{
    public function pay(float $sum): bool
    {
        echo 'Оплата через YandexPayment на сумму ' . $sum . PHP_EOL;
        return true;
    }
}