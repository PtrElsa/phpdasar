<?php
// array numerik
$mahasiswa = [
    ["Elsa", "1237468", "Teknik Informatika","putrielsa@gmail.com"],
    ["Diva", "1237468", "Teknik Informatika","divareta@gmail.com"],
    ["Ratih", "1237468", "Teknik Informatika","ratiheldina@gmail.com"]
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
        <li>Nama : <?= $m[0]?></li>
        <li>NIM : <?= $m[1]?></li>
        <li>Jurusan : <?= $m[2]?></li>
        <li>Email : <?= $m[3]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>