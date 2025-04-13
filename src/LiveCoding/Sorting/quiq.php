<?php
function quickSort(array $array): array {
    // Базовый случай: массивы с 0 или 1 элементом уже отсортированы
    if (count($array) <= 1) {
        return $array;
    }

    $pivot = $array[0]; // Опорный элемент (можно выбрать лучше)
    $left = $right = [];

    // Разделение элементов
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

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
// Результат: [1, 1, 2, 3, 6, 8, 10]