<?php
//union type example in PHP 8.0+
function processValue(int|string $value): void {
    if (is_int($value)) {
        echo "Processing integer: " . $value . "\n";
    } elseif (is_string($value)) {
        echo "Processing string: " . $value . "\n";
    }
}
processValue(42);          // Processing integer: 42
processValue("Hello");     // Processing string: Hello


?>