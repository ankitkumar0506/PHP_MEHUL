<!-- • How can you tell if a number is even or odd without using any Condition or loop?
check whether a number is even or odd without using any condition or loop. -->
<!-- php -->
<!-- EXAMPLE -->
<?php

$arr=array("0"=>"Even","1"=>"Odd");

$check=13;

echo "Your number is: ".$arr[$check%2];

?>
