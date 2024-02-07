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
      <textarea name="nama_kegiatan" id="nama_kegiatan" rows="2" class="form-control form-table" style="width: 225px!important;" required><?= $choosed_kegiatan[0]['nama'] ?></textarea>
    </td>
  </form>
  <!-- Strategi Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Strategi Literasi">LIT</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Strategi Diseminasi">DIS</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Strategi Institutiona Engagement">INE</span></th>
  <!-- Strategi End -->
  <!-- Kelompok Kegiatan Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Services">CS</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Representative">CR</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Development">CD</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Empowerment">CE</span></th>
  <!-- Kelompok Kegiatan End -->
  <!-- Fokus Kegiatan Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Fokus Peningkatan Kualitas Pendidikan di Masyarakat">EDU</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Fokus Pemberdayaan Ekonomi Masyarakat">ECO</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Fokus Peningkatan Kesehatan dan Kualitas Hidup">HQL</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Fokus Penguatan Kelembagaan di Masyarakat">IE</span></th>
  <!-- Fokus Kegiatan Start -->
  <!-- Platform Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Platform Ragawi">RG</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Platform Digital">DG</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Platform Hybrid">HY</span></th>
  <!-- Platform End -->
  <!-- 6 Literasi Dasar Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Literasi Baca dan Tulis">BT</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Literasi Numerasi">NU</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Literasi Sains">SA</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Literasi Digital">DI</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Literasi Finansial">FI</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Literasi Budaya dan Kewargaan">BK</span></th>
  <!-- 6 Literasi Dasar End -->
  <!-- Inklusivitas Start -->
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Down Syndrome">DS</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Marginal">MR</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Grand Design">GD</span></th>
  <th rowspan="2"><span data-toggle="tooltip" data-placement="top" title="Inklusivitas 3T (Terdepan, Terluar dan Tertinggal)">3T</span></th>
  <!-- Inklusivitas End -->
  <!-- SDGS Start -->
  <th rowspan="2">#1</th>
  <th rowspan="2">#2</th>
  <th rowspan="2">#3</th>
  <th rowspan="2">#4</th>
  <th rowspan="2">#5</th>
  <th rowspan="2">#6</th>
  <th rowspan="2">#7</th>
  <th rowspan="2">#8</th>
  <th rowspan="2">#9</th>
  <th rowspan="2">#10</th>
  <th rowspan="2">#11</th>
  <th rowspan="2">#12</th>
  <th rowspan="2">#13</th>
  <th rowspan="2">#14</th>
  <th rowspan="2">#15</th>
  <th rowspan="2">#16</th>
  <th rowspan="2">#17</th>
  <!-- SDGS End -->
</tr>
<tr>
  <form action="<?= base_url() ?>admin/kegiatan/update_sub_heading/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" method="post" accept-charset="utf-8">
    <th>Sub Heading
      <span data-toggle="tooltip" data-placement="top" title="Simpan Sub Heading"><button type="submit" class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
    </th>
    <td> <!-- sub_heading -->
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <textarea name="sub_heading" id="sub_heading" rows="2" class="form-control form-table" style="width: 225px!important;" required><?= $choosed_kegiatan[0]['sub_heading'] ?></textarea>
    </td>
  </form>
</tr>