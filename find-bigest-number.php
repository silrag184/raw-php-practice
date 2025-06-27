<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

function findBiggestNumber(array $numbers): int {
    if (empty($numbers)) {
        throw new InvalidArgumentException("Array is empty");
    }
    $max = $numbers[0];
    foreach ($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}

// Example usage
$numbers = [10, 25, 3, 99, 56, 78];
$biggest = findBiggestNumber($numbers);
echo "The biggest number is: $biggest\n";

?>
