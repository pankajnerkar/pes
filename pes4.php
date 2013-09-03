<?php
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