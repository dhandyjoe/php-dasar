<?php

// for loops 
echo " Pengulangan FOR " . PHP_EOL;
for($number = 0; $number < 10; $number++) {
    echo "Mahasiswa ke - " . $number . PHP_EOL;
}

echo "\n";

// while loops
echo " Pengulangan WHILE " . PHP_EOL;
$angka = 1;

while ($angka <= 10) {
    if ($angka % 2 == 0) {
        echo $angka . " adalah bilangan genap" . PHP_EOL;
    } else {
        echo $angka . " adalah bilangan ganjil" . PHP_EOL;
    }
    $angka++;
}

echo "\n";

// do while loops
echo " Pengulangan DO WHILE " , PHP_EOL;
$angka1 = 10;
do {
    echo "The number is " . $angka1 . PHP_EOL;
    $angka1--;
} while ($angka1 > 0);




echo "\n";