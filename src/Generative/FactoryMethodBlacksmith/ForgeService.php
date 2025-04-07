<?php

namespace App\Generative\FactoryMethodBlacksmith;

class ForgeService
{
    public function __construct(private IBlacksmith $blacksmith)
    {
    }

    public function makeSword()
    {
        return $this->blacksmith->makeSword();
    }
}