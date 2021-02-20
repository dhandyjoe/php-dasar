<?php

$data = ["Dhandy", "Jenny", 1, true];
var_dump($data);
echo "\n";

// menambah array 
$data[] = 2.4;
foreach($data as $i) {
    echo $i;
    echo "\n";
}
echo "\n";

// menghapus array
unset($data[0]);
foreach($data as $e) {
    echo $e;
    echo "\n";
}
echo "\n";

foreach($data as $d => $value) {
    echo "Data ke $d = $value" . PHP_EOL;
}


// jumlah array
echo count($data);
echo "\n\n";


echo "\n";