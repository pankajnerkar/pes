<?php
/**
 * Problem 6: Sum square difference
 * 
 * The sum of the squares of the first ten natural numbers is,
 * 1^2 + 2^2 + ... + 10^2 = 385
 * The square of the sum of the first ten natural numbers is,
 * (1 + 2 + ... + 10)^2 = 552 = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
 * 
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */
$sum = 0;
$square = 0;

for ($i=1; $i<=100; $i++) {
	$sum += $i*$i;
	$square += $i;
}
echo "diff between sum of squares and square of sum of first 100 natural numbers = ", ($square*$square) - $sum;
?>