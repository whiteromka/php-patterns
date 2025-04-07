<?php

namespace App\Structure\WarriorBridge;

class Sword implements IWeapon
{
    public function attack(): string
    {
        return 'Удар мечем!';
    }
}