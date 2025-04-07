<?php

namespace App\Generative\FactoryMethodBlacksmith;

class JapanSword implements ISword
{
    public function makeDamage()
    {
        echo 'наносит 10 урона быстро и точно!';
    }
}