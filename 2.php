<?php

$str = 'a4s6d8';

$str = preg_replace("/[^0-9]/", '', $str);

$str = str_split($str);

$str = array_sum($str);

print_r($str);
print_r("\n");