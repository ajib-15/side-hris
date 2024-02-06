<tr>
  <th colspan="43">Perbaikan Selanjutnya
    <span data-toggle="tooltip" data-placement="top" title="Tambah Perbaikan Selanjutnya"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-perbaikan"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Perbaikan -->
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
              <label for="perbaikan_kegiatan">Perbaikan Selanjutnya Kegiatan</label>
              <textarea class="form-control" name="perbaikan_kegiatan" id="perbaikan_kegiatan" cols="30" rows="10" required></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success save ladda-button" data-style="expand-right"><span class="ladda-label">Tambah</span><span class="ladda-spinner"></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Add Perbaikan -->
  </th> <!-- rowspan dinamis -->
</tr>
<?php if (count($kegiatan["perbaikan"]) > 0) : ?>
  <?php $no_perbaikan = 1;
  foreach ($kegiatan["perbaikan"] as $perbaikan) : ?>
    <tr>
      <td colspan="43">
        <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Perbaikan Selanjutnya Ini">
          <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_perbaikan/<?= $choosed_kegiatan[0]['id'] ?>/<?= $perbaikan['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a></span>
        <?= $no_perbaikan ?>. <?= $perbaikan['keterangan'] ?>
      </td>
    </tr>
  <?php $no_perbaikan++;
  endforeach;  ?>
<?php endif; ?>