<?php

//For
/*
for() didalamnya ada 3:
1. inisialisasi = variable awal untuk pengulangan 
2. kondisi terminasi = memberhentikan pengulangan
3. increment/ dicrement = menentukan pengulangannya maju atau mundur
*/
for($i = 0; $i <5; $i++){
    echo"Hello Putri Elsa Widiastuti <br>";
}

//While
//kalau kondisinya true, lakukan yang didalam kurung kurawal {}
//cek dulu baru jalanin
//kalau false tidak ad hasil
$f = 0;
while($f < 5){
    echo " Hello! <br>";
    $f++;
} 

//Do while
//lakukan hal ini selama kondisinya true
//jalankan dulu, baru cek kondisi
//jika false akan menghasilkan 1
$y = 0;
do{
    echo "Hello World! <br>";
    $y++;
}while($y < 5);


?>