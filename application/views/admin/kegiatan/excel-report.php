<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Lembar Rekapitulasi Data.xls");
?>

<style>
  th,
  td {
    border: 1px solid;
    padding: 10px;
  }
</style>

<h3>Lembar Rekapitulasi Data</h3>
<table>
  <thead>
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Kode Kegiatan</th>
      <th rowspan="2">Tanggal</th>
      <th rowspan="2">Nama</th>
      <th rowspan="2">Durasi (JAM)</th>
      <th rowspan="2">Luring</th>
      <th rowspan="2">Daring</th>
      <th colspan="3">Strategi</th>
      <th colspan="4">Kelompok Kegiatan</th>
      <th colspan="4">Fokus Kegiatan</th>
      <th colspan="3">Platform</th>
      <th colspan="6">6 Literasi Dasar</th>
      <th colspan="4">Inklusivitas</th>
      <th colspan="17">Sustainable Development Goals (SDGs)</th>
    </tr>
    <tr>
      <!-- Strategi Start -->
      <td><span data-toggle="tooltip" data-placement="top" title="Strategi Literasi">LIT</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Strategi Diseminasi">DIS</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Strategi Institutiona Engagement">INE</span></td>
      <!-- Strategi End -->
      <!-- Kelompok Kegiatan Start -->
      <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Services">CS</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Representative">CR</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Development">CD</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Empowerment">CE</span></td>
      <!-- Kelompok Kegiatan End -->
      <!-- Fokus Kegiatan Start -->
      <td><span data-toggle="tooltip" data-placement="top" title="Fokus Peningkatan Kualitas Pendidikan di Masyarakat">EDU</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Fokus Pemberdayaan Ekonomi Masyarakat">ECO</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Fokus Peningkatan Kesehatan dan Kualitas Hidup">HQL</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Fokus Penguatan Kelembagaan di Masyarakat">IE</span></td>
      <!-- Fokus Kegiatan Start -->
      <!-- Platform Start -->
      <td><span data-toggle="tooltip" data-placement="top" title="Platform Ragawi">RG</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Platform Digital">DG</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Platform Hybrid">HY</span></td>
      <!-- Platform End -->
      <!-- 6 Literasi Dasar Start -->
      <td><span data-toggle="tooltip" data-placement="top" title="Literasi Baca dan Tulis">BT</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Literasi Numerasi">NU</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Literasi Sains">SA</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Literasi Digital">DI</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Literasi Finansial">FI</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Literasi Budaya dan Kewargaan">BK</span></td>
      <!-- 6 Literasi Dasar End -->
      <!-- Inklusivitas Start -->
      <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Down Syndrome">DS</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Marginal">MR</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Grand Design">GD</span></td>
      <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas 3T (Terdepan, Terluar dan Tertinggal)">3T</span></td>
      <!-- Inklusivitas End -->
      <!-- SDGS Start -->
      <td>#1</td>
      <td>#2</td>
      <td>#3</td>
      <td>#4</td>
      <td>#5</td>
      <td>#6</td>
      <td>#7</td>
      <td>#8</td>
      <td>#9</td>
      <td>#10</td>
      <td>#11</td>
      <td>#12</td>
      <td>#13</td>
      <td>#14</td>
      <td>#15</td>
      <td>#16</td>
      <td>#17</td>
      <!-- SDGS End -->
    </tr>
  </thead>
  <tbody>
    <?php if ($kegiatan) : ?>
      <?php $no = 1;
      foreach ($kegiatan as $item) : ?>
        <tr class="<?= ($item['validitas'] === 'invalid') ? 'invalid-kegiatan' : '' ?>">
          <td><?= $no ?></td>
          <td><?= $item['kode'] ?></td>
          <td><?= $item['tanggal'] ?></td>
          <td><?= $item['nama'] ?></td>
          <td><?= $item['ht_digit_jam'] ? $item['ht_digit_jam'] . ' Jam' : '-' ?> <?= $item['ht_digit_menit'] ?  ' & ' . $item['ht_digit_menit'] . ' Menit' : '' ?></td>
          <td>-</td>
          <td>-</td>
          <!-- Strategi Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- Strategi End -->
          <!-- Kelompok Kegiatan Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- Kelompok Kegiatan End -->
          <!-- Fokus Kegiatan Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- Fokus Kegiatan End -->
          <!-- Platform Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- Platform End -->
          <!-- 6 Literasi Dasar Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- 6 Literasi Dasar End -->
          <!-- Inklusivitas Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- Inklusivitas End -->
          <!-- SDGS Start -->
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <!-- SDGS End -->
        </tr>
      <?php $no++;
      endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>
<br>
<table>
  <thead>
    <tr>
      <th rowspan="2">JUMLAH PARTISIPAN</th>
      <th colspan="5">PERAN</th>
      <th colspan="2">JENIS KELAMIN</th>
      <th colspan="7">USIA</th>
    </tr>
    <tr>
      <th>PESERTA</th>
      <th>PENAMPIL</th>
      <th>FASILITATOR</th>
      <th>NARASUMBER</th>
      <th>PANITIA</th>
      <th>LAKI-LAKI</th>
      <th>PEREMPUAN</th>
      <th>0-6 th</th>
      <th>7-12 th</th>
      <th>13-17 th</th>
      <th>18-30 th</th>
      <th>31-40 th</th>
      <th>41-60 th</th>
      <th> > 60 th</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $partisipan ? $partisipan['total'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_peserta'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_penampil'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_fasilitator'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_narasumber'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_panitia'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_laki'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_perempuan'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_0_6'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_7_12'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_13_17'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_18_30'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_31_40'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_41_60'] : '-' ?></td>

      <td><?= $partisipan ? $partisipan['partisipan_60'] : '-' ?></td>
    </tr>
  </tbody>
</table>