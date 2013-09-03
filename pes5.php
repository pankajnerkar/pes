<?php
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
                echo "smallest number evenly divisible by $limit is $i\n";
                break 1;
        }
}
?>