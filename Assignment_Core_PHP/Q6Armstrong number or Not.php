<?php  

// ther are  Armstrong number...
// 0, 1, 153, 371, 407,...


$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  
?>  