<?php

function luasSegitiga($alas, $tinggi) {
    //code
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
 
// echo luasSegitiga(7, 19);

function sum(...$input) {
    $result = 0;
    foreach ($input as $value) {
        //code
    $result = $result + $value;
    }
    return $result;
}

echo sum(1, 2, 3, 56, 67, 99, 10). "<br>";