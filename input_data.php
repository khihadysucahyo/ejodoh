<?php
/* Author: Khihady Sucahyo */

if (!isset($_POST['jml_gebetan'])) {
  header('location: index.php');
}
include 'assets/php/header.php';
$jml_gebetan = $_POST['jml_gebetan'];
?>

      <main>
        <div class="container">
          <div class="row">
          <?php include 'assets/php/keterangan.php'; ?>
          <?php include 'assets/php/checkbox_corefactor.php'; ?>
          <?php include 'assets/php/input_kriteria_diinginkan.php'; ?>
          </div>

          <!-- END KTEREANGAN -->
          <div class="row">
            <div class="col s12">
                <div class="card">
                  <div class="card-content">
                    <!-- <div class="card-title center-align indigo-text"><strong>Biodata Peserta</strong></div> -->
                    <div class="card-action">
                          <input type="hidden" name="jml_gebetan" value="<?=$jml_gebetan?>">
                          <table class="centered">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Attitude</th>
                                  <th>Penampilan</th>
                                  <th>Keaktifan</th>
                                  <th>Ekonomi</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php for ($i=1; $i<=$jml_gebetan; $i++) { ?>
                                  <tr>
                                    <td><?=$i?></td>
                                    <td><input class="exc" required type="text" class="validate" name="nama<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="attitude<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="penampilan<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="keaktifan<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="ekonomi<?=$i?>" value=""></td>
                                  </tr>
                              <?php } ?>
                              </tbody>
                          </table>

                          <div class="row">
                              <div class="input-field offset-s12">
                                <button  type="submit" name="proses" class="btn btn-primary right">
                                  Proses
                                </button>
                              </div>
                          </div>

                      </form>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </main>

<?php include 'assets/php/footer.php'; ?>
