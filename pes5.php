<?php
/**
 * Problem 5: Smallest multiple
 * 
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */
$evenlyDivisible = false;
$limit = 20;
for($i=$limit; !$evenlyDivisible; $i+=$limit) {
        for($j=2; $j<$limit; $j++) {
                if($i % $j == 0) {
                        $evenlyDivisible = true;
                } else {
                        $evenlyDivisible = false;
                        break 1; // break inner loop
                }
        }

        if($evenlyDivisible) {
                echo "smallest number evenly divisible by 1..$limit is $i\n";
                break 1;
        }
}
?>