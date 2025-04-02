<?php

namespace App\Behaviour\PaymentStrategy;

interface IPay
{
    public function pay(float $sum): bool;
}