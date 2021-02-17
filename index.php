<?php 

    // var_dump untuk mengetahui tipe data 
    var_dump(1234);
    echo "<br>";
    var_dump("Dhandy");
    echo "<br>";
    var_dump('c');
    echo "<br>";
    var_dump(1_000_000_000);
    echo "<br>";

    // variable
    $nomor = 0;
    $nomor = 3;
    echo $nomor;
    echo "<br><br><br>";

    // pengulangan
    for($angka1 = 0; $angka1 < 10; $angka1++) {
        echo $angka1;
        echo "<br>"; 
    }


    echo "<br>";

    // membuat variable menjadi immutable
    define("nama", "Dhandy");
    define("kelas", 1);

    echo nama;
    echo "<br>";
    echo kelas;
    echo "<br>";


    // Array
    $mahasiswa = ["Dhandy", 1, false];
    var_dump($mahasiswa);    
    
    

?>