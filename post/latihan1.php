<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- kalau tombol submit udah diklik maka tampilkan text selamat datang -->
<?php if(isset($_POST["submit"])):?>
    <h1> Selamat Datang, <?= $_POST["nama"]?></h1>
<?php endif;?>

<!-- masukin data ke latihan 2 -->
<!-- action = untuk perpindahan -->
    <form action="" method="post">
    Masukan nama:
        <input type="text" name="nama">
        <p>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>