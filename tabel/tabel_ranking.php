
<!-- Author: Khihady Sucahyo -->

<?php
$i=1;
mysqli_query($koneksi,"delete from ranking");
foreach($datas as $data) {
  mysqli_query($koneksi, "insert into ranking values(".$i.",'".$data['nama']."',".$na[$i].");");
  $i++;
}
?>


<!-- Tabel Bobot -->
<hr><br>
<h5 align="left">&nbsp&nbsp&nbspRanking</h5>
<div class="col s6">
  <table class="striped centered">

      <thead>
        <tr>
          <th>Rank</th>
          <th>Nama</th>
          <th>Nilai Akhir</th>
        </tr>
      </thead>

      <tbody>

      <?php
      $i=1;
      $qRank = mysqli_query($koneksi,"select * from ranking order by nilai_akhir desc");
      while($rank=mysqli_fetch_array($qRank)){ ?>
      <tr>
        <td><?=$i?></td>
        <td><?=$rank['nama']?></td>
        <td><?=$rank['nilai_akhir']?></td>
      </tr>
      <?php $i++; } ?>
      </tbody>

  </table>
</div>
<!-- End Tabel Bobot -->
