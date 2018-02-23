<!-- Author: Khihady Sucahyo -->

<!-- Tabel GAP -->
<hr><br>
<h5 align="center">= Tabel GAP =</h5>
<table class="striped centered">
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
      <?php foreach($datas as $data){ ?>
        <tr>
          <?php
           ?>
          <td><?=$i?></td>
          <td><?=$data['nama']?></td>
          <td><?=$data['attitude']-$k1?></td>
          <td><?=$data['penampilan']-$k2?></td>
          <td><?=$data['keaktifan']-$k3?></td>
          <td><?=$data['ekonomi']-$k4?></td>
        </tr>
        <?php $i++ ?>
        <?php } $i=1;?>
  </tbody>
</table>
<!-- End Tabel GAP -->
