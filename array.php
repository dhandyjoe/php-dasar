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


// jumlah array
echo count($data);
echo "\n\n";


echo "COBA ALGORITMA";
echo "\n";
$numbers = [0, -1, 4, -3];

for($i = count($numbers) - 1; $i > 0; $i--) {
    for($j = 0; $j < $i; $j++){
        if($numbers[$j] > $numbers[$j + 1]) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }   
    }
}

foreach($numbers as $number) {
    echo $number;
    echo "\n";
}






echo "\n";