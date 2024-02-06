<?php
/* Client view
*/
?>
<?php $session = $this->session->userdata('username'); ?>
<?php $get_animate = $this->Xin_model->get_content_animate(); ?>
<?php $role_resources_ids = $this->Xin_model->user_role_resource(); ?>

<style>
  .form-table {
    width: unset !important;
  }

  td,
  th {
    border: 2px solid grey !important;
  }

  .flex-with-save {
    align-items: center;
    gap: 10px;
  }

  .datatables-demo {
    font-size: 10px !important;
  }

  .form-control {
    height: unset !important;
  }

  textarea {
    font-size: 10px !important;
  }
</style>

<div id="catatan" class="collapse add-formd animated fadeUp">
  <div class="ui-bordered px-4 pt-4 mb-4 mt-3">
    <form action="<?= base_url() ?>admin/kegiatan/add_catatan/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="add form-hrm" method="POST">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <textarea name="catatan_kegiatan" id="catatan_kegiatan" cols="30" rows="5" class="form-control" required><?= $choosed_kegiatan[0]['catatan'] ?></textarea>
      <div class="my-3 text-right">
        <button type="submit" class="btn btn-secondary ladda-button" data-style="expand-right">
          <span class="ladda-label"><i class="fas fa-check-square"></i> Simpan Catatan</span>
          <span class="ladda-spinner"></span></button>
      </div>
    </form>
  </div>
