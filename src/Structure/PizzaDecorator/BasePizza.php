<?php

namespace App\Structure\PizzaDecorator;

class BasePizza implements Pizza
{

    public function getIngridients(): string
    {
        return 'Тесто, cыр';
    }

    public function getCost(): int
    {
        return 100;
    }
}