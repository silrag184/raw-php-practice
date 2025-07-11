<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

function isPrime(int $num): bool {
    if ($num <= 1){
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num %2 == 0 || $num%3 ==0){
        return false;
    }
    for ($i = 5; $i * $i <= $num; $i += 6){
        if ($num % $i == 0 || $num % ($i +2) == 0){
            return false;
        }
    }
    return true;
}

$testNumber = 32;
if (isPrime($testNumber)){
    echo "$testNumber is a prime number. \n";
}
else{
    echo "$testNumber is not a prime number. \n";
}

?>
