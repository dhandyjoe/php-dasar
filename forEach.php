<?php

// forEach digunakan untuk mendeklarasikan value array
// sebenernya bisa memakai loop biasa , 
// namun terlalu bertele tele
// Menggunakan forEach akan mempercepat deklarasi array


$mahasiswa = ["Dhandy", "Jenny", "Shiva", "Bona"];


// forEach biasa
foreach($mahasiswa as $nama) {  
    echo "Nama Mahasiswa : " . $nama . PHP_EOL;
}

// forEach menggunakan index

foreach($mahasiswa as $index => $nama) {
    echo "Nama ke - " . $index . " Mahasiswa : " . $nama . PHP_EOL;
}

