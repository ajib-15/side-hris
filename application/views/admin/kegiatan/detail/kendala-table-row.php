<tr>
  <th colspan="43">Kendala Kegiatan
    <span data-toggle="tooltip" data-placement="top" title="Tambah Kendala Kegiatan"><button class="btn btn-xs btn-primary" data-toggle="modal" data-target=".add-modal-kendala"><i class="fas fa-plus"></i></button></span>
    <!-- Modal Add Kendala -->
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
              <label for="keterangan_tujuan">Kendala Kegiatan</label>
              <textarea class="form-control" name="kendala_kegiatan" id="kendala_kegiatan" cols="30" rows="10" required></textarea>
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
</tr>
<?php if (count($kegiatan["kendala"]) > 0) : ?>
  <?php $no_kendala = 1;
  foreach ($kegiatan["kendala"] as $kendala) : ?>
    <tr>
      <td colspan="43">
        <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Kendala Kegiatan Ini">
          <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_kendala/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kendala['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a></span>
        <?= $no_kendala ?>. <?= $kendala['keterangan'] ?>
      </td>
    </tr>
  <?php $no_kendala++;
  endforeach;  ?>
<?php endif; ?>