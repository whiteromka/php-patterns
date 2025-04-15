<?php

namespace App\LiveCoding\Others;

class SimpleRecursion
{
    public function recursiveSum(int $number): int
    {
        echo $number;
        if ($number === 1) {
            return $number;
        }
        echo ' + ';

        return $number + $this->recursiveSum($number - 1);
    }

    public function recursiveSum_(int $number, int $max): int
    {
        echo $number;
        if ($number === $max) {
            return $number;
        }
        echo ' + ';

        return $number + $this->recursiveSum_($number + 1, $max);
    }
}