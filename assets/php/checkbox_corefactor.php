<!-- Author: Khihady Sucahyo -->

<div class="col s4">
    <div class="card">
      <div class="card-content">
        <!-- <div class="card-title center-align indigo-text"><strong>Biodata Peserta</strong></div> -->
        <div class="card-action">
              <table class="">
                  <thead>
                    <tr>
                      <th colspan="2">Core Factor</th>
                    </tr>
                  </thead>
                  <tbody>
                  <form class="form-horizontal" role="form" method="post" action="proses_data.php">
                    <tr>
                      <td>
                        <input  type="checkbox" name="cf_attitude" value="1" id="attitude">
                        <label for="attitude">Attitude</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input  type="checkbox" name="cf_penampilan" value="1" id="penampilan">
                        <label for="penampilan">Penampilan</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input  type="checkbox" name="cf_keaktifan" value="1" id="keaktifan">
                        <label for="keaktifan">Keaktifan</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" name="cf_ekonomi" value="1" id="ekonomi">
                        <label for="ekonomi">Ekonomi</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label for="cf_percentage">Percentage %</label>
                        <input required type="text" name="cf_percentage" id="cf_percentage">
                      </td>
                    </tr>
                  </tbody>
              </table>
        </div>
      </div>
    </div>
</div>
