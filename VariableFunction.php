<?php

/*
    Variable Function 
    ->  Kemampuan memanggil sebuah function dari value 
        yang terdapat di sebuah variable
*/


names("Dhandy", "strtoupper");
names("Dhandy", "strtolower");


function names($name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
