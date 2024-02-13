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

  .datatables-demo,
  .table {
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
    <?php if ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") : ?>
      <form action="<?= base_url() ?>admin/kegiatan/add_catatan/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="add form-hrm" method="POST">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <textarea name="catatan_kegiatan" id="catatan_kegiatan" cols="30" rows="5" class="form-control" required><?= $choosed_kegiatan[0]['catatan'] ?></textarea>
        <div class="my-3 text-right">
          <button type="submit" class="btn btn-secondary ladda-button" data-style="expand-right">
            <span class="ladda-label"><i class="fas fa-check-square"></i> Simpan Catatan</span>
            <span class="ladda-spinner"></span></button>
        </div>
      </form>
    <?php else : ?>
      <textarea name="catatan_kegiatan" id="catatan_kegiatan" cols="30" rows="5" class="form-control" required><?= $choosed_kegiatan[0]['catatan'] ?></textarea>
    <?php endif; ?>
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

      <?php if ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") : ?>
        <div>
          <select name="status_validitas" id="status_validitas" class="form-control">
            <option value="valid" <?= $choosed_kegiatan[0]['validitas'] === 'valid' ? 'selected' : '' ?>>Laporan Valid</option>
            <option value="invalid" <?= $choosed_kegiatan[0]['validitas'] === 'invalid' ? 'selected' : '' ?>>Laporan Tidak Valid</option>
            <option value="waiting" <?= $choosed_kegiatan[0]['validitas'] === 'waiting' ? 'selected' : '' ?>>Status Menunggu</option>
          </select>
        </div>
      <?php else : ?>
        <div>
          <select name="status_validitas" id="status_validitas" class="form-control" disabled>
            <?php if ($choosed_kegiatan[0]['validitas'] === 'waiting') { ?>
              <option value="">Status Menunggu</option>
            <?php } elseif ($choosed_kegiatan[0]['validitas'] === 'valid') { ?>
              <option value="">Laporan Valid</option>
            <?php } else { ?>
              <option value="">Laporan Tidak Valid</option>
            <?php } ?>
          </select>
        </div>
      <?php endif; ?>
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
          <form action="<?= base_url() ?>admin/kegiatan/update_tema/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <th>Tema Kegiatan<span data-toggle="tooltip" data-placement="top" title="Simpan Tema Kegiatan"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
            <td colspan="7">
              <span data-toggle="tooltip" data-placement="top" title="Tuliskan Tema Kegiatan"><textarea name="tema_kegiatan" id="tema_kegiatan" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['tema'] ?></textarea></span>
            </td>
          </form>
          <!-- Tema -->
          <!-- Penanggung Jawab -->
          <form action="<?= base_url() ?>admin/kegiatan/update_pj/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <th>Penanggung Jawab<span data-toggle="tooltip" data-placement="top" title="Simpan Penanggung Jawab"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
            <td colspan="12"><span data-toggle="tooltip" data-placement="top" title="Tuliskan Penanggung Jawab"><textarea name="penanggung_jawab" id="penanggung_jawab" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['penanggung_jawab'] ?></textarea></span></td>
          </form>
          <!-- Penanggung Jawab -->
          <!-- Pendamping -->
          <form action="<?= base_url() ?>admin/kegiatan/update_pendamping/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <th>Pendamping<span data-toggle="tooltip" data-placement="top" title="Simpan Pendamping Jawab"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
            <td colspan="12"><span data-toggle="tooltip" data-placement="top" title="Tuliskan Pendamping"><textarea name="pendamping" id="pendamping" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['pendamping'] ?></textarea></span></td>
          </form>
          <!-- Pendamping -->
          <!-- Lain-Lain -->
          <form action="<?= base_url() ?>admin/kegiatan/update_lain_lain/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <th>Lain-Lain<span data-toggle="tooltip" data-placement="top" title="Simpan Lain-Lain"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span></th>
            <td colspan="8"><span data-toggle="tooltip" data-placement="top" title="Tuliskan Lain Lain"><textarea name="lain_lain" id="lain_lain" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['lain_lain'] ?></textarea></span></td>
          </form>
          <!-- Lain-Lain -->
        </tr>
        <tr>
          <!-- Momentum -->
          <th rowspan="3">Momentum
            <span data-toggle="tooltip" data-placement="top" title="Simpan Momentum">
              <button class="btn btn-xs btn-success saveMomentum"><i class="fas fa-check"></i></button>
            </span>
          </th>
          <th>Angka Digit Tanggal</th>
          <td colspan="6">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan tanggal pada hari tersebut:  01, 02 dst">
              <input class="form-control" type="text" name="momentum_tgl" id="momentum_tgl" value="<?= $choosed_kegiatan[0]['momentum_tgl'] ?>" required>
            </span>
          </td>
          <!-- Momentum -->
          <!-- Hari-Tgl -->
          <th rowspan="3">Hari/Tanggal<span data-toggle="tooltip" data-placement="top" title="Simpan Hari/Tanggal"><button class="btn btn-xs btn-success saveHT"><i class="fas fa-check"></i></button></span></th>
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
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan dua digit bulan pada hari tersebut: 22, 23, dst">
              <input class="form-control" type="text" name="momentum_bln" id="momentum_bln" value="<?= $choosed_kegiatan[0]['momentum_bln'] ?>" required>
            </span>
          </td>
          <!-- Momentum -->
          <!-- Hari-Tgl -->
          <td colspan="6" rowspan="2">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan hari pelaksanaan kegiatan dengan 3 (tiga) digit huruf pertama hari tersebut: SEN, SEL, RAB, KAM, JUM, SAB, MIN">
              <input class="form-control" type="text" name="ht_huruf_hari" id="ht_huruf_hari" value="<?= $choosed_kegiatan[0]['ht_huruf_hari'] ?>" required>
            </span>
          </td>
          <td colspan="6" rowspan="2">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan tanggal pada hari tersebut: 01, 02, dst">
              <input class="form-control" type="text" name="ht_digit_tanggal" id="ht_digit_tanggal" value="<?= $choosed_kegiatan[0]['ht_digit_tanggal'] ?>" required>
            </span>
          </td>
          <td colspan="6" rowspan="2">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan bulan pada hari tersebut: 01, 02, dst">
              <input class="form-control" type="text" name="ht_digit_bulan" id="ht_digit_bulan" value="<?= $choosed_kegiatan[0]['ht_digit_bulan'] ?>" required>
            </span>
          </td>
          <td colspan="6" rowspan="2">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan dua digit terakhir tahun pada hari tersebut: 22, 23, dst">
              <input class="form-control" type="text" name="ht_digit_tahun" id="ht_digit_tahun" value="<?= $choosed_kegiatan[0]['ht_digit_tahun'] ?>" required>
            </span>
          </td>
          <!-- Hari-Tgl -->
          <!-- Durasi -->
          <td colspan="5" rowspan="2">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan keterangan jumlah jam pelaksanaan kegiatan">
              <input class="form-control" type="text" name="ht_digit_jam" id="ht_digit_jam" value="<?= $choosed_kegiatan[0]['ht_digit_jam'] ?>" required>
            </span>
          </td>
          <td colspan="5" rowspan="2">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan angka yang menunjukkan keterangan jumlah menit pelaksanaan kegiatan">
              <input class="form-control" type="text" name="ht_digit_menit" id="ht_digit_menit" value="<?= $choosed_kegiatan[0]['ht_digit_menit'] ?>" required>
            </span>
          </td>
          <!-- Durasi -->
        </tr>
        <tr>
          <!-- Momentum -->
          <th>Jenis Momentum</th>
          <td colspan="6">
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan Jenis momentum kegiatan tersebut.">
              <input class="form-control" type="text" name="momentum_jenis" id="momentum_jenis" value="<?= $choosed_kegiatan[0]['momentum_jenis'] ?>" required>
            </span>
          </td>
          <!-- Momentum -->
        </tr>
        <tr>
          <th rowspan="3">Inisiasi</th>
          <th>RBA</th>
          <td colspan="6">
            <form class="inisiasiForm" action="<?= base_url() ?>admin/kegiatan/update_inisiasi_rba/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <input type="checkbox" name="inisiasi_rba" class="form-control form-table mx-auto inisiasiCheckbox" value="true" <?= $choosed_kegiatan[0]['inisiasi_rba'] ? 'checked' : "" ?>>
            </form>
          </td>
          <th colspan="21">Lokasi<span data-toggle="tooltip" data-placement="top" title="Simpan Lokasi"><button class="btn btn-xs btn-success mx-2 saveLokasi"><i class="fas fa-check"></i></button></span></th>
          <th colspan="4">Lokasi Jarak</th>
          <td colspan="10">
            <textarea name="lokasi_jarak" id="lokasi_jarak" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['lokasi_jarak'] ?></textarea>
          </td>
        </tr>
        <tr>
          <th>Kolaborator</th>
          <td colspan="6">
            <form class="inisiasiForm" action="<?= base_url() ?>admin/kegiatan/update_inisiasi_kolaborator/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <input type="checkbox" name="inisiasi_kolaborator" class="form-control form-table mx-auto inisiasiCheckbox" value="true" <?= $choosed_kegiatan[0]['inisiasi_kolaborator'] ? 'checked' : "" ?>>
            </form>
          </td>
          <th>Lokasi Kegiatan</th>
          <td colspan="20"><textarea name="lokasi_kegiatan" id="lokasi_kegiatan" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['lokasi_kegiatan'] ?></textarea></td>
          <th colspan="4">Lokasi IH</th>
          <td colspan="10">
            <input type="checkbox" name="lokasi_ih" id="lokasi_ih" class="form-control form-table mx-auto" value="true" <?= $choosed_kegiatan[0]['lokasi_ih'] ? 'checked' : "" ?>>
          </td>
        </tr>
        <tr>
          <th>Mitra</th>
          <td colspan="6">
            <form class="inisiasiForm" action="<?= base_url() ?>admin/kegiatan/update_inisiasi_mitra/<?= $choosed_kegiatan[0]['id'] ?>" method="post" autocomplete="off">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <input type="checkbox" name="inisiasi_mitra" class="form-control form-table mx-auto inisiasiCheckbox" value="true" <?= $choosed_kegiatan[0]['inisiasi_mitra'] ? 'checked' : "" ?>>
            </form>
          </td>
          <th>Lokasi Digital</th>
          <td colspan="20"><textarea name="lokasi_digital" id="lokasi_digital" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['lokasi_digital'] ?></textarea></td>
          <th colspan="4">Lokasi OR</th>
          <td colspan="10">
            <input type="checkbox" name="lokasi_or" id="lokasi_or" class="form-control form-table mx-auto" value="true" <?= $choosed_kegiatan[0]['lokasi_or'] ? 'checked' : "" ?>>
          </td>
        </tr>
        <tr>
          <th colspan="2">
            Catatan
          </th>
          <th rowspan="2">Aksi</th>
          <th colspan="10" rowspan="2">Publikasi & Diseminasi</th>
          <th colspan="10" rowspan="2">Persiapan Kegiatan</th>
          <th colspan="10" rowspan="2">Pelaksaan Kegiatan</th>
          <th colspan="10" rowspan="2">Lain-Lain</th>
        </tr>
        <tr>
          <th colspan="2" <?= count($kegiatan["kendala"]) > 0 ? 'rowspan="' . count($kegiatan["kendala"]) + 1 . '"' : '' ?>>Kendala
            <span data-toggle="tooltip" data-placement="top" title="Tambah Kendala"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-kendala"><i class="fas fa-plus"></i></button></span>
            <div class="modal fadeInRight add-modal-kendala animated" role="dialog" aria-labelledby="add-modal-kendala" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Kendala Kegiatan</h4>
                  </div>
                  <form action="<?= base_url() ?>admin/kegiatan/add_kendala/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="keterangan_tujuan">Publikasi & Diseminasi</label>
                        <textarea class="form-control" name="publikasi" id="publikasi" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Persiapan Kegiatan</label>
                        <textarea class="form-control" name="persiapan" id="persiapan" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Pelaksanaan Kegiatan</label>
                        <textarea class="form-control" name="pelaksanaan" id="pelaksanaan" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Lain-Lain</label>
                        <textarea class="form-control" name="lain_lain" id="lain_lain" cols="10" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-success save ladda-button" data-style="expand-right"><span class="ladda-label">Tambah</span><span class="ladda-spinner"></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </th>
        </tr>
        <?php if (count($kegiatan["kendala"]) > 0) : ?>
          <?php $no_kendala = 1;
          foreach ($kegiatan["kendala"] as $kendala) : ?>
            <tr>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Kendala Kegiatan Ini">
                  <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_kendala/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kendala['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a></span>
              </td>
              <td colspan="10"><?= $no_kendala . ". " . $kendala['publikasi'] ?></td>
              <td colspan="10"><?= $no_kendala . ". " . $kendala['persiapan'] ?></td>
              <td colspan="10"><?= $no_kendala . ". " . $kendala['pelaksanaan'] ?></td>
              <td colspan="10"><?= $no_kendala . ". " . $kendala['lain_lain'] ?></td>
            </tr>
          <?php $no_kendala++;
          endforeach;  ?>
        <?php endif; ?>
        <tr>
          <th colspan="2" <?= count($kegiatan["solusi"]) > 0 ? 'rowspan="' . count($kegiatan["solusi"]) + 1 . '"' : '' ?>>Solusi
            <span data-toggle="tooltip" data-placement="top" title="Tambah Solusi"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-solusi"><i class="fas fa-plus"></i></button></span>
            <div class="modal fadeInRight add-modal-solusi animated" role="dialog" aria-labelledby="add-modal-solusi" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Solusi Kegiatan</h4>
                  </div>
                  <form action="<?= base_url() ?>admin/kegiatan/add_solusi/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="keterangan_tujuan">Publikasi & Diseminasi</label>
                        <textarea class="form-control" name="publikasi" id="publikasi" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Persiapan Kegiatan</label>
                        <textarea class="form-control" name="persiapan" id="persiapan" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Pelaksanaan Kegiatan</label>
                        <textarea class="form-control" name="pelaksanaan" id="pelaksanaan" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Lain-Lain</label>
                        <textarea class="form-control" name="lain_lain" id="lain_lain" cols="10" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-success save ladda-button" data-style="expand-right"><span class="ladda-label">Tambah</span><span class="ladda-spinner"></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </th>
        </tr>
        <?php if (count($kegiatan["solusi"]) > 0) : ?>
          <?php $no_solusi = 1;
          foreach ($kegiatan["solusi"] as $solusi) : ?>
            <tr>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Solusi Kegiatan Ini">
                  <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_solusi/<?= $choosed_kegiatan[0]['id'] ?>/<?= $solusi['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a></span>
              </td>
              <td colspan="10"><?= $no_solusi . ". " . $solusi['publikasi'] ?></td>
              <td colspan="10"><?= $no_solusi . ". " . $solusi['persiapan'] ?></td>
              <td colspan="10"><?= $no_solusi . ". " . $solusi['pelaksanaan'] ?></td>
              <td colspan="10"><?= $no_solusi . ". " . $solusi['lain_lain'] ?></td>
            </tr>
          <?php $no_solusi++;
          endforeach;  ?>
        <?php endif; ?>
        <tr>
          <th colspan="2" <?= count($kegiatan["perbaikan"]) > 0 ? 'rowspan="' . count($kegiatan["perbaikan"]) + 1 . '"' : '' ?>>Perbaikan
            <span data-toggle="tooltip" data-placement="top" title="Tambah Perbaikan"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-perbaikan"><i class="fas fa-plus"></i></button></span>
            <div class="modal fadeInRight add-modal-perbaikan animated" role="dialog" aria-labelledby="add-modal-perbaikan" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Perbaikan Selanjutnya Kegiatan</h4>
                  </div>
                  <form action="<?= base_url() ?>admin/kegiatan/add_perbaikan/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="keterangan_tujuan">Publikasi & Diseminasi</label>
                        <textarea class="form-control" name="publikasi" id="publikasi" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Persiapan Kegiatan</label>
                        <textarea class="form-control" name="persiapan" id="persiapan" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Pelaksanaan Kegiatan</label>
                        <textarea class="form-control" name="pelaksanaan" id="pelaksanaan" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_tujuan">Lain-Lain</label>
                        <textarea class="form-control" name="lain_lain" id="lain_lain" cols="10" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-success save ladda-button" data-style="expand-right"><span class="ladda-label">Tambah</span><span class="ladda-spinner"></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </th>
        </tr>
        <?php if (count($kegiatan["perbaikan"]) > 0) : ?>
          <?php $no_perbaikan = 1;
          foreach ($kegiatan["perbaikan"] as $perbaikan) : ?>
            <tr>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Perbaikan Kegiatan Ini">
                  <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_perbaikan/<?= $choosed_kegiatan[0]['id'] ?>/<?= $perbaikan['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a></span>
              </td>
              <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['publikasi'] ?></td>
              <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['persiapan'] ?></td>
              <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['pelaksanaan'] ?></td>
              <td colspan="10"><?= $no_perbaikan . ". " . $perbaikan['lain_lain'] ?></td>
            </tr>
          <?php $no_perbaikan++;
          endforeach;  ?>
        <?php endif; ?>
        <?php include('kolaborator-table-row.php') ?>
        <?php include('partisipan-table-row.php') ?>
      </table>
    </div>
  </div>
</div>
<br>


<div class="card">
  <div class="card-body">
    <table class="table table-striped table-bordered">
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
  </div>
</div>
<br>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <form action="<?= base_url() ?>admin/kegiatan/add_validasi/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="add form-hrm" method="POST">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="2">
                  Validasi
                  <span data-toggle="tooltip" data-placement="top" title="Simpan Validasi"><button type="submit" class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
                </th>
              </tr>
            </thead>
            <tr>
              <th>Nama Penanggung Jawab</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan nama lengkap Penanggung Jawab Kegiatan">
                  <input class="form-control" type="text" name="validasi_nama_pj" value="<?= $choosed_kegiatan[0]['validasi_nama_pj'] ?>" placeholder="Nama Penanggung Jawab" required>
                </span>
              </td>
            </tr>
            <tr>
              <th>Nomor Kontak</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan nomor kontak PJ">
                  <input class="form-control" type="text" name="validasi_no_kontak" value="<?= $choosed_kegiatan[0]['validasi_no_kontak'] ?>" placeholder="Nomor Kontak" required>
                </span>
              </td>
            </tr>
            <tr>
              <th>Alamat User</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan alamat surel PJ">
                  <input class="form-control" type="text" name="validasi_alamat_surel" value="<?= $choosed_kegiatan[0]['validasi_alamat_surel'] ?>" placeholder="Alamat User" required>
                </span>
              </td>
            </tr>
            <tr>
              <th>Nama User</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan nama lengkap User">
                  <input class="form-control" type="text" name="validasi_nama_user" value="<?= $choosed_kegiatan[0]['validasi_nama_user'] ?>" placeholder="Nama User" required>
                </span>
              </td>
            </tr>
            <tr>
              <th>Penempatan</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tulis nama penempatan">
                  <input class="form-control" type="text" name="validasi_penempatan" value="<?= $choosed_kegiatan[0]['validasi_penempatan'] ?>" placeholder="Penempatan" required>
                </span>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="col-md-6">
        <form action="<?= base_url() ?>admin/kegiatan/add_verifikator/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="add form-hrm" method="POST">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="2">
                  Verifikator
                  <?php if ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") : ?>
                    <span data-toggle="tooltip" data-placement="top" title="Simpan Verifikator"><button type="submit" class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
                  <?php endif; ?>
                </th>
              </tr>
            </thead>
            <tr>
              <th>Nama</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tulis nama verifikator">
                  <select class="form-control" name="verifikator_nama" id="verifikator_nama" required <?= ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") ? '' : 'disabled' ?>>
                    <option selected disabled>Pilih Verifikator
                    </option>
                    <?php foreach ($employees as $employee) : ?>
                      <option value="<?= $employee['username'] ?>" <?= ($employee['username'] === $choosed_kegiatan[0]['verifikator_nama']) ? 'selected' : '' ?>><?= $employee['first_name'] . " " . $employee['last_name']  ?></option>
                    <?php endforeach; ?>
                  </select>
                </span>
              </td>
            </tr>
            <tr>
              <th>Nomor Kontak</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan nomor kontak Verifikator">
                  <input class="form-control" type="text" name="verifikator_no_kontak" value="<?= $choosed_kegiatan[0]['verifikator_no_kontak'] ?>" placeholder="Nomor Kontak" required <?= ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") ? '' : 'disabled' ?>>
                </span>
              </td>
            </tr>
            <tr>
              <th>Alamat User</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan alamat surel verifikator">
                  <input class="form-control" type="text" name="verifikator_alamat_surel" value="<?= $choosed_kegiatan[0]['verifikator_alamat_surel'] ?>" placeholder="Alamat User" required <?= ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") ? '' : 'disabled' ?>>
                </span>
              </td>
            </tr>
            <tr>
              <th>Jabatan</th>
              <td>
                <span data-toggle="tooltip" data-placement="top" title="Tuliskan jabatan Verifikator">
                  <input class="form-control" type="text" name="verifikator_jabatan" value="<?= $choosed_kegiatan[0]['verifikator_jabatan'] ?>" placeholder="Jabatan" required <?= ($data_user[0]->user_role_id == "1" || $data_user[0]->user_role_id == "3") ? '' : 'disabled' ?>>
                </span>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Verifikator -->

<!-- Momentum -->
<script>
  var saveMomentum = document.querySelector('.saveMomentum');
  saveMomentum.addEventListener('click', function() {
    // Create a form element dynamically
    let form = document.createElement('form');
    form.action = '<?= base_url() ?>admin/kegiatan/update_momentum/<?= $choosed_kegiatan[0]['id'] ?>'; // Replace with your actual delete endpoint
    form.method = 'post';

    // Create a hidden input for CSRF token
    let csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

    // Append the CSRF input to the form
    form.appendChild(csrfInput);

    // Create a hidden input for selected checkbox values
    let momentum_tgl = document.createElement('input');
    momentum_tgl.type = 'hidden';
    momentum_tgl.name = 'momentum_tgl';
    momentum_tgl.required = true;
    momentum_tgl.value = document.getElementById('momentum_tgl').value;

    let momentum_bln = document.createElement('input');
    momentum_bln.type = 'hidden';
    momentum_bln.name = 'momentum_bln';
    momentum_bln.required = true;
    momentum_bln.value = document.getElementById('momentum_bln').value;

    let momentum_jenis = document.createElement('input');
    momentum_jenis.type = 'hidden';
    momentum_jenis.name = 'momentum_jenis';
    momentum_jenis.required = true;
    momentum_jenis.value = document.getElementById('momentum_jenis').value;

    // Append the hidden input to the form
    form.appendChild(momentum_tgl);
    form.appendChild(momentum_bln);
    form.appendChild(momentum_jenis);
    // Append the form to the document body
    document.body.appendChild(form);
    // Submit the form
    form.submit();
  });
</script>

<!-- Hari Tanggal -->
<script>
  var saveHT = document.querySelector('.saveHT');
  saveHT.addEventListener('click', function() {
    // Create a form element dynamically
    let form = document.createElement('form');
    form.action = '<?= base_url() ?>admin/kegiatan/update_ht/<?= $choosed_kegiatan[0]['id'] ?>'; // Replace with your actual delete endpoint
    form.method = 'post';

    // Create a hidden input for CSRF token
    let csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

    // Append the CSRF input to the form
    form.appendChild(csrfInput);

    // Create a hidden input for selected checkbox values
    let ht_huruf_hari = document.createElement('input');
    ht_huruf_hari.type = 'hidden';
    ht_huruf_hari.name = 'ht_huruf_hari';
    ht_huruf_hari.required = true;
    ht_huruf_hari.value = document.getElementById('ht_huruf_hari').value;

    let ht_digit_tanggal = document.createElement('input');
    ht_digit_tanggal.type = 'hidden';
    ht_digit_tanggal.name = 'ht_digit_tanggal';
    ht_digit_tanggal.required = true;
    ht_digit_tanggal.value = document.getElementById('ht_digit_tanggal').value;

    let ht_digit_bulan = document.createElement('input');
    ht_digit_bulan.type = 'hidden';
    ht_digit_bulan.name = 'ht_digit_bulan';
    ht_digit_bulan.required = true;
    ht_digit_bulan.value = document.getElementById('ht_digit_bulan').value;

    let ht_digit_tahun = document.createElement('input');
    ht_digit_tahun.type = 'hidden';
    ht_digit_tahun.name = 'ht_digit_tahun';
    ht_digit_tahun.required = true;
    ht_digit_tahun.value = document.getElementById('ht_digit_tahun').value;

    let ht_digit_jam = document.createElement('input');
    ht_digit_jam.type = 'hidden';
    ht_digit_jam.name = 'ht_digit_jam';
    ht_digit_jam.required = true;
    ht_digit_jam.value = document.getElementById('ht_digit_jam').value;

    let ht_digit_menit = document.createElement('input');
    ht_digit_menit.type = 'hidden';
    ht_digit_menit.name = 'ht_digit_menit';
    ht_digit_menit.required = true;
    ht_digit_menit.value = document.getElementById('ht_digit_menit').value;

    // Append the hidden input to the form
    form.appendChild(ht_huruf_hari);
    form.appendChild(ht_digit_tanggal);
    form.appendChild(ht_digit_bulan);
    form.appendChild(ht_digit_tahun);
    form.appendChild(ht_digit_jam);
    form.appendChild(ht_digit_menit);
    // Append the form to the document body
    document.body.appendChild(form);
    // Submit the form
    form.submit();
  });
</script>

<!-- Inisiasi -->
<script>
  const inisiasiCheckbox = document.querySelectorAll('.inisiasiCheckbox');
  inisiasiCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.inisiasiForm');
      form.submit();
    });
  });
