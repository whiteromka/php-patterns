<?php

namespace App\Structure\WarriorBridge;

class Footman extends Warrior
{
    public function fight()
    {
        echo 'Пехотинец ' . $this->weapon->attack();
    }
}