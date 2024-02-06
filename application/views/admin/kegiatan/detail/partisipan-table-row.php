<form action="<?= base_url() ?>admin/kegiatan/update_partisipan/<?= $choosed_kegiatan[0]['id'] ?>" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
  <tr>
    <th rowspan="5">Partisipan
      <span data-toggle="tooltip" data-placement="top" title="Simpan Partisipan"><button class="btn btn-xs btn-success"><i class="fas fa-check"></i></button></span>
    </th>
    <th colspan="4">Total</th>
    <th colspan="5">Kategori Peserta</th>
    <th colspan="5">Kategori Penampil</th>
    <th colspan="5">Kategori Fasilitator</th>
    <th colspan="6">Kategori Narasumber</th>
    <th colspan="6">Kategori Panitia</th>
    <th colspan="6">Kategori Laki Laki</th>
    <th colspan="6">Kategori Perempuan</th>
  </tr>
  <tr>
    <td rowspan="4">
      <textarea name="partisipan_total_huruf" rows="2" class="form-control" required><?= $choosed_kegiatan[0]['partisipan_total_huruf'] ?></textarea>
    </td>
    <td rowspan="4" colspan="3">
      <input type="text" class="form-control" name="partisipan_total_digit" required value="<?= $choosed_kegiatan[0]['partisipan_total_digit'] ?>">
    </td>
    <td colspan="5">
      <input type="text" class="form-control" name="partisipan_peserta" required value="<?= $choosed_kegiatan[0]['partisipan_peserta'] ?>">
    </td>
    <td colspan="5">
      <input type="text" class="form-control" name="partisipan_penampil" required value="<?= $choosed_kegiatan[0]['partisipan_penampil'] ?>">
    </td>
    <td colspan="5">
      <input type="text" class="form-control" name="partisipan_fasilitator" required value="<?= $choosed_kegiatan[0]['partisipan_fasilitator'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_narasumber" required value="<?= $choosed_kegiatan[0]['partisipan_narasumber'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_panitia" required value="<?= $choosed_kegiatan[0]['partisipan_panitia'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_laki" required value="<?= $choosed_kegiatan[0]['partisipan_laki'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_perempuan" required value="<?= $choosed_kegiatan[0]['partisipan_perempuan'] ?>">
    </td>
  </tr>
  <tr>
    <th colspan="5">Usia 00 - 06</th>
    <th colspan="5">Usia 07 - 12</th>
    <th colspan="5">Usia 13 - 17</th>
    <th colspan="6">Usia 18 - 30</th>
    <th colspan="6">Usia 31 - 40</th>
    <th colspan="6">Usia 41 - 60</th>
    <th colspan="6">Usia >60</th>
  </tr>
  <tr>
    <td colspan="5">
      <input type="text" class="form-control" name="partisipan_0_6" required value="<?= $choosed_kegiatan[0]['partisipan_0_6'] ?>">
    </td>
    <td colspan="5">
      <input type="text" class="form-control" name="partisipan_7_12" required value="<?= $choosed_kegiatan[0]['partisipan_7_12'] ?>">
    </td>
    <td colspan="5">
      <input type="text" class="form-control" name="partisipan_13_17" required value="<?= $choosed_kegiatan[0]['partisipan_13_17'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_18_30" required value="<?= $choosed_kegiatan[0]['partisipan_18_30'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_31_40" required value="<?= $choosed_kegiatan[0]['partisipan_31_40'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_41_60" required value="<?= $choosed_kegiatan[0]['partisipan_41_60'] ?>">
    </td>
    <td colspan="6">
      <input type="text" class="form-control" name="partisipan_60" required value="<?= $choosed_kegiatan[0]['partisipan_60'] ?>">
    </td>
  </tr>
</form>