</script>

<!-- Catatan -->
<script>
  var saveCatatan = document.querySelector('.saveCatatan');
  saveCatatan.addEventListener('click', function() {
    // Create a form element dynamically
    let form = document.createElement('form');
    form.action = '<?= base_url() ?>admin/kegiatan/update_catatan/<?= $choosed_kegiatan[0]['id'] ?>'; // Replace with your actual delete endpoint
    form.method = 'post';

    // Create a hidden input for CSRF token
    let csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

    // Append the CSRF input to the form
    form.appendChild(csrfInput);

    // Create a hidden input for selected checkbox values
    let catatan_publikasi = document.createElement('input');
    catatan_publikasi.type = 'hidden';
    catatan_publikasi.name = 'catatan_publikasi';
    catatan_publikasi.required = true;
    catatan_publikasi.value = document.getElementById('catatan_publikasi').value;

    let catatan_persiapan = document.createElement('input');
    catatan_persiapan.type = 'hidden';
    catatan_persiapan.name = 'catatan_persiapan';
    catatan_persiapan.required = true;
    catatan_persiapan.value = document.getElementById('catatan_persiapan').value;

    let catatan_pelaksanaan = document.createElement('input');
    catatan_pelaksanaan.type = 'hidden';
    catatan_pelaksanaan.name = 'catatan_pelaksanaan';
    catatan_pelaksanaan.required = true;
    catatan_pelaksanaan.value = document.getElementById('catatan_pelaksanaan').value;

    // Append the hidden input to the form
    form.appendChild(catatan_publikasi);
    form.appendChild(catatan_persiapan);
    form.appendChild(catatan_pelaksanaan);
    // Append the form to the document body
    document.body.appendChild(form);
    // Submit the form
    form.submit();
  });
