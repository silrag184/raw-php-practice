<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

function multiply($a, $b) {
    // Convert inputs to float to handle any numeric values including integers and floats
    $num1 = (float)$a;
    $num2 = (float)$b;
    return $num1 * $num2;
}

// For debugging or web usage, get input from GET parameters if available
if (php_sapi_name() === 'cli') {
    // CLI mode: get input from command line
    function getUserInput($prompt) {
        echo $prompt;
        return trim(fgets(STDIN));
    }

    $num1 = getUserInput("Enter the first number: ");
    $num2 = getUserInput("Enter the second number: ");
} else {
    // Web mode: get input from query parameters
    $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
    $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
}

$result = multiply($num1, $num2);
echo "The multiplication of $num1 and $num2 is: $result\n";

?>
