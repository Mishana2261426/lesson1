<?php

function ces($str, $shift) {
    $str = strtoupper($str);
    $alph = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $code = '';
    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = 0; $j < count($alph); $j++) {
            if ($str[$i] == $alph[$j]) {
                $code = $code . $alph[($j + $shift) % count($alph)];
            }
        }
    }
    return $code . "\n";
}

echo ces('Hello', 5);

