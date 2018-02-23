<?php
$query  = "delete from gebetan;";
$query .= "delete from kriteria;";
$query .= "delete from core_factor;";
$query .= "delete from ranking;";
mysqli_multi_query($koneksi, $query);
?>
