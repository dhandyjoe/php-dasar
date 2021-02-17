<?php

echo "--Algortima Bubble Sort--";
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