<tr>
  <th colspan="43">Kolaborator dan/atau Mitra
    <span data-toggle="tooltip" data-placement="top" title="Tambah Kolaborator dan/atau Mitra"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-kolaborator"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Kolaborator -->
    <div class="modal fadeInRight add-modal-kolaborator animated" role="dialog" aria-labelledby="add-modal-kolaborator" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Kolaborator dan/atau Mitra</h4>
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
    <!-- Modal Add Kolaborator -->
  </th> <!-- rowspan dinamis -->
</tr>
<tr>
  <th>Aksi</th>
  <th colspan="20">Nama Kolaborator dan/atau Mitra</th>
  <th colspan="5">Sektor Pertama</th>
  <th colspan="5">Sektor Kedua</th>
  <th colspan="4">Sektor Ketiga</th>
  <th colspan="4">New</th>
  <th colspan="4">MoU</th>
</tr>
<tr>
  <td>
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Kolaborator dan/atau Mitra Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>
  </td>
  <td colspan="20">TBM Rumah Cahaya Untukmu</td>
  <td colspan="5"><input type="checkbox" name="kolaborator_s1" class="form-control form-table mx-auto"></td>
  <td colspan="5"><input type="checkbox" name="kolaborator_s2" class="form-control form-table mx-auto"></td>
  <td colspan="4"><input type="checkbox" name="kolaborator_s3" class="form-control form-table mx-auto"></td>
  <td colspan="4"><input type="checkbox" name="kolaborator_new" class="form-control form-table mx-auto"></td>
  <td colspan="4"><input type="checkbox" name="kolaborator_mou" class="form-control form-table mx-auto"></td>
</tr>