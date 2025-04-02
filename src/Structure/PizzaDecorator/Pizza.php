<?php

namespace App\Structure\PizzaDecorator;

interface Pizza
{
    public function getIngridients(): string;
    public function getCost(): int;
}