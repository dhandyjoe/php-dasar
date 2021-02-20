<?php

$name = [6,3,8,11,33,10,-1,4,6,5,1];

// Mengurutkan secara ascending
sort($name);
var_dump($name);

// Mengurutkan secara descending
rsort($name);
var_dump($name);

// Jika ingin mengambil key/index nya saja
var_dump(array_keys($name));

// Jika ingin mengambil value nya saja
var_dump(array_values($name));


// Dan masih banyak lagi
// https://www.php.net/manual/en/ref.array.php