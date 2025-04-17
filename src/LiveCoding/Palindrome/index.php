<?php

// 1221      -->  [22, 1221]
// 34322122  -->  [22, 212, 343, 22122]
// 1001331   -->  [33, 1001, 1331]
// 1294      -->  "No palindromes found"
// "1221"    -->  "Not valid"

$res = palindrome("-1221");
print_r($res);

function palindrome($number){
    if (is_string($number)) {
        return 'Not valid';
    }
    if ($number < 0) {
        return 'Not valid';
    }

    $combinations = [];
    $number = (string)$number;
    for ($i = 0; $i < strlen($number); $i++) {
        for ($j = 0; $j <= strlen($number); $j++) {
            $combi = substr($number, $i, $j);
            if (strlen($combi) > 1) {
                $combinations[] = $combi;
            }
        }
    }
    $combinations = array_unique($combinations);
    $palindromes = [];
    foreach ($combinations as $combination) {
        if (isPalindrome($combination)) {
            $palindromes[] = (int)$combination;
        }
    }
    sort($palindromes);
    if (count($palindromes) > 0) {
        return $palindromes;
    }
    return "No palindromes found";

}

function isPalindrome(string $number): bool {
    if ($number[0] == 0) {
        return false;
    }
    return $number === strrev($number);
}


