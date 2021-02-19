<?php
// array
//variable yg dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yg berbeda
//array = pasangan antara key dan value
//key adalah index, dimulai dari 0
$hari = "senin";
$hari2 = "selasa";

//membuat array
//cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jumat","sabtu", "minggu");
//cara baru
$bulan = ["Januari", "Februari", "Maret"];
//menggunakan banyak tipe data
$array = [123, "array", true];

//untuk debuging
var_dump($array);

echo "<p>";
print_r($bulan);

echo "<p>";
echo $bulan[1];

//menambahkan elemen barru pada array
$bulan [] = "April";
var_dump($bulan);
?>