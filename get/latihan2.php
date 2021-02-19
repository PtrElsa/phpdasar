<?php
/*super global variable -> 
variable nya global bisa di panggil di semua class dan juga berasal dari php
*/

 //var_dump($_GET);// tipe data array asosiatif

//$_GET -> array asosiative
//tanda tanya (?) di url = kita bisa menambahkan data di url tersebut
// $_GET["nama"] = "Elsa";
// var_dump($_GET);
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
     "email" =>"ratiheldina@gmail.com"],

     ["nama" =>"Rosalina", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"rosalinasaputri@gmail.com"],

     ["nama" =>"Ummi", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"ummikolbia@gmail.com"],

     ["nama" =>"Nida", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"nidaapipah@gmail.com"],

     ["nama" =>"Tiyas", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"tiyasaria@gmail.com"],

     ["nama" =>"Rifdah", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"rifdaalifa@gmail.com"],

     ["nama" =>"Sofi", 
     "nim" =>"1237468", 
     "jurusan" =>"Teknik Informatika",
     "email" =>"agiahsofia@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahsiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $m):?>
            <li>
            <!-- ngirim data -->
                <a href ="latihan3.php?nama=<?= $m["nama"] ?>
                &nim=<?= $m["nim"] ?>
                &jurusan=<?= $m["jurusan"]?>
                &email=<?= $m["email"]?>">
                <?= $m["nama"];?>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>