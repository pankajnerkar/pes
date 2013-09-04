<?php
/**
 * Problem 10: Summation of primes
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 * Find the sum of all the primes below two million.
 * 
 * Uses GMP - http://www.php.net/manual/en/book.gmp.php
 */
for($prime=2, $sum=0; $prime < 2000000; $sum+=$prime, $prime=gmp_intval(gmp_nextprime($prime)));
echo "Sum of all prime numbers < 2 million is: $sum";
?>