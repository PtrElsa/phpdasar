<!-- variable scope -> lingkup variable -->

<?php

// built in function -> yang di sediakan oleh php
$x = 10; //variable lokal
echo $x;
echo "<p>";

// userdefined function -> fungsi yg kita buat sendiri
function tampilX(){
    global $x;//variable global
    echo $x;
}
tampilX();

?>