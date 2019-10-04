<?php

$num = 456;

function asd($num, $sys) {
    $arr = [];

    if ($num > $sys - 1) {
        if ($num % $sys != 0) {
            array_push($arr, $num % $sys);
            $num = intdiv($num, $sys);
            asd($num, $sys);
        } else {
            array_push($arr, 0);
            $num = $num / $sys;
            asd($num, $sys);
        }
    } else {
        array_push($arr, $num % $sys);
    }

    foreach ($arr as $item) {
        echo $item;
    }
}

echo asd($num, 2) . "\n";
echo asd($num, 8) . "\n";
echo asd($num, 16) . "\n";
