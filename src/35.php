<?php
// This is a simple PHP script to demonstrate how to use an array and some basic functions.
// The array here contains numbers from 1 to 5. 

// Function to print each element in the array on a separate line.
function displayElements() {
    $elements = array(1, 2, 3, 4, 5);
    foreach ($elements as $element) {
        echo "Element: " . $element . "<br>";
    }
}

// Call the function to display elements
displayElements();

// Function to calculate the sum of an array of numbers.
function calculateSum($numbers) {
    return array_sum($numbers);
}

// Example usage:
$sum = calculateSum(array(1, 2, 3, 4, 5));
echo "The sum is: " . $sum;

// Main function for testing
function main() {
    // Here you can add your own code or additional functions here.
    displayElements();
    echo "This is a PHP script.";
}

main();
