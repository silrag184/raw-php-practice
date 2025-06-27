<?php

function isPrime(int $num): bool {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}

// Find prime numbers in a given range
$start = 1;
$end = 200;

echo "Prime numbers between $start and $end are:\n";
for ($num = $start; $num <= $end; $num++) {
    if (isPrime($num)) {
        echo $num . "\n";
    }
}

?>
