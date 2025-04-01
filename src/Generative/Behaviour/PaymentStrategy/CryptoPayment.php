<?php

namespace App\Generative\Behaviour\PaymentStrategy;

class CryptoPayment implements IPay
{
    public function pay(float $sum): bool
    {
        echo 'Оплата через CryptoPayment на сумму ' . $sum . PHP_EOL;
        return true;
    }
}