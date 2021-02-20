<?php

/*
    Perbedaan mendasar Require dan Include

    Require = Jika file yang kita ambil tidak ada, maka eror dan program berhenti
    Include = Jika file yang kita ambil tidak ada, maka hanya memberi peringatan, namun program tetap berjalan


*/

require "contoh-include-require/MyFunction.php";

echo sapaTeman("Dhandy", "Joenathan");