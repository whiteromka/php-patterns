<?php

namespace App\Generative\Behaviour\ActivityStrategy;

class Sleeping implements Activity
{
    public function doActivity()
    {
        echo "Developer sleeping! " . PHP_EOL;
    }
}