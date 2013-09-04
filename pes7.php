<?php
/**
 * Problem 7: 10001st prime
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10001st prime number?
 * 
 * Uses GMP - http://www.php.net/manual/en/book.gmp.php
 */
for($count = 0, $prime=0; $count < 10001; $prime=gmp_intval(gmp_nextprime($prime)), $count++);
echo "10001st prime number is: $prime";
?>