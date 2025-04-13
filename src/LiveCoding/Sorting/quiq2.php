<?php
function quickSort(array $array): array {
    // базовый кейс
    if (count($array) <= 1) {
        return $array;
    }

    // левый правый
    $pivot = $array[0];
    $left = $right = [];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    // рекурсия
    return array_merge(
        quickSort($left),
        [$pivot],
        quickSort($right)
    );
}

// Пример использования
$unsortedArray = [3, 6, 8, 10, 1, 2, 1];
$sortedArray = quickSort($unsortedArray);

print_r($sortedArray);
