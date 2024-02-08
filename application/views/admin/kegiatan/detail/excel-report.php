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
    <th colspan="2">DATA UMUM KEGIATAN & LAMPIRAN</th>
    <th colspan="3">Strategi</th>
    <th colspan="4">Kelompok Kegiatan</th>
    <th colspan="4">Fokus Kegiatan</th>
    <th colspan="3">Platform</th>
    <th colspan="6">6 Literasi Dasar</th>
    <th colspan="4">Inklusivitas</th>
    <th colspan="17">Sustainable Development Goals (SDGs)</th>
  </tr>
  <tr>
    <th>Nama Kegiatan</th>
    <td> <!-- nama_kegiatan -->
      <?= $choosed_kegiatan[0]['nama'] ?>
    </td>
    <!-- Strategi Start -->
    <th rowspan="2">LIT</span></th>
    <th rowspan="2">DIS</span></th>
    <th rowspan="2">INE</span></th>
    <!-- Strategi End -->
    <!-- Kelompok Kegiatan Start -->
    <th rowspan="2">CS</span></th>
    <th rowspan="2">CR</span></th>
    <th rowspan="2">CD</span></th>
    <th rowspan="2">CE</span></th>
    <!-- Kelompok Kegiatan End -->
    <!-- Fokus Kegiatan Start -->
    <th rowspan="2">EDU</span></th>
    <th rowspan="2">ECO</span></th>
    <th rowspan="2">HQL</span></th>
    <th rowspan="2">IE</span></th>
    <!-- Fokus Kegiatan Start -->
    <!-- Platform Start -->
    <th rowspan="2">RG</span></th>
    <th rowspan="2">DG</span></th>
    <th rowspan="2">HY</span></th>
    <!-- Platform End -->
    <!-- 6 Literasi Dasar Start -->
    <th rowspan="2">BT</span></th>
    <th rowspan="2">NU</span></th>
    <th rowspan="2">SA</span></th>
    <th rowspan="2">DI</span></th>
    <th rowspan="2">FI</span></th>
    <th rowspan="2">BK</span></th>
    <!-- 6 Literasi Dasar End -->
    <!-- Inklusivitas Start -->
    <th rowspan="2">DN</span></th> <!-- DS -->
    <th rowspan="2">DR</span></th> <!-- MR -->
    <th rowspan="2">DL</span></th> <!-- GD -->
    <th rowspan="2">3T</span></th> <!-- 3T -->
    <!-- Inklusivitas End -->
    <!-- SDGS Start -->
    <th rowspan="2">#1</span></th>
    <th rowspan="2">#2</span></th>
    <th rowspan="2">#3</span></th>
    <th rowspan="2">#4</span></th>
    <th rowspan="2">#5</span></th>
    <th rowspan="2">#6</span></th>
    <th rowspan="2">#7</span></th>
    <th rowspan="2">#8</span></th>
    <th rowspan="2">#9</span></th>
    <th rowspan="2">#10</span></th>
    <th rowspan="2">#11</span></th>
    <th rowspan="2">#12</span></th>
    <th rowspan="2">#13</span></th>
    <th rowspan="2">#14</span></th>
    <th rowspan="2">#15</span></th>
    <th rowspan="2">#16</span></th>
    <th rowspan="2">#17</span></th>
    <!-- SDGS End -->
  </tr>
  <tr>
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
    <th style="text-align: start!important;" colspan="43">
      Mata Acara Kegiatan
    </th>
  </tr>
  <!-- Start Looping -->
  <?php if (count($kegiatan["mata_acara"]) > 0) : ?>
    <?php $no_mata_acara = 1;
    foreach ($kegiatan["mata_acara"] as $mata_acara) : ?>
      <tr>
        <td colspan="2">
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
      </form>
    <?php $no_mata_acara++;
    endforeach;  ?>
  <?php endif; ?>
  <!-- Start Looping -->
  <!-- Mata Acara -->

  <!-- Tujuan -->
  <!-- Start Looping -->
  <tr>
    <th style="text-align: start!important;" colspan="43">Tujuan Kegiatan
    </th> <!-- rowspan dinamis -->
  </tr>
  <?php if (count($kegiatan["tujuan"]) > 0) : ?>
    <?php $no_tujuan = 1;
    foreach ($kegiatan["tujuan"] as $tujuan) : ?>
      <tr>
        <td colspan="43">
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
    <th style="text-align: start!important;">Dokumen & Link File
    </th> <!-- rowspan dinamis -->
    <th colspan="20" class="text-center">Daftar Dokumen</th>
    <th>CheckList</th>
    <th colspan="21" class="text-center">Tautan Dokumen Digital</th>
  </tr>
  <?php if (count($kegiatan["dokumen"]) > 0) : ?>
    <?php $no_dokumen = 1;
    foreach ($kegiatan["dokumen"] as $dokumen) : ?>
      <tr>
        <td colspan="21">
          <?= $no_dokumen ?>. <?= $dokumen['keterangan'] ?>
        </td>
        <td>
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
    <th>Tema kegiatan</th>
    <td colspan="7"><?= $choosed_kegiatan[0]['tema'] ?>
    </td>
    <!-- Tema -->
    <!-- Penanggung Jawab -->
    <th>Penanggung Jawab</th>
    <td colspan="12"><?= $choosed_kegiatan[0]['penanggung_jawab'] ?></td>
    <!-- Penanggung Jawab -->
    <!-- Pendamping -->
    <th>Pendamping</th>
    <td colspan="12"><?= $choosed_kegiatan[0]['pendamping'] ?></td>
    </form>
    <!-- Pendamping -->
    <!-- Lain-Lain -->
    <th>Lain-Lain</th>
    <td colspan="8"><?= $choosed_kegiatan[0]['lain_lain'] ?></td>
    </form>
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
    <th rowspan="3">Hari/Tanggal</th>
    <th colspan="6">3 Huruf Hari</th>
    <th colspan="6">2 Digit Tanggal</th>
    <th colspan="6">2 Digit Bulan</th>
    <th colspan="6">2 Digit Tahun</th>
    <!-- Hari-Tgl -->
    <!-- Durasi -->
    <th colspan="5">Jumlah Angka Jam</th>
    <th colspan="5">Jumlah Angka Menit</th>
    <!-- Durasi -->
  </tr>
  <tr>
    <!-- Momentum -->
    <th>Angka Digit Bulan</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['momentum_bln'] ?>
    </td>
    <!-- Momentum -->
    <!-- Hari-Tgl -->
    <td colspan="6" rowspan="2">
      <?= $choosed_kegiatan[0]['ht_huruf_hari'] ?>
    </td>
    <td colspan="6" rowspan="2">
      <?= $choosed_kegiatan[0]['ht_digit_tanggal'] ?>
    </td>
    <td colspan="6" rowspan="2">
      <?= $choosed_kegiatan[0]['ht_digit_bulan'] ?>
    </td>
    <td colspan="6" rowspan="2">
      <?= $choosed_kegiatan[0]['ht_digit_tahun'] ?>
    </td>
    <!-- Hari-Tgl -->
    <!-- Durasi -->
    <td colspan="5" rowspan="2">
      <?= $choosed_kegiatan[0]['ht_digit_jam'] ?>
    </td>
    <td colspan="5" rowspan="2">
      <?= $choosed_kegiatan[0]['ht_digit_menit'] ?>
    </td>
    <!-- Durasi -->
  </tr>
  <tr>
    <!-- Momentum -->
    <th>Jenis Momentum</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['momentum_jenis'] ?>
    </td>
    <!-- Momentum -->
  </tr>
  <tr>
    <th rowspan="3">Inisiasi</th>
    <th>RBA</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['inisiasi_rba'] ? 'Ya' : "Tidak" ?>
    </td>
    <th colspan="21">Lokasi</th>
    <th colspan="4">Lokasi Jarak</th>
    <td colspan="10">
      <?= $choosed_kegiatan[0]['lokasi_jarak'] ?>
    </td>
  </tr>
  <tr>
    <th>Kolaborator</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['inisiasi_kolaborator'] ? 'Ya' : "Tidak" ?>
    </td>
    <th>Lokasi Kegiatan</th>
    <td colspan="20"><?= $choosed_kegiatan[0]['lokasi_kegiatan'] ?></td>
    <th colspan="4">Lokasi IH</th>
    <td colspan="10">
      <?= $choosed_kegiatan[0]['lokasi_ih'] ? 'Ya' : "Tidak" ?>
    </td>
  </tr>
  <tr>
    <th>Mitra</th>
    <td colspan="6">
      <?= $choosed_kegiatan[0]['inisiasi_mitra'] ? 'Ya' : "Tidak" ?>
    </td>
    <th>Lokasi Digital</th>
    <td colspan="20"><?= $choosed_kegiatan[0]['lokasi_digital'] ?></td>
    <th colspan="4">Lokasi OR</th>
    <td colspan="10">
      <?= $choosed_kegiatan[0]['lokasi_or'] ? 'Ya' : "Tidak" ?>
    </td>
  </tr>

  <tr>
    <th colspan="2">
      Catatan
    </th>
    <th colspan="11" rowspan="2">Publikasi & Diseminasi</th>
    <th colspan="10" rowspan="2">Persiapan Kegiatan</th>
    <th colspan="10" rowspan="2">Pelaksaan Kegiatan</th>
    <th colspan="10" rowspan="2">Lain-Lain</th>
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
        <td colspan="10"><?= $no_kendala . ". " . $kendala['persiapan'] ?></td>
        <td colspan="10"><?= $no_kendala . ". " . $kendala['pelaksanaan'] ?></td>
        <td colspan="10"><?= $no_kendala . ". " . $kendala['lain_lain'] ?></td>
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
        <td colspan="10"><?= $no_solusi . ". " . $solusi['persiapan'] ?></td>
        <td colspan="10"><?= $no_solusi . ". " . $solusi['pelaksanaan'] ?></td>
        <td colspan="10"><?= $no_solusi . ". " . $solusi['lain_lain'] ?></td>
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
        <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['persiapan'] ?></td>
        <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['pelaksanaan'] ?></td>
        <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['lain_lain'] ?></td>
      </tr>
    <?php $no_perbaikan++;
    endforeach;  ?>
  <?php endif; ?>

  <!-- Kolaborator -->
  <tr>
    <th colspan="43">Kolaborator dan/atau Mitra
    </th> <!-- rowspan dinamis -->
  </tr>
  <tr>
    <th colspan="21">Nama Kolaborator dan/atau Mitra</th>
    <th colspan="5">Sektor Pertama</th>
    <th colspan="5">Sektor Kedua</th>
    <th colspan="4">Sektor Ketiga</th>
    <th colspan="4">New</th>
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
        <td colspan="4">
          <?= $kolaborator['sektor_tiga'] ? 'Ya' : "Tidak" ?>
        </td>
        <td colspan="4">
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
    <th rowspan="5">Partisipan
    </th>
    <th colspan="4">Total</th>
    <th colspan="5">Kategori Peserta</th>
    <th colspan="5">Kategori Penampil</th>
    <th colspan="5">Kategori Fasilitator</th>
    <th colspan="6">Kategori Narasumber</th>
    <th colspan="6">Kategori Panitia</th>
    <th colspan="6">Kategori Laki Laki</th>
    <th colspan="6">Kategori Perempuan</th>
  </tr>
  <tr>
    <td rowspan="4"><?= $choosed_kegiatan[0]['partisipan_total_huruf'] ?>
    </td>
    <td rowspan="4" colspan="3"><?= $choosed_kegiatan[0]['partisipan_total_digit'] ?>
    </td>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_peserta'] ?>
    </td>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_penampil'] ?>
    </td>
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_fasilitator'] ?>
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
    <th colspan="5">Usia 13 - 17</th>
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
    <td colspan="5"><?= $choosed_kegiatan[0]['partisipan_13_17'] ?>
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