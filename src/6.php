  <?php
// Generate a random number between 1 and 10
$randomNumber = mt_rand(1, 10);

// Ask the user to guess the number
echo "Guess the number: ";
$guess = trim(fgets(STDIN));

// Check if the guess is correct
if ($guess == $randomNumber) {
    echo "You got it right! The number was $randomNumber";
} else {
    echo "Sorry, you didn't get it this time. Try again.";
}
?>