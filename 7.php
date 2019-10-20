<?php

function find_substr($str, $substr) {

    $str = str_split($str);

    $substr = str_split($substr);

    //print_r($str);
//
//    print_r($substr)

    $j = 0;

    for ($i = 0; $i <= count($str); $i++) {
        if ($j > count($substr) - 1) {
            echo 'Входит';
            $j = 0;
        }

        if ($i < count($str)) {
            if ($str[$i] == $substr[$j]) {
                $j++;
            } else {
                $j = 0;
            }
        }
    }
}

echo find_substr(' Hello World!', '!');