<?php

namespace App\Structure\WarriorBridge;

class Horseman extends Warrior
{
    public function fight()
    {
        echo 'Конный всадник ' . $this->weapon->attack();
    }
}