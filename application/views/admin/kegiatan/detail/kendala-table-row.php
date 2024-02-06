<tr>
  <th rowspan="2">Kendala Kegiatan
    <span data-toggle="tooltip" data-placement="top" title="Tambah Kendala Kegiatan"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-kendala"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Kendala -->
    <div class="modal fadeInRight add-modal-kendala animated" role="dialog" aria-labelledby="add-modal-kendala" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Kendala Kegiatan</h4>
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
    <!-- Modal Add Kendala -->
  </th> <!-- rowspan dinamis -->
  <td colspan="42">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Kendala Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Susah Diatur
  </td>
</tr>
<tr>
  <td colspan="42">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Kendala Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Gak Ada
  </td>
</tr>