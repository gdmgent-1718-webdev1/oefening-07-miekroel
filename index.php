<?php

$fibonaci = [0,1];

for($i = 2; $i < 100; ++$i){
    $fibonaci[$i] = $fibonaci[$i-1] + $fibonaci[$i-2];
}

foreach ($fibonaci as $j) {
    echo "${j}".PHP_EOL;
}