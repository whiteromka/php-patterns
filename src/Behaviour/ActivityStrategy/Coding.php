<?php

namespace App\Behaviour\ActivityStrategy;

class Coding implements Activity
{
    public function doActivity()
    {
        echo "Developer write code! "  . PHP_EOL;
    }
}