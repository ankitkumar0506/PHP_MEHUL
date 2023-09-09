
<!-- Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total. -->

<?php

$numbers = array(1, 2, 3, 4, 5);
$total = 0;

for ($i = 0; $i < count($numbers); $i++)
{
    $total += $numbers[$i];
}

echo "The total is $total.";

?>