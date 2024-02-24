<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Kegiatan.xls");
?>

<style>
  th,
  td {
    border: 1px solid;
    padding: 10px;
  }
</style>

<h3>Laporan Kegiatan - <?= $choosed_kegiatan[0]['nama'] ?></h3>

<table>
  <!-- Header -->
  <tr>
    <th rowspan="2" colspan="4">DATA UMUM KEGIATAN & LAMPIRAN</th>
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
    <th rowspan="3">LIT</span></th>
    <th rowspan="3">DIS</span></th>
    <th rowspan="3">INE</span></th>
    <!-- Strategi End -->
    <!-- Kelompok Kegiatan Start -->
    <th rowspan="3">CS</span></th>
    <th rowspan="3">CR</span></th>
    <th rowspan="3">CD</span></th>
    <th rowspan="3">CE</span></th>
    <!-- Kelompok Kegiatan End -->
    <!-- Fokus Kegiatan Start -->
    <th rowspan="3">EDU</span></th>
    <th rowspan="3">ECO</span></th>
    <th rowspan="3">HQL</span></th>
    <th rowspan="3">IE</span></th>
    <!-- Fokus Kegiatan Start -->
    <!-- Platform Start -->
    <th rowspan="3">RG</span></th>
    <th rowspan="3">DG</span></th>
    <th rowspan="3">HY</span></th>
    <!-- Platform End -->
    <!-- 6 Literasi Dasar Start -->
    <th rowspan="3">BT</span></th>
    <th rowspan="3">NU</span></th>
    <th rowspan="3">SA</span></th>
    <th rowspan="3">DI</span></th>
    <th rowspan="3">FI</span></th>
    <th rowspan="3">BK</span></th>
    <!-- 6 Literasi Dasar End -->
    <!-- Inklusivitas Start -->
    <th rowspan="3">DN</span></th> <!-- DS -->
    <th rowspan="3">DR</span></th> <!-- MR -->
    <th rowspan="3">DL</span></th> <!-- GD -->
    <th rowspan="3">3T</span></th> <!-- 3T -->
    <!-- Inklusivitas End -->
    <!-- SDGS Start -->
    <th rowspan="3">#1</span></th>
    <th rowspan="3">#2</span></th>
    <th rowspan="3">#3</span></th>
    <th rowspan="3">#4</span></th>
    <th rowspan="3">#5</span></th>
    <th rowspan="3">#6</span></th>
    <th rowspan="3">#7</span></th>
    <th rowspan="3">#8</span></th>
    <th rowspan="3">#9</span></th>
    <th rowspan="3">#10</span></th>
    <th rowspan="3">#11</span></th>
    <th rowspan="3">#12</span></th>
    <th rowspan="3">#13</span></th>
    <th rowspan="3">#14</span></th>
    <th rowspan="3">#15</span></th>
    <th rowspan="3">#16</span></th>
    <th rowspan="3">#17</span></th>
    <!-- SDGS End -->
  </tr>
  <tr>
    <th>Nama Kegiatan</th>
    <td> <!-- nama_kegiatan -->
      <?= $choosed_kegiatan[0]['nama'] ?>
    </td>
    <th>
      Sub Heading
    </th>
    <td>
      <?= $choosed_kegiatan[0]['sub_heading'] ?>
    </td>
  </tr>
  <!-- Header -->

  <!-- Mata Acara -->
  <tr>
    <th style="text-align: start!important;" colspan="4">
      Mata Acara Kegiatan
    </th>
  </tr>
  <!-- Start Looping -->
  <?php if (count($kegiatan["mata_acara"]) > 0) : ?>
    <?php $no_mata_acara = 1;
    foreach ($kegiatan["mata_acara"] as $mata_acara) : ?>
      <tr>
        <td colspan="4">
          <?= $mata_acara['nama_mata_acara'] ?>
        </td>
        <!-- Strategi Start -->
        <td><?= $mata_acara['strategi_lit'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['strategi_dis'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['strategi_ine'] ? '1' : "0" ?></td>
        <!-- Strategi End -->
        <!-- Kelompok Kegiatan Start -->
        <td><?= $mata_acara['kelompok_cs'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['kelompok_cr'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['kelompok_cd'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['kelompok_ce'] ? '1' : "0" ?></td>
        <!-- Kelompok Kegiatan End -->
        <!-- Fokus Kegiatan Start -->
        <td><?= $mata_acara['fokus_edu'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['fokus_eco'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['fokus_hql'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['fokus_ie'] ? '1' : "0" ?></td>
        <!-- Fokus Kegiatan End -->
        <!-- Platform Start -->
        <td><?= $mata_acara['platform_rg'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['platform_dg'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['platform_hy'] ? '1' : "0" ?></td>
        <!-- Platform End -->
        <!-- 6 Literasi Dasar Start -->
        <td><?= $mata_acara['literasi_bt'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['literasi_nu'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['literasi_sa'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['literasi_di'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['literasi_fi'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['literasi_bk'] ? '1' : "0" ?></td>
        <!-- 6 Literasi Dasar End -->
        <!-- Inklusivitas Start -->
        <td><?= $mata_acara['inklusivitas_ds'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['inklusivitas_mr'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['inklusivitas_gd'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['inklusivitas_3t'] ? '1' : "0" ?></td>
        <!-- Inklusivitas End -->
        <!-- SDGS Start -->
        <td><?= $mata_acara['sdg_1'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_2'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_3'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_4'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_5'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_6'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_7'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_8'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_9'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_10'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_11'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_12'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_13'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_14'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_15'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_16'] ? '1' : "0" ?></td>
        <td><?= $mata_acara['sdg_17'] ? '1' : "0" ?></td>
        <!-- SDGS End -->
      </tr>
    <?php $no_mata_acara++;
    endforeach;  ?>
  <?php endif; ?>
  <!-- Start Looping -->
  <!-- Mata Acara -->

  <!-- Tujuan -->
  <!-- Start Looping -->
  <tr>
    <th style="text-align: start!important;" colspan="45">Tujuan Kegiatan
    </th> <!-- rowspan dinamis -->
  </tr>
  <?php if (count($kegiatan["tujuan"]) > 0) : ?>
    <?php $no_tujuan = 1;
    foreach ($kegiatan["tujuan"] as $tujuan) : ?>
      <tr>
        <td colspan="45">
          <?= $no_tujuan ?>. <?= $tujuan['keterangan'] ?>
        </td>
      </tr>
    <?php $no_tujuan++;
    endforeach;  ?>
  <?php endif; ?>
  <!-- End Looping -->
  <!-- Tujuan -->

  <!-- Dokumen -->
  <!-- Start Looping -->
  <tr>
    <th colspan="2" style="text-align: start!important;">Dokumen & Link File
    </th> <!-- rowspan dinamis -->
    <th colspan="20" class="text-center">Daftar Dokumen</th>
    <th colspan="2">CheckList</th>
    <th colspan="21" class="text-center">Tautan Dokumen Digital</th>
  </tr>
  <?php if (count($kegiatan["dokumen"]) > 0) : ?>
    <?php $no_dokumen = 1;
    foreach ($kegiatan["dokumen"] as $dokumen) : ?>
      <tr>
        <td colspan="22">
          <?= $no_dokumen ?>. <?= $dokumen['keterangan'] ?>
        </td>
        <td colspan="2">
          <?= $dokumen['flag'] ? 'Sudah Diperiksa' : "Belum Diperiksa" ?>
        </td>
        <td colspan="21">
          <?php if ($dokumen['link_file']) : ?>
            <div class="d-flex" style="align-items: center;gap:10px;"><a href="<?= $dokumen['link_file'] ?>" target="_blank">Link File</a></div>
          <?php else : ?>
            <div class="d-flex" style="align-items: center;gap:10px;">NULL</div>
          <?php endif; ?>
        </td>
      </tr>
    <?php $no_dokumen++;
    endforeach;  ?>
  <?php endif; ?>
  <!-- End Looping -->
  <!-- Dokumen -->


  <tr>
    <!-- Tema -->
    <th colspan="2">Tema kegiatan</th>
    <td colspan="20"><?= $choosed_kegiatan[0]['tema'] ?>
    </td>
    <!-- Tema -->
    <!-- Lain-Lain -->
    <th colspan="2">Lain-Lain</th>
    <td colspan="21"><?= $choosed_kegiatan[0]['lain_lain'] ?></td>
    <!-- Lain-Lain -->
  </tr>
  <tr>
    <!-- Momentum -->
    <th rowspan="3">Momentum
    </th>
    <th>Angka Digit Tanggal</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['momentum_tgl'] ?>
    </td>
    <!-- Momentum -->
    <!-- Hari-Tgl -->
    <th rowspan="3" colspan="2">Hari/Tanggal</th>
    <th rowspan="2" colspan="6">3 Huruf Hari</th>
    <th rowspan="2" colspan="6">2 Digit Tanggal</th>
    <th rowspan="2" colspan="6">2 Digit Bulan</th>
    <th rowspan="2" colspan="6">2 Digit Tahun</th>
    <!-- Hari-Tgl -->
    <!-- Durasi -->
    <th colspan="11">Durasi</th>
    <!-- Durasi -->
  </tr>
  <tr>
    <!-- Momentum -->
    <th>Angka Digit Bulan</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['momentum_bln'] ?>
    </td>
    <th colspan="6">Jumlah Angka Jam</th>
    <th colspan="5">Jumlah Angka Menit</th>
    <!-- Momentum -->
  </tr>
  <tr>
    <!-- Momentum -->
    <th>Jenis Momentum</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['momentum_jenis'] ?>
    </td>
    <!-- Momentum -->
    <!-- Hari-Tgl -->
    <td colspan="6">
      <?= $choosed_kegiatan[0]['ht_huruf_hari'] ?>
    </td>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['ht_digit_tanggal'] ?>
    </td>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['ht_digit_bulan'] ?>
    </td>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['ht_digit_tahun'] ?>
    </td>
    <!-- Hari-Tgl -->
    <!-- Durasi -->
    <td colspan="6">
      <?= $choosed_kegiatan[0]['ht_digit_jam'] ?>
    </td>
    <td colspan="5">
      <?= $choosed_kegiatan[0]['ht_digit_menit'] ?>
    </td>
    <!-- Durasi -->
  </tr>
  <tr>
    <th rowspan="3">Inisiasi</th>
    <th>RBA</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['inisiasi_rba'] ? 'Ya' : "Tidak" ?>
    </td>
    <th colspan="20">Lokasi</th>
    <th colspan="6">Lokasi Jarak</th>
    <td colspan="11">
      <?= $choosed_kegiatan[0]['lokasi_jarak'] ?>
    </td>
  </tr>
  <tr>
    <th>Kolaborator</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['inisiasi_kolaborator'] ? 'Ya' : "Tidak" ?>
    </td>
    <th colspan="2">Lokasi Kegiatan</th>
    <td colspan="18"><?= $choosed_kegiatan[0]['lokasi_kegiatan'] ?></td>
    <th colspan="6">Lokasi IH</th>
    <td colspan="11">
      <?= $choosed_kegiatan[0]['lokasi_ih'] ? 'Ya' : "Tidak" ?>
    </td>
  </tr>
  <tr>
    <th>Mitra</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['inisiasi_mitra'] ? 'Ya' : "Tidak" ?>
    </td>
    <th colspan="2">Lokasi Digital</th>
    <td colspan="18"><?= $choosed_kegiatan[0]['lokasi_digital'] ?></td>
    <th colspan="6">Lokasi OR</th>
    <td colspan="11">
      <?= $choosed_kegiatan[0]['lokasi_or'] ? 'Ya' : "Tidak" ?>
    </td>
  </tr>

  <tr>
    <th colspan="2">
      Catatan
    </th>
    <th colspan="11">Publikasi & Diseminasi</th>
    <th colspan="11">Persiapan Kegiatan</th>
    <th colspan="10">Pelaksaan Kegiatan</th>
    <th colspan="11">Lain-Lain</th>
  </tr>
  <tr>
    <th colspan="2" <?= count($kegiatan["kendala"]) > 0 ? 'rowspan="' . count($kegiatan["kendala"]) + 1 . '"' : '' ?>>Kendala
    </th>
  </tr>
  <?php if (count($kegiatan["kendala"]) > 0) : ?>
    <?php $no_kendala = 1;
    foreach ($kegiatan["kendala"] as $kendala) : ?>
      <tr>
        <td colspan="11"><?= $no_kendala . ". " . $kendala['publikasi'] ?></td>
        <td colspan="11"><?= $no_kendala . ". " . $kendala['persiapan'] ?></td>
        <td colspan="10"><?= $no_kendala . ". " . $kendala['pelaksanaan'] ?></td>
        <td colspan="11"><?= $no_kendala . ". " . $kendala['lain_lain'] ?></td>
      </tr>
    <?php $no_kendala++;
    endforeach;  ?>
  <?php endif; ?>
  <tr>
    <th colspan="2" <?= count($kegiatan["solusi"]) > 0 ? 'rowspan="' . count($kegiatan["solusi"]) + 1 . '"' : '' ?>>Solusi
    </th>
  </tr>
  <?php if (count($kegiatan["solusi"]) > 0) : ?>
    <?php $no_solusi = 1;
    foreach ($kegiatan["solusi"] as $solusi) : ?>
      <tr>
        <td colspan="11"><?= $no_solusi . ". " . $solusi['publikasi'] ?></td>
        <td colspan="11"><?= $no_solusi . ". " . $solusi['persiapan'] ?></td>
        <td colspan="10"><?= $no_solusi . ". " . $solusi['pelaksanaan'] ?></td>
        <td colspan="11"><?= $no_solusi . ". " . $solusi['lain_lain'] ?></td>
      </tr>
    <?php $no_solusi++;
    endforeach;  ?>
  <?php endif; ?>
  <tr>
    <th colspan="2" <?= count($kegiatan["perbaikan"]) > 0 ? 'rowspan="' . count($kegiatan["perbaikan"]) + 1 . '"' : '' ?>>Perbaikan
    </th>
  </tr>
  <?php if (count($kegiatan["perbaikan"]) > 0) : ?>
    <?php $no_perbaikan = 1;
    foreach ($kegiatan["perbaikan"] as $perbaikan) : ?>
      <tr>
        <td colspan="11"><?= $no_perbaikan . ". " . $perbaikan['publikasi'] ?></td>
        <td colspan="11"><?= $no_perbaikan . ". " . $perbaikan['persiapan'] ?></td>
        <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['pelaksanaan'] ?></td>
        <td colspan="11"><?= $no_perbaikan . ". " . $perbaikan['lain_lain'] ?></td>
      </tr>
    <?php $no_perbaikan++;
    endforeach;  ?>
  <?php endif; ?>

  <!-- Kolaborator -->
  <tr>
    <th colspan="45">Kolaborator dan/atau Mitra
    </th> <!-- rowspan dinamis -->
  </tr>
  <tr>
    <th colspan="21">Nama Kolaborator dan/atau Mitra</th>
    <th colspan="5">Sektor Pertama</th>
    <th colspan="5">Sektor Kedua</th>
    <th colspan="5">Sektor Ketiga</th>
    <th colspan="5">New</th>
    <th colspan="4">MoU</th>
  </tr>

  <?php if (count($kegiatan["kolaborator"]) > 0) : ?>
    <?php $no_kolaborator = 1;
    foreach ($kegiatan["kolaborator"] as $kolaborator) : ?>
      <tr>
        <td colspan="21"><?= $kolaborator['nama_kolaborator'] ?></td>
        <td colspan="5">
          <?= $kolaborator['sektor_pertama'] ? 'Ya' : "Tidak" ?>
        </td>
        <td colspan="5">
          <?= $kolaborator['sektor_dua'] ? 'Ya' : "Tidak" ?>
        </td>
        <td colspan="5">
          <?= $kolaborator['sektor_tiga'] ? 'Ya' : "Tidak" ?>
        </td>
        <td colspan="5">
          <?= $kolaborator['mitra_baru'] ? 'Ya' : "Tidak" ?>
        </td>
        <td colspan="4">
          <?= $kolaborator['sudah_kerja_sama'] ? 'Ya' : "Tidak" ?>
        </td>
      </tr>
    <?php $no_kolaborator++;
    endforeach;  ?>
  <?php endif; ?>
  <!-- Kolaborator -->

  <!-- Partisipan -->
  <tr>
    <th rowspan="4">Partisipan
    </th>
    <th colspan="6">Total</th>
    <th colspan="5">Kategori Peserta</th>
    <th colspan="5">Kategori Penampil</th>
    <th colspan="4">Kategori Fasilitator</th>
    <th colspan="6">Kategori Narasumber</th>
    <th colspan="6">Kategori Panitia</th>
    <th colspan="6">Kategori Laki Laki</th>
    <th colspan="6">Kategori Perempuan</th>
  </tr>
  <tr>
    <td rowspan="3" colspan="2"><?= $choosed_kegiatan[0]['partisipan_total_huruf'] ?>
    </td>
    <td rowspan="3" colspan="4"><?= $choosed_kegiatan[0]['partisipan_total_digit'] ?>
    </td>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_peserta'] ?>
    </td>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_penampil'] ?>
    </td>
    <td colspan="4"><?= $choosed_kegiatan[0]['partisipan_fasilitator'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_narasumber'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_panitia'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_laki'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_perempuan'] ?>
    </td>
  </tr>
  <tr>
    <th colspan="5">Usia 00 - 06</th>
    <th colspan="5">Usia 07 - 12</th>
    <th colspan="4">Usia 13 - 17</th>
    <th colspan="6">Usia 18 - 30</th>
    <th colspan="6">Usia 31 - 40</th>
    <th colspan="6">Usia 41 - 60</th>
    <th colspan="6">Usia >60</th>
  </tr>
  <tr>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_0_6'] ?>
    </td>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_7_12'] ?>
    </td>
    <td colspan="4"><?= $choosed_kegiatan[0]['partisipan_13_17'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_18_30'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_31_40'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_41_60'] ?>
    </td>
    <td colspan="6"><?= $choosed_kegiatan[0]['partisipan_60'] ?>
    </td>
  </tr>
  <!-- Partisipan -->
  <tr>
    <!-- Penanggung Jawab -->
    <th colspan="3">Penanggung Jawab</th>
    <td colspan="14"><?= $choosed_kegiatan[0]['penanggung_jawab'] ?></td>
    <!-- Penanggung Jawab -->
    <!-- Pendamping -->
    <th colspan="2">Pendamping</th>
    <td colspan="26"><?= $choosed_kegiatan[0]['pendamping'] ?></td>
    </form>
    <!-- Pendamping -->
  </tr>
</table>
<br>
<table>
  <thead>
    <tr>
      <th>Total Strategi</th>
      <th>Total Kelompok Kegiatan</th>
      <th>Total Platform</th>
      <th>Total S1/S2/S3</th>
      <th>Berdasarkan Peran</th>
      <th>Berdasarkan Gender</th>
      <th>Berdasarkan Usia</th>
    </tr>
    <tr>
      <td class="text-center"><?= $kegiatan['total_strategi'] ?></td>
      <td class="text-center"><?= $kegiatan['total_kelompok'] ?></td>
      <td class="text-center"><?= $kegiatan['total_platform'] ?></td>
      <td class="text-center"><?= $kegiatan['total_sektor'] ?></td>
      <td class="text-center"><?= $kegiatan['total_peran'] ?></td>
      <td class="text-center"><?= $kegiatan['total_gender'] ?></td>
      <td class="text-center"><?= $kegiatan['total_usia'] ?></td>
    </tr>
  </thead>
</table>
<br>
<div style="display: flex;gap: 10px;">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">
          Validasi
        </th>
      </tr>
    </thead>
    <tr>
      <th>Nama Penanggung Jawab</th>
      <td>
        <?= $choosed_kegiatan[0]['validasi_nama_pj'] ?>
      </td>
    </tr>
    <tr>
      <th>Nomor Kontak</th>
      <td>
        <?= $choosed_kegiatan[0]['validasi_no_kontak'] ?>
      </td>
    </tr>
    <tr>
      <th>Alamat User</th>
      <td>
        <?= $choosed_kegiatan[0]['validasi_alamat_surel'] ?>
      </td>
    </tr>
    <tr>
      <th>Nama User</th>
      <td>
        <?= $choosed_kegiatan[0]['validasi_nama_user'] ?>
      </td>
    </tr>
    <tr>
      <th>Penempatan</th>
      <td>
        <?= $choosed_kegiatan[0]['validasi_penempatan'] ?>
      </td>
    </tr>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">
          Verifikator
        </th>
      </tr>
    </thead>
    <tr>
      <th>Nama</th>
      <td>
        <?php foreach ($employees as $employee) : ?>
          <?= ($employee['username'] === $choosed_kegiatan[0]['verifikator_nama']) ? $employee['first_name'] . " " . $employee['last_name'] : '' ?>
        <?php endforeach; ?>
      </td>
    </tr>
    <tr>
      <th>Nomor Kontak</th>
      <td>
        <?= $choosed_kegiatan[0]['verifikator_no_kontak'] ?>
      </td>
    </tr>
    <tr>
      <th>Alamat User</th>
      <td>
        <?= $choosed_kegiatan[0]['verifikator_alamat_surel'] ?>
      </td>
    </tr>
    <tr>
      <th>Jabatan</th>
      <td>
        <?= $choosed_kegiatan[0]['verifikator_jabatan'] ?>
      </td>
    </tr>
  </table>

</div>
<br>