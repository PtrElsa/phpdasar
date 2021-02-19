<?php
date_default_timezone_set("Asia/jakarta");

$jam = date("H:i");

if($jam > "04.24" && $jam < "05.00"){
    $waktu = "Sholat Subuh";
}elseif($jam >= "12.03" && $jam < "15.28"){
    $waktu = "Sholat Dzuhur";
} elseif($jam >= "15.28" && $jam < "18.16"){
    $waktu = "Sholat Ashar";
} elseif($jam >= "18.16" && $jam < "19.32"){
    $waktu = "Sholat Magrib";
} else{
    $waktu = "Sholat Isya";
}

echo "Sudah Memasuki Waktu $waktu";
?>