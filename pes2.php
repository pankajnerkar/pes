<?php
$n1 = 1;
$n2 = 2;
$sum = 2;
$i = 2;
while($i < 4000000) {
        $i = $n1 + $n2;
        $n1 = $n2;
        $n2 = $i;
        if ($i%2 == 0) {
                $sum += $i;
        }
}
echo $sum;
?>