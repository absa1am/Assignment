<?php

$mark = [];
$prime = [];
$size = 1000000;
$limit = (int) sqrt($size * 1.0) + 2;

// Assume all are primes
for($i = 0; $i <= $size + 7; $i++) $mark[$i] = 1;

// Marking 1 is not prime
$mark[1] = 0;
// Marking 2 is the only even prime
$mark[2] = 1;
// Marking all even number (greater than 2) are not prime
for($i = 4; $i <= $size; $i += 2) $mark[$i] = 0;

echo "2";
// Listing down 2 as prime
array_push($prime, 2);
for($i = 3; $i <= $size; $i += 2) {
    // If $mark[$i] is 1 then it is prime
    if($mark[$i]) {
        echo ", ".$i;
        array_push($prime, $i);
        // Marking all factors is not prime of the prime
        if($i <= $limit) {
            for($j = $i * $i; $j <= $size; $j += ($i + $i))
                $mark[$j] = 0;
        }
    }
}

// for($i = 0; $i < count($prime); $i++) echo $prime[$i]." ";