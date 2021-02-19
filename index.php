<?php 

    // var_dump untuk mengetahui tipe data 
    var_dump(1234);
    PHP_EOL;
    var_dump("Dhandy");
    PHP_EOL;
    var_dump('c');
    PHP_EOL;
    var_dump(1_000_000_000);
    PHP_EOL;

    // variable
    $nomor = 0;
    $nomor = 3;
    echo $nomor. PHP_EOL;


    // membuat variable menjadi immutable
    define("nama", "Dhandy");
    define("kelas", 1);
    echo nama . PHP_EOL;
    echo kelas . PHP_EOL;

    
    // Manipulasi String
    $nama = "Dhandy";
    echo $nama . " Jenny" . PHP_EOL;
?>