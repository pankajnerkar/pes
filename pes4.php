<?php
/**
 * Problem 4: Largest palindrome product
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */
$largest=101;
$l1 = $l2 = 999;
for ($i=999; $i>=100; $i--) {
        for ($j=999; $j>=100; $j--) {
                $k = $i*$j;
                $kstr = "$k";
                if($kstr == strrev($kstr) && $k>$largest) {
                        $largest = $k;
                        $l1 = $i;
                        $l2 = $j;
                }
        }
}

echo "largest palindrome product of 3 digit nums = $largest = $l1 x $l2\n";
?>