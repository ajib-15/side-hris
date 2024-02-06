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
          <form action="<?= base_url() ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
            <input type="hidden" name="id_kegiatan" value="">
            <div class="modal-body">
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
<tr>
  <td colspan="2">
    <div class="d-flex flex-with-save">
      <span data-toggle="tooltip" data-placement="top" title="Simpan Baris Mata Acara Kegiatan Ini"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
      <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Mata Acara Kegiatan Ini"><button class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button></span>
      <textarea name="mata_acara" id="mata_acara" rows="2" class="form-control form-table" required>Perekaman video</textarea>
    </div>
  </td>
  <!-- Strategi Start -->
  <td><input type="checkbox" name="mata_acara_strategi_lit" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_strategi_dis" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_strategi_ine" class="form-control form-table mx-auto"></td>
  <!-- Strategi End -->
  <!-- Kelompok Kegiatan Start -->
  <td><input type="checkbox" name="mata_acara_kelompok_cs" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_kelompok_cr" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_kelompok_cd" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_kelompok_ce" class="form-control form-table mx-auto"></td>
  <!-- Kelompok Kegiatan End -->
  <!-- Fokus Kegiatan Start -->
  <td><input type="checkbox" name="mata_acara_fokus_edu" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_fokus_eco" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_fokus_hql" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_fokus_ie" class="form-control form-table mx-auto"></td>
  <!-- Fokus Kegiatan End -->
  <!-- Platform Start -->
  <td><input type="checkbox" name="mata_acara_platform_rg" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_platform_dg" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_platform_hy" class="form-control form-table mx-auto"></td>
  <!-- Platform End -->
  <!-- 6 Literasi Dasar Start -->
  <td><input type="checkbox" name="mata_acara_literasi_bt" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_literasi_nu" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_literasi_sa" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_literasi_di" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_literasi_fi" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_literasi_bk" class="form-control form-table mx-auto"></td>
  <!-- 6 Literasi Dasar End -->
  <!-- Inklusivitas Start -->
  <td><input type="checkbox" name="mata_acara_inklusivitas_ds" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_inklusivitas_mr" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_inklusivitas_gd" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_inklusivitas_3t" class="form-control form-table mx-auto"></td>
  <!-- Inklusivitas End -->
  <!-- SDGS Start -->
  <td><input type="checkbox" name="mata_acara_sdgs_1" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_2" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_3" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_4" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_5" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_6" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_7" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_8" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_9" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_10" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_11" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_12" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_13" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_14" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_15" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_16" class="form-control form-table mx-auto"></td>
  <td><input type="checkbox" name="mata_acara_sdgs_17" class="form-control form-table mx-auto"></td>
  <!-- SDGS End -->
</tr>
<!-- Start Looping -->