<?php

$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 100);
}

function bubble($arr, $dir)
{
    switch ($dir) {
        case "asc" :
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = ($i + 1); $j < count($arr); $j++) {
                    if ($arr[$i] > $arr[$j]) {
                        $c = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $c;
                    }
                }
            }
            print_r($arr);
            break;
        case  "desc" :
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = ($i + 1); $j < count($arr); $j++) {
                    if ($arr[$i] < $arr[$j]) {
                        $c = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $c;
                    }
                }
            }
            print_r($arr);
            break;

    }
}

bubble($arr, "asc");
bubble($arr, "desc");