</script>

<!-- Lokasi -->
<script>
  var saveLokasi = document.querySelector('.saveLokasi');
  saveLokasi.addEventListener('click', function() {
    // Create a form element dynamically
    let form = document.createElement('form');
    form.action = '<?= base_url() ?>admin/kegiatan/update_lokasi/<?= $choosed_kegiatan[0]['id'] ?>'; // Replace with your actual delete endpoint
    form.method = 'post';

    // Create a hidden input for CSRF token
    let csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

    // Append the CSRF input to the form
    form.appendChild(csrfInput);

    // Create a hidden input for selected checkbox values
    let lokasi_kegiatan = document.createElement('input');
    lokasi_kegiatan.type = 'hidden';
    lokasi_kegiatan.name = 'lokasi_kegiatan';
    lokasi_kegiatan.required = true;
    lokasi_kegiatan.value = document.getElementById('lokasi_kegiatan').value;

    let lokasi_digital = document.createElement('input');
    lokasi_digital.type = 'hidden';
    lokasi_digital.name = 'lokasi_digital';
    lokasi_digital.required = true;
    lokasi_digital.value = document.getElementById('lokasi_digital').value;

    let lokasi_jarak = document.createElement('input');
    lokasi_jarak.type = 'hidden';
    lokasi_jarak.name = 'lokasi_jarak';
    lokasi_jarak.required = true;
    lokasi_jarak.value = document.getElementById('lokasi_jarak').value;

    let lokasi_ih = document.createElement('input');
    lokasi_ih.type = 'hidden';
    lokasi_ih.name = 'lokasi_ih';
    lokasi_ih.required = true;
    lokasi_ih.value = document.getElementById('lokasi_ih').value;

    let lokasi_or = document.createElement('input');
    lokasi_or.type = 'hidden';
    lokasi_or.name = 'lokasi_or';
    lokasi_or.required = true;
    lokasi_or.value = document.getElementById('lokasi_or').value;

    // Append the hidden input to the form
    form.appendChild(lokasi_kegiatan);
    form.appendChild(lokasi_digital);
    form.appendChild(lokasi_jarak);
    form.appendChild(lokasi_ih);
    form.appendChild(lokasi_or);
    // Append the form to the document body
    document.body.appendChild(form);
    // Submit the form
    form.submit();
  });
</script>

<!-- Status Validitas -->
<script>
  const statusValiditasSelect = document.getElementById('status_validitas');
  statusValiditasSelect.addEventListener('change', function() {
    // Get the selected option
    const selectedOption = statusValiditasSelect.value;

    // Check if an option other than the default is selected
    if (selectedOption.value !== "") {
      // Create a form element dynamically
      let form = document.createElement('form');
      form.action = '<?= base_url() ?>admin/kegiatan/update_validitas/<?= $choosed_kegiatan[0]['id'] ?>'; // Replace with your actual delete endpoint
      form.method = 'post';

      // Create a hidden input for CSRF token
      let csrfInput = document.createElement('input');
      csrfInput.type = 'hidden';
      csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
      csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

      // Append the CSRF input to the form
      form.appendChild(csrfInput);

      // Create a hidden input for selected checkbox values
      let status_validitas = document.createElement('input');
      status_validitas.type = 'hidden';
      status_validitas.name = 'status_validitas';
      status_validitas.required = true;
      status_validitas.value = selectedOption;

      // Append the hidden input to the form
      form.appendChild(status_validitas);
      // Append the form to the document body
      document.body.appendChild(form);
      // Submit the form
      console.log(selectedOption);
      form.submit();
    }
  });
</script>