<?php

$max_num = 307;

function getPrimes($max_num) {
    $primes = [];
    for ($i = 2; $i <= $max_num; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    foreach ($primes as $prime) {
        echo $prime . "\n";
    }
}

function isPrime($num) {
    if ($num == 2) {
        return true;
    }

    if ($num % 2 == 0) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i += 1) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


getPrimes($max_num);