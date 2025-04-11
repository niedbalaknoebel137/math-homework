<?php
// Define variables and constants
$student_name = 'John Doe';
$math_score = 90;
$total_tests = 4;

// Calculate average grade
$average_grade = $math_score / $total_tests * 100;

// Output the results
echo "Student: $student_name\n";
echo "Math Score: $math_score\n";
echo "Total Tests: $total_tests\n";
echo "Average Grade: " . number_format($average_grade, 2) . "\n";

?>
