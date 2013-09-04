<?php
/**
 * Problem 9: Special Pythagorean triplet
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 * a^2 + b^2 = c^2
 * For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
 * 
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
*/
for($i=1;$i<1000; $i++) {
	for($j=$i+1; $j<1000; $j++) {
		$k = 1000-$i-$j;
		if(($k*$k) == ($i*$i + $j*$j)) {
			echo "Pythagorian triplet: $i, $j, $k for which $i+$j+$k = 1000 and product = ", $i*$j*$k;
			break 2;
		}
	}
}
?>