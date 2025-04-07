<?php

namespace App\Generative\FactoryMethodBlacksmith;

class JapanBlacksmith implements IBlacksmith
{
    public function makeSword(): ISword
    {
        return new JapanSword();
    }
}