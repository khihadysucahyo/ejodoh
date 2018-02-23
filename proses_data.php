<?php
/* Author: Khihady Sucahyo */

include 'lib/koneksi.php';
if (!isset($_POST['proses'])) {
  header('location: index.php');
}
$jml_gebetan   = $_POST['jml_gebetan'];
//cf boolean
$cf_attitude   = !isset($_POST['cf_attitude'])   ? 0 : $_POST['cf_attitude'] ;
$cf_penampilan = !isset($_POST['cf_penampilan']) ? 0 : $_POST['cf_penampilan'];
$cf_keaktifan  = !isset($_POST['cf_keaktifan'])  ? 0 : $_POST['cf_keaktifan'];
$cf_ekonomi    = !isset($_POST['cf_ekonomi'])    ? 0 : $_POST['cf_ekonomi'];
$cf_percentage = $_POST['cf_percentage'];
//kriteria diinginkan
$kt_attitude   = $_POST['kt_attitude'];
$kt_penampilan = $_POST['kt_penampilan'];
$kt_keaktifan  = $_POST['kt_keaktifan'];
$kt_ekonomi    = $_POST['kt_ekonomi'];

for ($i=1; $i<=$jml_gebetan; $i++) {
  mysqli_query($koneksi, "insert into gebetan values (null,'".
                                  $_POST['nama'.$i]."',".
                                  $_POST['attitude'.$i].",".
                                  $_POST['penampilan'.$i].",".
                                  $_POST['keaktifan'.$i].",".
                                  $_POST['ekonomi'.$i].")"
                                );
}

$query  = "insert into kriteria values (null,".$kt_attitude.",".$kt_penampilan.",".$kt_keaktifan.",".$kt_ekonomi.");";
$query .= "insert into core_factor values (null,".$cf_attitude.",".$cf_penampilan.",".$cf_keaktifan.",".$cf_ekonomi.",".$cf_percentage.");";
mysqli_multi_query($koneksi, $query);
header('location: report.php');

?>
