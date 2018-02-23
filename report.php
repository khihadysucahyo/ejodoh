<!-- Author: Khihady Sucahyo -->
<?php
include 'lib/koneksi.php';
include 'assets/php/header.php';
include 'assets/php/hitungBobot.php';
include 'assets/php/query.php';
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col s12">


        <?php
          while($gebetan=mysqli_fetch_array($query)){ $datas[] = $gebetan; }
          $k=mysqli_fetch_array($query_kriteria);
          $k1=$k['attitude'];
          $k2=$k['penampilan'];
          $k3=$k['keaktifan'];
          $k4=$k['ekonomi'];
        ?>

        <!-- Tabel Nilai Bobot Hasil-->
        <?php include 'tabel/tabel_nilai_bobot.php' ?>
        <!-- End Tabel Bobot -->

        <!-- Tabel Nilai Bobot Hasil-->
        <?php include 'tabel/tabel_ranking.php' ?>
        <!-- End Tabel Bobot -->
        <a class="waves-effect waves-light btn right" href="report_detail.php"><i class="material-icons right">send</i>Detail</a>
      </div>
    </div>
  </div>
</main>

<?php include 'assets/php/footer.php'; ?>
