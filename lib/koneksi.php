<?php
/*
Author: Khihady Sucahyo
*/

$server   = "localhost";
$username = "root";
$password = "";
$database = "ejodoh";

$koneksi=mysqli_connect($server,$username,$password) or die("Koneksi Gagal!");
mysqli_select_db($koneksi,$database) or die("Database gabisa dibuka!");
?>
