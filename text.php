<?php
/*petik dua sama petik satu sama-sama bisa di gunakan
tetapi petik dua lebih aman, bisa di gunakan di manapun*/

//untuk nyetak text
echo"Hello World!";
//untuk paragraf baru/enter
echo"<p>";
echo"Hello World!";

/*komentar untuk
ber baris baris
ini guys*/

/*
1. php di dalam html
2. html di dalam php
*/
?>

<!-- untuk komen pakai ctrl dan / -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php di dalam html -->
    <h1>Selamat Datang <?php echo"Putri Elsa Widiastuti"?></h1>

    <!-- html di dalam php -->
    <!-- html fungsinya memperbagus tampilan -->
    <?php echo"<h1>Putri Elsa Widiastuti</h1>"?>
</body>
</html>