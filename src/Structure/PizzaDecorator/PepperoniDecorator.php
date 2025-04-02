<?php

namespace App\Structure\PizzaDecorator;

class PepperoniDecorator extends PizzaDecorator
{
    public function getIngridients(): string
    {
        return parent::getIngridients() . ' , peperoni';
    }

    public function getCost(): int
    {
        return parent::getCost() + 50;
    }
}