<?php

$num = 456;

function asd($num, $sys) {
    $arr = [];
    $letters = array('A','B','C','D','E','F');

    if ($num > $sys - 1) {
        if ($num % $sys != 0) {
            if ($sys == 16) {
                for ($i = 0; $i < count($letters); $i++) {
                    if ($num % $sys == $i + 10) {
                        array_push($arr, $letters[$i]);
                    }
                }

            }
            if ($num % $sys < 10) {
                array_push($arr, $num % $sys);
            }
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
