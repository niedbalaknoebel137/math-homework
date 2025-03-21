<?php
// Example PHP code for homework 1: Simple arithmetic operations and conditional statements

$number1 = 5;
$number2 = 3;

// Addition
echo "The sum of $number1 and $number2 is: " . ($number1 + $number2) . "<br>";

// Subtraction
if ($number1 > $number2) {
    echo "Number1 is greater than Number2.";
} else {
    echo "Number2 is greater than Number1.";
}

// Multiplication
echo "The product of $number1 and $number2 is: " . ($number1 * $number2) . "<br>";

// Division (not implemented in PHP)
if ($number1 > $number2) {
    echo "Division of $number1 by $number2 is not defined.";
}

// Increment
echo "Incrementing $number1 by 10 gives: " . ($number1 + 10) . "<br>";

// Decrement
echo "Decrementing $number1 by 5 gives: " . ($number1 - 5) . "<br>";
?>
