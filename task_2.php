<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbers) {
    $newArray = array_filter($numbers, function ($item) {
        return $item % 2 != 0;
    });
    return $newArray;
}

$filtered_numbers = removeEvenNumbers($numbers);

print_r($filtered_numbers);