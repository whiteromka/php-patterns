<?php

namespace App\Structure\WarriorBridge;

abstract class Warrior
{
    public function __construct(protected IWeapon $weapon)
    {}

    abstract public function fight();
}