<?php

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
