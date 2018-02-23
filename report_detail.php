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

        <!-- Tabel Profile Gebetans-->
        <?php include 'tabel/tabel_profile.php' ?>
        <!-- End Tabel Profile -->

        <!-- Tabel GAP -->
        <?php include 'tabel/tabel_gap.php' ?>
        <!-- End Tabel GAP -->

        <!-- Tabel Nilai Bobot Hasil-->
        <?php include 'tabel/tabel_nilai_bobot.php' ?>
        <!-- End Tabel Bobot -->

        <!-- Tabel Nilai Bobot Hasil-->
        <?php include 'tabel/tabel_ranking.php' ?>
        <!-- End Tabel Bobot -->
      </div>
    </div>
  </div>
</main>

<?php include 'assets/php/footer.php'; ?>
