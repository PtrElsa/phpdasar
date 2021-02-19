<?php
//FUNCTION DARI PHP
/*Function Date()
fungsinya untuk menampilkan tanggal dengan format tertentu*/

//menyesuaikan jam indonesia
date_default_timezone_set("Asia/jakarta");

// D untuk menampilkan hari
//d untuk tanggal
//m untuk bulam
// y untuk tahun
echo date("D, d m y");
echo "<br>";
echo date("H:i:s");
echo "<br>";

//Menampilkan detik
//detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<p>";

//menghitung 100 hari kedepan
echo date("l, d M Y", time()+60*60*24*100);
echo "<p>";
//menghitung 1000 hari kedepan
echo date("l, d M Y", time()+60*60*24*1000);
echo "<p>";
//menghitung 100 hari yang lalu
echo date("l, d M Y", time()-60*60*24*100);
echo "<p>";
//menghitung 1000 hari yg lalu
echo date("l, d M Y", time()-60*60*24*1000);
echo "<p>";

//strtotime
//string to time(mengubah string ke waktu)
//menulis bulan pakai inggris
echo date("l", strtotime("25 September 2002"))

?>