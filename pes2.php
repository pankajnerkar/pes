<?php
/*
 * It is observed that every third number is fibonacci series is even.
 * So, directly adding every third number to $sum, and got rid of if condition.
 */
$n1 = 1;
$n2 = 1;
$n3 = $n1 + $n2;
$sum = 0;
while($n3 < 4000000) {
	$sum += $n3;
	$n1 = $n2 + $n3;
	$n2 = $n1 + $n3;
	$n3 = $n1 + $n2;
}
echo $sum;
?>