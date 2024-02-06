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
          <form action="<?= base_url() ?>admin/kegiatan/add_kolaborator/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="modal-body">
              <label for="perbaikan_kegiatan">Nama Kolaborator</label>
              <textarea class="form-control" name="nama_kolaborator" id="nama_kolaborator" cols="30" rows="10" required></textarea>
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

<?php if (count($kegiatan["kolaborator"]) > 0) : ?>
  <?php $no_kolaborator = 1;
  foreach ($kegiatan["kolaborator"] as $kolaborator) : ?>
    <tr>
      <td>
        <span data-toggle="tooltip" data-placement="top" title="Hapus Baris Kolaborator dan/atau Mitra Ini">
          <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url() ?>admin/kegiatan/delete_kolaborator/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kolaborator['id'] ?>" class="btn btn-xs btn-danger mr-3"><i class="fas fa-trash"></i></a></span>
      </td>
      <td colspan="20"><?= $kolaborator['nama_kolaborator'] ?></td>
      <td colspan="5">
        <form class="sektorPertamaForm" action="<?= base_url() ?>admin/kegiatan/update_sektor_pertama/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kolaborator['id'] ?>" method="post" autocomplete="off">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <input type="checkbox" name="sektor_pertama" class="form-control form-table mx-auto sektorPertamaCheckbox" value="true" <?= $kolaborator['sektor_pertama'] ? 'checked' : "" ?>>
        </form>
      </td>
      <td colspan="5">
        <form class="sektorDuaForm" action="<?= base_url() ?>admin/kegiatan/update_sektor_dua/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kolaborator['id'] ?>" method="post" autocomplete="off">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <input type="checkbox" name="sektor_dua" class="form-control form-table mx-auto sektorDuaCheckbox" value="true" <?= $kolaborator['sektor_dua'] ? 'checked' : "" ?>>
        </form>
      </td>
      <td colspan="4">
        <form class="sektorTigaForm" action="<?= base_url() ?>admin/kegiatan/update_sektor_tiga/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kolaborator['id'] ?>" method="post" autocomplete="off">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <input type="checkbox" name="sektor_tiga" class="form-control form-table mx-auto sektorTigaCheckbox" value="true" <?= $kolaborator['sektor_tiga'] ? 'checked' : "" ?>>
        </form>
      </td>
      <td colspan="4">
        <form class="mitraBaruForm" action="<?= base_url() ?>admin/kegiatan/update_mitra_baru/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kolaborator['id'] ?>" method="post" autocomplete="off">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <input type="checkbox" name="mitra_baru" class="form-control form-table mx-auto mitraBaruCheckbox" value="true" <?= $kolaborator['mitra_baru'] ? 'checked' : "" ?>>
        </form>
      </td>
      <td colspan="4">
        <form class="sudahKerjaSamaForm" action="<?= base_url() ?>admin/kegiatan/update_sudah_kerja_sama/<?= $choosed_kegiatan[0]['id'] ?>/<?= $kolaborator['id'] ?>" method="post" autocomplete="off">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <input type="checkbox" name="sudah_kerja_sama" class="form-control form-table mx-auto sudahKerjaSamaCheckbox" value="true" <?= $kolaborator['sudah_kerja_sama'] ? 'checked' : "" ?>>
        </form>
      </td>
    </tr>
  <?php $no_kolaborator++;
  endforeach;  ?>
<?php endif; ?>


<script>
  const sektorPertamaCheckbox = document.querySelectorAll('.sektorPertamaCheckbox');
  sektorPertamaCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.sektorPertamaForm');
      form.submit();
    });
  });

  const sektorDuaCheckbox = document.querySelectorAll('.sektorDuaCheckbox');
  sektorDuaCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.sektorDuaForm');
      form.submit();
    });
  });

  const sektorTigaCheckbox = document.querySelectorAll('.sektorTigaCheckbox');
  sektorTigaCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.sektorTigaForm');
      form.submit();
    });
  });

  const mitraBaruCheckbox = document.querySelectorAll('.mitraBaruCheckbox');
  mitraBaruCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.mitraBaruForm');
      form.submit();
    });
  });

  const sudahKerjaSamaCheckbox = document.querySelectorAll('.sudahKerjaSamaCheckbox');
  sudahKerjaSamaCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const form = checkbox.closest('.sudahKerjaSamaForm');
      form.submit();
    });
  });
</script>