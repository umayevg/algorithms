<?php

$numbers = [8, 4, 56, 1, 410, 13, 25, 12, 8, 78, 4, 50];

function binarySearch($arr, $target)
{
    // Binary search works only with sorted data
    sort($arr);

    $low = 0;
    $max = count($arr) - 1;

    while ($low <= $max) {
        $middle = floor(($low + $max) / 2);
        $guess = $arr[$middle];

        if ($guess === $target) return $middle;

        if ($guess > $target) {
            $max = $middle - 1;
        } else {
            $low = $middle + 1;
        }
    }
}



// Sorted array: [1, 4, 4, 8, 8, 12, 13, 25, 50, 56, 78, 410]

print_r('index ' . binarySearch($numbers, 1) . PHP_EOL);
print_r('index ' . binarySearch($numbers, 13) . PHP_EOL);
