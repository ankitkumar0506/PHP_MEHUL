<?php
// PHP Script to Calculate Total Marks of Student and Display Grade

// These are the marks of five subjects
$sub_Physics = 95;
$sub_Chemistry = 85;
$sub_Biology = 74;
$sub_Mathematics = 64;
$sub_Computer = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

// It will calculate total, average, percentage, and grade
$total = $sub_Physics + $sub_Chemistry + $sub_Biology + $sub_Mathematics + $sub_Computer;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
echo "The Total marks   = " . $total . "/500\n"; 
echo "<br>";
echo "The Average marks = " . $average . "\n"; 
echo "<br>";
echo "The Percentage    = " . $percentage . "%\n"; 
echo "<br>";
echo "The Grade         = '" . $grade . "'\n";

?>