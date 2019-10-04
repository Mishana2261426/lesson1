<?php

$num = 17;

for ($i = 1; $i < $num; $i++) {
    $i = gmp_nextprime($i);
    if ($i <= $num) {
        echo $i . "\n";
    }
}




