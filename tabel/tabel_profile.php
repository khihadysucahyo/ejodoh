<!-- Author: Khihady Sucahyo -->

<h5 align="center">= Tabel Profile Gebetan =</h5>
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

    <?php while($gebetan=mysqli_fetch_array($query)){ ?>
      <?php $datas[] = $gebetan; ?>
      <tr>
        <td><?=$i?></td>
        <td><?=$gebetan['nama']?></td>
        <td><?=$gebetan['attitude']?></td>
        <td><?=$gebetan['penampilan']?></td>
        <td><?=$gebetan['keaktifan']?></td>
        <td><?=$gebetan['ekonomi']?></td>
      </tr>
      <?php $i++ ?>
    <?php } $i=1;?>

    <tr class="red-text" style="font-weight:bold;">
      <td> </td>
      <td> = Kriteria yang diinginkan =</td>
      <?php $k=mysqli_fetch_array($query_kriteria); ?>
      <td><?=$k1=$k['attitude']?></td>
      <td><?=$k2=$k['penampilan']?></td>
      <td><?=$k3=$k['keaktifan']?></td>
      <td><?=$k4=$k['ekonomi']?></td>
    </tr>

    </tbody>
</table>
