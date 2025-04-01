<?php

namespace App\Generative\Behaviour\ActivityStrategy;

class Coding implements Activity
{
    public function doActivity()
    {
        echo "Developer write code! "  . PHP_EOL;
    }
}