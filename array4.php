<?php
// array asosiatif(array di dalam array)
// tdk berdasarkan index kita memanggil sendiri
$mahasiswa = [
    ["nama" => "Elsa",
     "nim" => "1237468",
     "jurusan" => "Teknik Informatika",
     "email" => "putrielsa@gmail.com"],

    ["nama" =>"Diva", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"divareta@gmail.com"],

    ["nama" =>"Ratih", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"ratiheldina@gmail.com"]
];
//memanggil ratih
echo $mahasiswa[2][0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m):?>
    <!-- ul untuk list -->
    <ul>
        <li>Nama : <?= $m["nama"]?></li>
        <li>NIM : <?= $m["nim"]?></li>
        <li>Jurusan : <?= $m["jurusan"]?></li>
        <li>Email : <?= $m["email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>