<?php
    // Buatkan dua input area yang dapat diisi
    // input pertama berupa angka
    // input kedua berupa dropdown boleh boostrap
    // Buatkan 1 button yang bernama hitung
    $_GET["Angka"];
    $_GET["Pilihan"];

    $CtoF = 9/5 * $_GET["Angka"] + 32;
    $CtoR = 4/5 * $_GET["Angka"];
    $CtoK = $_GET["Angka"] + 273;

    if ($_GET["Pilihan"] == "2  ") {
        echo $CtoR;
    } elseif ($_GET["Pilihan"] == "3") {
        echo $CtoF;
    } elseif ($_GET["Pilihan"] == "1") {
        echo $CtoK;
    } else {
        echo "Tidak terdaftar silakan masukkan pilihan yang sesuai";
    }
    
?>