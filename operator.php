<?php
//Operator Penggabung String adalah . (titik)
$nama1 = "Putri";
$nama2 = "Elsa";
$nama3 = "Widiastuti";
//agar ada jarak harus di tambah string yang di dalamnya ada spasi
echo $nama1." ".$nama2." ".$nama3;
echo"<p>";

//Operator aritmatika yaitu + - * / %
$x = 30;
$y = 15;
echo "hasil dari $x + $y = ";
echo $x + $y;
echo"<br>";

echo $x - $y;
echo"<br>";

echo $x * $y;
echo"<br>";

echo $x / $y;
echo"<br>";

echo $x % $y;
echo"<p>";

//Operator Assignment 
// = , += , -= , *= , /= , %= , .=
$x = 1;
$x -= 5;
echo $x;
echo"<br>";

$nama = "putri";
$nama .= " ";
$nama .= "elsa";
echo $nama;
echo"<p>";

//Operator perbandingan
//< , > , <= , >= , == , !=
//tidak ngebaca tipe data
/*var_dum digunakan untuk debuging(mengecek kodingan) 
sebelum di bagi ke orang lain, haya untuk developer*/
var_dump(1 == "1");
echo"<p>";

//Operator Identitas
//=== , !====
//ngebaca tipe data
var_dump(1 === "1");




?>