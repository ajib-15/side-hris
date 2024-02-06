<!-- Start Looping -->
<tr>
  <th rowspan="8">Dokumen & Link File
    <span data-toggle="tooltip" data-placement="top" title="Tambah Dokumen"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-dokumen"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Dokumen -->
    <div class="modal fadeInRight add-modal-dokumen animated" role="dialog" aria-labelledby="add-modal-dokumen" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Dokumen</h4>
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
    <!-- Modal Add Dokumen -->
  </th> <!-- rowspan dinamis -->
  <th colspan="20" class="text-center">Daftar Dokumen</th>
  <th>CheckList</th>
  <th colspan="21" class="text-center">Tautan Dokumen Digital</th>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Term of Reference (ToR)/ Gambaran Kegiatan/ Deskripsi Kegiatan
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21">
    <div class="d-flex" style="align-items: center;gap:10px;"><a href="#">Link File</a></div>
  </td>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Proposal Kegiatan
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21"><a href="#">Link File</a>
  </td>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Surat Undangan, Surat Permohonan, Surat Peminjaman
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21">
    <a href="#">Link File</a>
  </td>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Poster, Banner, Announcement Text, Other Promotional Tools
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21">
    <a href="#">Link File</a>
  </td>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Registrasi Peserta
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21">
    NULL
  </td>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Registrasi Peserta
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21">
    NULL
  </td>
</tr>
<tr>
  <td colspan="20">
    <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini"><button class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></button></span>Presensi Peserta dan Panitia
  </td>
  <td><input type="checkbox" name="status_dokumen" class="form-control form-table mx-auto"></td>
  <td colspan="21">
    NULL
  </td>
</tr>
<!-- End Looping -->