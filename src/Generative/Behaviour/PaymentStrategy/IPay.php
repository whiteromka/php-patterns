<?php

namespace App\Generative\Behaviour\PaymentStrategy;

interface IPay
{
    public function pay(float $sum): bool;
}