</div>
<div class="card">
  <div class="card-header with-elements">
    <div class="card-header-elements">
      <a class="text-dark" href="<?= base_url() ?>admin/kegiatan/detail/<?= $choosed_kegiatan[0]['id'] ?>">
        <button type="button" class="btn btn-md btn-primary">
          <span class="ion ion-ios-refresh"></span>
          Refresh
        </button>
      </a>
      <a class="text-dark" href="<?= base_url() ?>admin/kegiatan/detail_print/<?= $choosed_kegiatan[0]['id'] ?>">
        <button type="button" class="btn btn-md btn-secondary">
          <span class="ion ion-ios-print"></span>
          Print
        </button>
      </a>
      <a href="<?= base_url() ?>admin/kegiatan/detail_delete/<?= $choosed_kegiatan[0]['id'] ?>" class="text-dark" onclick="return confirm('Are you sure you want to delete?');">
        <button type="button" class="btn btn-md btn-danger">
          <span class="ion ion-ios-trash"></span>
          Hapus
        </button>
      </a>
    </div>
    <div class="card-header-elements ml-md-auto align-items-center">
      <a class="text-dark collapsed" data-toggle="collapse" href="#catatan" aria-expanded="false">
        <button type="button" class="btn btn-md btn-info">
          <span class="ion ion-ios-document"></span>
          Catatan
        </button>
      </a>
      <div>
        <select name="status_validitas" id="status_validitas" class="form-control">
          <option selected disabled>Pilih Status Laporan</option>
          <option value="valid">Laporan Valid</option>
          <option value="invalid">Laporan Tidak Valid</option>
        </select>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card">
  <div class="card-body">
    <div class="box-datatable table-responsive">
      <table class="datatables-demo table table-striped table-bordered">
        <?php include('header-table-row.php'); ?>
        <?php include('mata-acara-table-row.php') ?>
        <?php include('tujuan-table-row.php') ?>
        <?php include('dokumen-table-row.php') ?>
        <tr>
          <!-- Tema -->
          <th>Tema Kegiatan<span data-toggle="tooltip" data-placement="top" title="Simpan Tema Kegiatan"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
          <td colspan="7"><textarea name="tema_kegiatan" id="nama_kegiatan" rows="2" class="form-control" required>Bersatu kita teguh bercerai kita runtuh</textarea></td>
          <!-- Tema -->
          <!-- Penanggung Jawab -->
          <th>Penanggung Jawab<span data-toggle="tooltip" data-placement="top" title="Simpan Penanggung Jawab"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
          <td colspan="12"><textarea name="penanggung_jawab" id="penanggung_jawab" rows="2" class="form-control" required>AJIB</textarea></td>
          <!-- Penanggung Jawab -->
          <!-- Pendamping -->
          <th>Pendamping<span data-toggle="tooltip" data-placement="top" title="Simpan Pendamping Jawab"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
          <td colspan="12"><textarea name="pendamping" id="pendamping" rows="2" class="form-control" required>MEIRNA PUSPITA</textarea></td>
          <!-- Pendamping -->
          <!-- Lain-Lain -->
          <th>Lain-Lain<span data-toggle="tooltip" data-placement="top" title="Simpan Lain-Lain"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
          <td colspan="8"><textarea name="lain_lain" id="lain_lain" rows="2" class="form-control" required></textarea></td>
          <!-- Lain-Lain -->
        </tr>

        <tr>
          <!-- Momentum -->
          <th rowspan="3">Momentum<span data-toggle="tooltip" data-placement="top" title="Simpan Momentum"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
          <th>Angka Digit Tanggal</th>
          <td colspan="6">02</td>
          <!-- Momentum -->
          <!-- Hari-Tgl -->
          <th rowspan="3">Hari/Tanggal<span data-toggle="tooltip" data-placement="top" title="Simpan Hari/Tanggal"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
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
          <td colspan="6">11</td>
          <!-- Momentum -->
          <!-- Hari-Tgl -->
          <td colspan="6" rowspan="2"><textarea name="hari_tgl_huruf_hari" rows="1" class="form-control" required>SEN</textarea></td>
          <td colspan="6" rowspan="2"><textarea name="hari_tgl_digit_tanggal" rows="1" class="form-control" required>02</textarea></td>
          <td colspan="6" rowspan="2"><textarea name="hari_tgl_digit_bulan" rows="1" class="form-control" required>06</textarea></td>
          <td colspan="6" rowspan="2"><textarea name="hari_tgl_digit_tahun" rows="1" class="form-control" required>24</textarea></td>
          <!-- Hari-Tgl -->
          <!-- Durasi -->
          <td colspan="5" rowspan="2"><textarea name="hari_tgl_digit_tahun" rows="1" class="form-control" required>1</textarea></td>
          <td colspan="5" rowspan="2"><textarea name="hari_tgl_digit_tahun" rows="1" class="form-control" required>45</textarea></td>
          <!-- Durasi -->
        </tr>
        <tr>
          <!-- Momentum -->
          <th>Jenis Momentum</th>
          <td colspan="6">Insidental</td>
          <!-- Momentum -->
        </tr>
        <tr>
          <th rowspan="3">Inisiasi<span data-toggle="tooltip" data-placement="top" title="Simpan Inisiasi"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
          <th>RBA</th>
          <td colspan="6"><input type="checkbox" name="inisiasi_rba" class="form-control form-table mx-auto"></td>
          <th rowspan="3">Catatan<span data-toggle="tooltip" data-placement="top" title="Simpan Catatan"><button class="btn btn-xs btn-success mx-2"><i class="fas fa-check"></i></button></span></th>
          <th colspan="3">Publikasi dan Diseminasi</th>
          <td colspan="31"><textarea name="catatan_publikasi_diseminasi" rows="1" class="form-control" required>-</textarea></td>
        </tr>
        <tr>
          <th>Kolaborator</th>
          <td colspan="6"><input type="checkbox" name="inisiasi_kolaborator" class="form-control form-table mx-auto"></td>
          <th colspan="3">Persiapan Kegiatan</th>
          <td colspan="31"><textarea name="catatan_persiapan_kegiatan" rows="1" class="form-control" required>-</textarea></td>
        </tr>
        <tr>
          <th>Mitra</th>
          <td colspan="6"><input type="checkbox" name="inisiasi_mitra" class="form-control form-table mx-auto"></td>
          <th colspan="3">Pelaksanaan Kegiatan</th>
          <td colspan="31"><textarea name="catatan_pelaksanaan_kegiatan" rows="1" class="form-control" required>-</textarea></td>
        </tr>
        <tr>
          <th colspan="20">Lokasi<span data-toggle="tooltip" data-placement="top" title="Simpan Lokasi"><button class="btn btn-xs btn-success mx-2"><i class="fas fa-check"></i></button></span></th>
          <th colspan="2">Lokasi Jarak</th>
          <td colspan="21"><textarea name="lokasi_jarak" rows="2" class="form-control" required>-</textarea></td>
        </tr>
        <tr>
          <th>Lokasi Kegiatan</th>
          <td colspan="19"><textarea name="lokasi_kegiatan" rows="2" class="form-control" required>TBM Rumah Cahaya Untukmu</textarea></td>
          <th colspan="2">Lokasi IH</th>
          <td colspan="21"><textarea name="lokasi_ih" rows="2" class="form-control" required>-</textarea></td>
        </tr>
        <tr>
          <th>Lokasi Digital</th>
          <td colspan="19"><textarea name="lokasi_digital" rows="2" class="form-control" required>https://maps.app.goo.gl/wxosdQSwW7byaRpw8</textarea></td>
          <th colspan="2">Lokasi OR</th>
          <td colspan="21"><textarea name="lokasi_or" rows="2" class="form-control" required>-</textarea></td>
        </tr>
        <?php include('kendala-table-row.php') ?>
        <?php include('solusi-table-row.php') ?>
        <?php include('perbaikan-table-row.php') ?>
        <?php include('kolaborator-table-row.php') ?>
        <?php include('partisipan-table-row.php') ?>
      </table>
    </div>
  </div>
</div>