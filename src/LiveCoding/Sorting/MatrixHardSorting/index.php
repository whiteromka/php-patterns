<?php

function hasNoOne(array $matrix): bool {
    foreach ($matrix as $row) {
        if (!in_array(1, $row)) {
            return false;
        }
    }
    return true;
}

function sortMatrix(array $matrix): array
{
    $sortedMatrix = [];
    $tempRow = null;
    foreach ($matrix as $index => $row) {
        sort($row);
        $row = $tempRow ? $tempRow : $row;
        if ($index !== 0) {
            $row = swap($row);
        }
        $tempRow = $row;
        $sortedMatrix[] = $row;
    }
    return $sortedMatrix;
}

function swap(array $arr): array
{
    $keyOne = array_search(1, $arr);
    $nextKey = null;

    if ($keyOne !== false) {
        $nextKey = $keyOne + 1;
    }
    if ($keyOne !== false && isset($arr[$nextKey])) {
        $tempOne = $arr[$keyOne];
        $tempNext = $arr[$nextKey];
        $arr[$keyOne] = $tempNext;
        $arr[$nextKey] = $tempOne;
    }
    return $arr;
}

//        [1, 2, 3, 4, 5],
//        [2, 1, 3, 4, 5],
//        [2, 3, 1, 4, 5],
//        [2, 3, 4, 1, 5],
//        [2, 3, 4, 5, 1],
function toOneMatrix_(array $matrix): array
{
    if (!hasNoOne($matrix)) {
        throw new Exception("No one matrix found");
    }
    return sortMatrix($matrix);
}

function toOneMatrix(array $matrix): array {
    // Создаем копию матрицы, чтобы не изменять исходную
    $result = [];
    foreach ($matrix as $row) {
        $result[] = $row;
    }

    for ($i = 0; $i < count($result); $i++) {
        $row = $result[$i];
        $indexOfOne = array_search(1, $row);

        if ($indexOfOne === false) { // Если в строке нет 1, оставляем без изменений
            continue;
        }
        if ($indexOfOne === $i) { // Если 1 уже на главной диагонали, строка остается без изменений
            continue;
        }

        //            [1, 2, 3, 4, 5],
        //            [1, 2, 3, 4, 5],
        //            [1, 2, 3, 4, 5],
        //            [1, 2, 3, 4, 5],
        //            [1, 2, 3, 4, 5],
        // Меняем местами элемент на главной диагонали и 1
        $temp = $row[$i];
        $row[$i] = $row[$indexOfOne];
        $row[$indexOfOne] = $temp;
        $result[$i] = $row;
    }

    return $result;
}

$m = [
    [2, 3, 4, 5, 1],
    [1, 2, 3, 1, 5],
    [2, 3, 1, 4, 5],
    [1, 2, 5, 4, 3],
    [1, 2, 3, 4, 5],
];
$res = toOneMatrix($m);
//print_r($res);


// ================
// Тесты
assert(
    toOneMatrix(
        [
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
        ]
    ) === [
        [1, 2, 3, 4, 5],
        [2, 1, 3, 4, 5],
        [2, 3, 1, 4, 5],
        [2, 3, 4, 1, 5],
        [2, 3, 4, 5, 1],
    ]
);

assert(
    toOneMatrix(
        [
            [2, 3, 4, 5, 1],
            [1, 2, 3, 1, 5],
            [2, 3, 1, 4, 5],
            [1, 2, 5, 4, 3],
            [1, 2, 3, 4, 5],
        ]
    ) === [
        [1, 2, 3, 4, 5],
        [2, 1, 3, 1, 5],
        [2, 3, 1, 4, 5],
        [2, 5, 4, 1, 3],
        [2, 3, 4, 5, 1],
    ]
);

try {
    assert(
        toOneMatrix(
            [
                [1, 2, 3, 4, 5],
                [1, 2, 3, 4, 5],
                [2, 2, 3, 4, 5],
                [1, 2, 3, 4, 5],
                [1, 2, 3, 4, 5],
            ]
        ) === [
            [1, 2, 3, 4, 5],
            [2, 1, 3, 4, 5],
            [2, 3, 1, 4, 5],
            [2, 3, 4, 1, 5],
            [2, 3, 4, 5, 1],
        ]
    );
} catch(Exception $e) {
    echo 'no one in line';
}

?>