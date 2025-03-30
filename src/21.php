<?php
  function addNumbers($a, $b) {
    if ($a == 0 || $b == 0) {
      echo "Error: Division by zero.";
    } else {
      echo "$a + $b = $a + $b";
    }
  }

  addNumbers(10, 5);
  addNumbers(2.5, 3);

?>
