<?php

$arr = [6,1,33,2,7,3,4,5];
// Отсортировать одномерный массив своими силами
function mySort(array $arr): array
{
    //sort($arr);
    usort($arr, function ($a, $b) {
        return $a <=> $b;
    });
    return $arr;
}
//print_r(mySort($arr));

// O(n log n)
function bubbleSort(array $arr): array
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {

        for ($j = 0; $j < $count - 1 - $i; $j++) {
            $currentItem = $arr[$j];
            $nextItem = $arr[$j + 1];
            if ($currentItem > $nextItem) {
                $arr[$j] = $nextItem;
                $arr[$j + 1] = $currentItem;
            }
        }
    }
    return $arr;
}

$r = bubbleSort($arr);
print_r($r);