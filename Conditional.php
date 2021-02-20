<?php

// If Else Statement
$numbers = 110;

if($numbers >= 90 && $numbers <= 100) {
    echo "Nilai kamu adalah A";
} else if ($numbers > 70 && $numbers < 90) {
    echo "Nilai kamu adalah B";
} else {
    echo "Nilai kamu tidak dianggap";
}

echo "\n";

// Switch Statement

$nilai = "A";

switch($nilai) {
    case "A":
        echo "Anda lulus dengan sempurna";
        break;
    case "B":
    case "C":
        echo "Anda lulus";
        break;
    case "D":
        echo "Tidak Lulus";
        break;
    default:
        echo "Mungkin salah jurusan";
}

echo "\n";