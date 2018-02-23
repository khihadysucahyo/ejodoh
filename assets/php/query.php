<!-- Author: Khihady Sucahyo -->

<?php
$query          = mysqli_query($koneksi, "select * from gebetan");
$query_bobot    = mysqli_query($koneksi, "select * from bobot");
$query_kriteria = mysqli_query($koneksi, "select * from kriteria");
$query_cf       = mysqli_query($koneksi, "select * from core_factor");
$i=1;
$datas = array();
?>
