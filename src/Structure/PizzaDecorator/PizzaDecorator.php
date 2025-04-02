<?php

namespace App\Structure\PizzaDecorator;

class PizzaDecorator implements Pizza
{
    public function __construct(protected Pizza $pizza)
    {}

    public function getIngridients(): string
    {
        return $this->pizza->getIngridients();
    }

    public function getCost(): int
    {
        return $this->pizza->getCost();
    }
}