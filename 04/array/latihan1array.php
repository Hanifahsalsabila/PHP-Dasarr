<?php 
    // array
    // variabel yg dpt memiliki banyak nilai
    // elemen pada array boleh memililki tipe data  yg berbeda
    
    // membuat array
    // cara lama
    $hari = array("Senin","Selasa","Rabu");
    // cara baru
    $bulan = ["Januari","Februari","Maret"];
    $arrl = [123, "tulisan", false];

    // Menampilkan Array
    // versi debigging
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // Menampilkan 1 elemen pada array
    // echo $arrl [0];
    // echo "<br>";
    // echo $bulan [1]

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari [] = "kamis";
    $hari [] = "Jumat";
    echo "<br>";
    var_dump($hari);
?>  