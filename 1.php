<?php

$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 100);
}

function bubble($arr, $dir) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = ($i + 1); $j < count($arr); $j++) {
            if (compare($dir)) {
                if ($arr[$i] > $arr[$j]) {
                    $c = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $c;
                }
            } else {
                if ($arr[$i] < $arr[$j]) {
                    $c = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $c;
                }
            }
        }

    }
    print_r($arr);
}

function compare($dir) {
    switch ($dir) {
        case 'asc':
            return true;
            break;
        case 'desc' :
            return false;
            break;
    }
}

bubble($arr, 'asc');
bubble($arr, 'desc');
