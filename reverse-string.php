<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

function reverseString(string $str): string {
    return strrev($str);
}

// Example usage
$input = "Hello, World!";
$reversed = reverseString($input);
echo "Original string: $input\n";
echo "Reversed string: $reversed\n";

?>
