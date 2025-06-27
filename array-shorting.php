<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

// array-shorting.php
// Sort an array without using the built-in sort() function

function bubbleSort(array &$arr): void {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap elements
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Example usage
$numbers = [64, 34, 25, 12, 22, 11, 90];

echo "Original array:\n";
print_r($numbers);

bubbleSort($numbers);

echo "\nSorted array:\n";
print_r($numbers);
?>
