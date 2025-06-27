<?php

function reverseString(string $str): string {
    return strrev($str);
}

// Example usage
$input = "Hello, World!";
$reversed = reverseString($input);
echo "Original string: $input\n";
echo "Reversed string: $reversed\n";

?>
