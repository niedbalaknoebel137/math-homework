<?php
  $math_homework = array();
  // add some random numbers to the array
  for ($i = 0; $i < 5; $i++) {
    $math_homework[] = rand(1, 10);
  }
  
  // print out the array with newlines between elements
  foreach ($math_homework as $value) {
    echo "$value\n";
  }
?>
