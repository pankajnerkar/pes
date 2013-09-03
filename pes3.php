<?php
/**
 * Problem 3: Largest prime factor
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */
$n = 600851475143;
$factor = 2;
$lastFactor = 1;

while ($n > 1) {
	if ($n % $factor == 0) {
		$lastFactor = $factor;
		$n = $n / $factor;
		while ($n % $factor == 0) {
			$n = $n/$factor;
		}
	}
	$factor++;
}
echo "largest factor = $lastFactor\n";
?>