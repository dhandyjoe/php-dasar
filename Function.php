<?php

sayHello();
echo "\n";

luasSegitiga(12, 6);
echo "\n";

$value = sum(0, 0);
var_dump($value);
echo $value;
echo "\n";

echo "\n";

// =======================================================


// non parameter
function sayHello() {
    echo "nama saya adalah Dhandy";
}

// with parameter
function luasSegitiga($alas, $tinggi) {
    $luas = $alas * $tinggi / 2;
    echo "Luas segitiga adalah " . $luas;
}


// Return Function
function sum($firstNum, $secondNum): string {
    $value = $firstNum + $secondNum;
    return $value <= 0 ? "negatif" : "positif";
}


echo "\n\n";