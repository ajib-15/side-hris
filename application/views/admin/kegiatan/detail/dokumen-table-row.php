<!-- Start Looping -->
<tr style="background: ghostwhite;">
  <th colspan="2">Dokumen & Link File
    <span data-toggle="tooltip" data-placement="top" title="Tambah Dokumen"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-dokumen"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Dokumen -->
    <div class="modal fadeInRight add-modal-dokumen animated" role="dialog" aria-labelledby="add-modal-dokumen" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> Form Tambah Dokumen</h4>
          </div>
          <form action="<?= base_url() ?>admin/kegiatan/add_dokumen/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="nama_dokumen">Nama Dokumen</label>
                <textarea class="form-control" name="nama_dokumen" id="nama_dokumen" cols="30" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label for="link_file">Link File</label>
                <textarea class="form-control" name="link_file" id="link_file" cols="30" rows="3"></textarea>
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
    <!-- Modal Add Dokumen -->
  </th> <!-- rowspan dinamis -->
  <th colspan="20" class="text-center">Daftar Dokumen</th>
  <th colspan="2">CheckList</th>
  <th colspan="21" class="text-center">Tautan Dokumen Digital</th>
</tr>

<?php if (count($kegiatan["dokumen"]) > 0) : ?>
  <?php $no_dokumen = 1;
  foreach ($kegiatan["dokumen"] as $dokumen) : ?>
    <tr>
      <td colspan="22">
        <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Tujuan Kegiatan Ini">
          <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_dokumen/<?= $choosed_kegiatan[0]['id'] ?>/<?= $dokumen['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a>
        </span>
        <?= $no_dokumen ?>. <?= $dokumen['keterangan'] ?>
      </td>
      <td colspan="2">
        <form class="flagForm" action="<?= base_url() ?>admin/kegiatan/update_flag_dokumen/<?= $choosed_kegiatan[0]['id'] ?>/<?= $dokumen['id'] ?>" method="post" autocomplete="off">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <input type="checkbox" name="flag" class="form-control form-table mx-auto flagCheckbox" value="true" <?= $dokumen['flag'] ? 'checked' : "" ?>>
        </form>
      </td>
      <td colspan="22">
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

<script>
  const flagCheckboxes = document.querySelectorAll('.flagCheckbox');
  flagCheckboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.flagForm');
      form.submit();
    });
  });
</script>