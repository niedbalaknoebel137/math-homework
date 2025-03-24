<?php
function getRandomNumber($range) {
    $min = 0;
    $max = $range - 1;
    return $min + rand($min, $max);
}
?>
