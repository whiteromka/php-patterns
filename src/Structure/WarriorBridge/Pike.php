<?php

namespace App\Structure\WarriorBridge;

class Pike implements IWeapon
{
    public function attack(): string
    {
        return 'Удар пикой!';
    }
}