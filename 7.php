<?php

function find_substr($str, $substr) {

    $str = explode(' ', $str);

    for ($i = 0; $i < count($str); $i++) {
        if ($str[$i] == $substr) {
            return 'Подстрока имеется' . "\n";
        }
    }
    return 'Подстроки нет' . "\n";
}

echo find_substr('Hello world', 'Hello');