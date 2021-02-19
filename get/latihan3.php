<?php
//isset = ngecek variable sudah di buat atau belum
//cek apakah tidak ada di @_GET
//ketika belum dibikin maka akan dipaksa pindah ke latihan 2
if(  !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) 
){
    //redirect = memindahkan ke halaman lain
    header("Location: latihan2.php");
    exit;
}

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
    <ul>
        <li><?= $_GET["nama"]?></li>
        <li><?= $_GET["nim"]?></li>
        <li><?= $_GET["jurusan"]?></li>
        <li><?= $_GET["email"]?></li>
    <ul>
    <!-- fungsinya get data dari url -->
    <a href="latihan2.php">back</a>
</body>
</html>