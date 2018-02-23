<!-- Author: Khihady Sucahyo -->

<!-- Tabel Bobot -->
<hr><br>
<h5 align="center">= Tabel Nilai Bobot Hasil =</h5>
<table class="striped centered">

    <thead>
      <?php $cf=mysqli_fetch_array($query_cf); ?>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Attitude</th>
        <th>Penampilan</th>
        <th>Keaktifan</th>
        <th>Ekonomi</th>
        <th>NCF <?='('.$cf['percentage'].'%)'?></th>
        <th>NSF <?='('.(100-$cf['percentage']).'%)'?></th>
        <th>Nilai Total</th>
      </tr>
    </thead>

    <?php include 'assets/php/classCoreFactor.php'; ?>

    <tbody>
    <?php foreach($datas as $data){ ?>
      <tr>
        <td><?=$i?></td>
        <td><?=$data['nama']?></td>
        <td <?=$classAttitude?>>
          <?=$b_attitude[$i]=hitungBobot($data['attitude']-$k1) ?>
        </td>
        <td <?=$classPenampilan?>>
          <?=$b_penampilan[$i]=hitungBobot($data['penampilan']-$k2) ?>
        </td>
        <td <?=$classKeaktifan?>>
          <?=$b_keaktifan[$i]=hitungBobot($data['keaktifan']-$k3) ?>
        </td>
        <td <?=$classEkonomi?>>
          <?=$b_ekonomi[$i]=hitungBobot($data['ekonomi']-$k4) ?>
        </td>

        <!-- Menghitung NCF -->
        <?php
        $cf1[$i] = ($cfAttitude==1)   ? $b_attitude[$i]  :0;
        $cf2[$i] = ($cfPenampilan==1) ? $b_penampilan[$i]:0;
        $cf3[$i] = ($cfKeaktifan==1)  ? $b_keaktifan[$i] :0;
        $cf4[$i] = ($cfEkonomi==1)    ? $b_ekonomi[$i]   :0;
        $ncf[$i]=($cf1[$i]+$cf2[$i]+$cf3[$i]+$cf4[$i])/$banyak_cf;
        ?>

        <!-- Menghitung NSF -->
        <?php
        $sf1[$i] = ($cfAttitude==0)  ? $b_attitude[$i]  :0;
        $sf2[$i] = ($cfPenampilan==0) ? $b_penampilan[$i]:0;
        $sf3[$i] = ($cfKeaktifan==0) ? $b_keaktifan[$i] :0;
        $sf4[$i] = ($cfEkonomi==0)   ? $b_ekonomi[$i]   :0;
        $nsf[$i] = ($sf1[$i]+$sf2[$i]+$sf3[$i]+$sf4[$i])/$banyak_sf;
        ?>

        <!-- Menghitung Nilai Total -->
        <?php
        $cfPercentage = $cf['percentage'];
        $sfPercentage = 100-$cfPercentage;
        $na[$i] = ($cfPercentage/100*$ncf[$i]) + ($sfPercentage/100*$nsf[$i]);
        ?>

        <td><?=$ncf[$i]?></td>
        <td><?=$nsf[$i]?></td>
        <td><?=$na[$i]?></td>
      </tr>
      <?php $i++ ?>
    <?php } $i=1;?>
  </tbody>
</table>
<!-- End Tabel Bobot -->
