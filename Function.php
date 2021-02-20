<?php

sayHello();
echo "\n";

luasSegitiga(12, 6);
echo "\n";

$value = sum(0, 0);
var_dump($value);
echo $value;
echo "\n";

names("Dhandy", "strtoupper");
names("Dhandy", "strtolower");

echo "\n";

echo rekursif(6);


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


// Variable Function
function names($name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

// rekursif function 
function rekursif($angka): int {
    if ($angka == 0) {
        return 1;
    }

    return $angka * rekursif($angka - 1);
}

echo "\n\n";