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
  <form action="<?= base_url() ?>admin/kegiatan/update_nama_kegiatan/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" method="post" accept-charset="utf-8">
    <th>Nama Kegiatan
      <span data-toggle="tooltip" data-placement="top" title="Simpan Nama Kegiatan"><button type="submit" class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
    </th>
    <td> <!-- nama_kegiatan -->
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <span data-toggle="tooltip" data-placement="top" title="Tuliskan nama kegiatan">
        <textarea name="nama_kegiatan" id="nama_kegiatan" rows="2" class="form-control form-table" style="width: 225px!important;" required><?= $choosed_kegiatan[0]['nama'] ?></textarea>
      </span>
    </td>
  </form>
  <!-- Strategi Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Strategi Literasi
">LIT</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Strategi Diseminasi
">DIS</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Strategi Institutiona Engagement
">INE</span></th>
  <!-- Strategi End -->
  <!-- Kelompok Kegiatan Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kelompok Community Services (CS)
">CS</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kelompok Community Representative (CR)
">CR</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kelompok Community Development (CD)
">CD</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kelompok Community Empowerment (CE)
">CE</span></th>
  <!-- Kelompok Kegiatan End -->
  <!-- Fokus Kegiatan Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Peningkatan Kualitas Pendidikan di Masyarakat (EDU)
">EDU</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Pemberdayaan Ekonomi Masyarakat (ECO)
">ECO</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Peningkatan Kesehatan dan Kualitas Hidup (HQL)
">HQL</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam fokus Penguatan Kelembagaan di Masyarakat (IE)
">IE</span></th>
  <!-- Fokus Kegiatan Start -->
  <!-- Platform Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori platform Ragawi (RG)
">RG</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori Platform Digital (DG)
">DG</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori Hybrid (HY)
">HY</span></th>
  <!-- Platform End -->
  <!-- 6 Literasi Dasar Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori kegiatan literasi Baca dan Tulis (BT)
">BT</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori kegiatan literasi Numerasi (NU)
">NU</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori kegiatan literasi Sains (SA)
">SA</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori kegiatan literasi Digital (DI)
">DI</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori kegiatan literasi Finansial (FI)
">FI</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori kegiatan literasi Budaya dan Kewargaan (BK)
">BK</span></th>
  <!-- 6 Literasi Dasar End -->
  <!-- Inklusivitas Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori Inklusivitas Difabilitas Netra
">DN</span></th> <!-- DS -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori Inklusivitas Difabilitas Rungu
">DR</span></th> <!-- MR -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori Inklusivitas Difabilitas Lain
">DL</span></th> <!-- GD -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Silahkan isi sesuai dengan petunjuk apabila mata acara termasuk dalam kategori Inklusivitas Terdepan, Terluar, Tertinggal
">3T</span></th> <!-- 3T -->
  <!-- Inklusivitas End -->
  <!-- SDGS Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Tanpa Kemiskinan
">#1</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Tanpa Kelaparan
">#2</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kehidupan Sehat dan Sejahtera">#3</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Pendidikan Berkualitas
">#4</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kesetaraan Gender
">#5</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Air Bersih dan Sanitasi Layak
">#6</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Energi Bersih dan Terjangkau
">#7</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Pekerjaan Layak dan Pertumbuhan Ekonomi
">#8</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Industri, Inovasi dan Infrastruktur">#9</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Berkurangnya Kesenjangan
">#10</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kota dan Permukiman yang Berkelanjutan
">#11</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Konsumsi dan Produksi yang Bertanggung Jawab
">#12</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Penanganan Perubahan Iklim
">#13</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Ekosistem Lautan
">#14</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Ekosistem Daratan
">#15</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Perdamaian, Keadilan dan Kelembagaan yang Tangguh
">#16</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kemitraan untuk mencapai tujuan">#17</span></th>
  <!-- SDGS End -->
</tr>
<tr>
  <form action="<?= base_url() ?>admin/kegiatan/update_sub_heading/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" method="post" accept-charset="utf-8">
    <th>Sub Heading
      <span data-toggle="tooltip" data-placement="top" title="Simpan Sub Heading"><button type="submit" class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
    </th>
    <td> <!-- sub_heading -->
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <span data-toggle="tooltip" data-placement="top" title="Tuliskan kode subject heading kegiatan">
        <textarea name="sub_heading" id="sub_heading" rows="2" class="form-control form-table" style="width: 225px!important;" required><?= $choosed_kegiatan[0]['sub_heading'] ?></textarea>
      </span>
    </td>
  </form>
</tr>