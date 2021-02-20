<?php

// singkatnya adalah memanggil function didalam function
// Contoh nya adalah perhitungan bilangan faktorial

echo rekursif(6);

function rekursif($angka): int {
    if ($angka == 0) {
        return 1;
    }

    return $angka * rekursif($angka - 1);
}

echo "\n";