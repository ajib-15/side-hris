<tr>
  <th colspan="43">
    Mata Acara Kegiatan
    <span data-toggle="tooltip" data-placement="top" title="Tambah Mata Acara Kegiatan"><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-mata-acara"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Mata Acara -->
    <div class="modal fadeInRight add-modal-mata-acara animated" role="dialog" aria-labelledby="add-modal-mata-acara" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Mata Acara Kegiatan</h4>
          </div>
          <form action="<?= base_url() ?>admin/kegiatan/add_mata_acara/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="modal-body">
              <label for="nama_mata_acara">Nama Mata Acara Kegiatan</label>
              <textarea class="form-control" name="nama_mata_acara" id="nama_mata_acara" cols="30" rows="10" required></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success save ladda-button" data-style="expand-right"><span class="ladda-label">Tambah</span><span class="ladda-spinner"></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Add Mata Acara -->
  </th>
</tr>
<!-- Start Looping -->
<?php if (count($kegiatan["mata_acara"]) > 0) : ?>
  <?php $no_mata_acara = 1;
  foreach ($kegiatan["mata_acara"] as $mata_acara) : ?>
    <form action="<?= base_url() ?>admin/kegiatan/update_mata_acara/<?= $choosed_kegiatan[0]['id'] ?>/<?= $mata_acara['id'] ?>" method="POST" autocomplete="off">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <tr>
        <td colspan="2">
          <div class="d-flex flex-with-save">
            <span data-toggle="tooltip" data-placement="top" title="Simpan Baris Mata Acara Kegiatan Ini">
              <button type="submit" class="btn btn-xs btn-success"><i class="fas fa-check"></i></button>
            </span>
            <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Mata Acara Kegiatan Ini">
              <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_mata_acara/<?= $choosed_kegiatan[0]['id'] ?>/<?= $mata_acara['id'] ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
            </span>
            <span data-toggle="tooltip" data-placement="top" title="Tuliskan Mata Acara Kegiatan
">
              <textarea name="nama_mata_acara" id="nama_mata_acara" rows="2" class="form-control form-table" required><?= $mata_acara['nama_mata_acara'] ?></textarea>
            </span>
          </div>
        </td>
        <!-- Strategi Start -->
        <td><input type="checkbox" name="strategi_lit" class="form-control form-table mx-auto" value="true" <?= $mata_acara['strategi_lit'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="strategi_dis" class="form-control form-table mx-auto" value="true" <?= $mata_acara['strategi_dis'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="strategi_ine" class="form-control form-table mx-auto" value="true" <?= $mata_acara['strategi_ine'] ? 'checked' : "" ?>></td>
        <!-- Strategi End -->
        <!-- Kelompok Kegiatan Start -->
        <td><input type="checkbox" name="kelompok_cs" class="form-control form-table mx-auto" value="true" <?= $mata_acara['kelompok_cs'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="kelompok_cr" class="form-control form-table mx-auto" value="true" <?= $mata_acara['kelompok_cr'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="kelompok_cd" class="form-control form-table mx-auto" value="true" <?= $mata_acara['kelompok_cd'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="kelompok_ce" class="form-control form-table mx-auto" value="true" <?= $mata_acara['kelompok_ce'] ? 'checked' : "" ?>></td>
        <!-- Kelompok Kegiatan End -->
        <!-- Fokus Kegiatan Start -->
        <td><input type="checkbox" name="fokus_edu" class="form-control form-table mx-auto" value="true" <?= $mata_acara['fokus_edu'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="fokus_eco" class="form-control form-table mx-auto" value="true" <?= $mata_acara['fokus_eco'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="fokus_hql" class="form-control form-table mx-auto" value="true" <?= $mata_acara['fokus_hql'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="fokus_ie" class="form-control form-table mx-auto" value="true" <?= $mata_acara['fokus_ie'] ? 'checked' : "" ?>></td>
        <!-- Fokus Kegiatan End -->
        <!-- Platform Start -->
        <td><input type="checkbox" name="platform_rg" class="form-control form-table mx-auto" value="true" <?= $mata_acara['platform_rg'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="platform_dg" class="form-control form-table mx-auto" value="true" <?= $mata_acara['platform_dg'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="platform_hy" class="form-control form-table mx-auto" value="true" <?= $mata_acara['platform_hy'] ? 'checked' : "" ?>></td>
        <!-- Platform End -->
        <!-- 6 Literasi Dasar Start -->
        <td><input type="checkbox" name="literasi_bt" class="form-control form-table mx-auto" value="true" <?= $mata_acara['literasi_bt'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="literasi_nu" class="form-control form-table mx-auto" value="true" <?= $mata_acara['literasi_nu'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="literasi_sa" class="form-control form-table mx-auto" value="true" <?= $mata_acara['literasi_sa'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="literasi_di" class="form-control form-table mx-auto" value="true" <?= $mata_acara['literasi_di'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="literasi_fi" class="form-control form-table mx-auto" value="true" <?= $mata_acara['literasi_fi'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="literasi_bk" class="form-control form-table mx-auto" value="true" <?= $mata_acara['literasi_bk'] ? 'checked' : "" ?>></td>
        <!-- 6 Literasi Dasar End -->
        <!-- Inklusivitas Start -->
        <td><input type="checkbox" name="inklusivitas_ds" class="form-control form-table mx-auto" value="true" <?= $mata_acara['inklusivitas_ds'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="inklusivitas_mr" class="form-control form-table mx-auto" value="true" <?= $mata_acara['inklusivitas_mr'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="inklusivitas_gd" class="form-control form-table mx-auto" value="true" <?= $mata_acara['inklusivitas_gd'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="inklusivitas_3t" class="form-control form-table mx-auto" value="true" <?= $mata_acara['inklusivitas_3t'] ? 'checked' : "" ?>></td>
        <!-- Inklusivitas End -->
        <!-- SDGS Start -->
        <td><input type="checkbox" name="sdg_1" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_1'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_2" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_2'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_3" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_3'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_4" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_4'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_5" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_5'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_6" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_6'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_7" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_7'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_8" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_8'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_9" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_9'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_10" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_10'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_11" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_11'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_12" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_12'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_13" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_13'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_14" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_14'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_15" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_15'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_16" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_16'] ? 'checked' : "" ?>></td>
        <td><input type="checkbox" name="sdg_17" class="form-control form-table mx-auto" value="true" <?= $mata_acara['sdg_17'] ? 'checked' : "" ?>></td>
        <!-- SDGS End -->
      </tr>
    </form>
  <?php $no_mata_acara++;
  endforeach;  ?>
<?php endif; ?>
<!-- Start Looping -->