<?php
function getRandomNumber() {
    $numbers = range(1, 50);
    shuffle($numbers);
    return $numbers[0];
}
?>
