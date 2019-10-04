<?php

$arr = [1, 13 ,8 ,95];

$arithmetic = array_sum($arr)/count($arr);

$a = 1;

for ($i = 0; $i < count($arr); $i++) {
    $a *= $arr[$i];
}

$geometric  = pow($a, 1/count($arr));

echo $arithmetic . "\n";
echo $geometric . "\n";