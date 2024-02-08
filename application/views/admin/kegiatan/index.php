<?php
$session = $this->session->userdata('username');
$user_info = $this->Xin_model->read_user_info($session['user_id']);
$theme = $this->Xin_model->read_theme_info(1);
?>
<?php
// if ($user_info[0]->user_role_id == 1) :
// if ($theme[0]->dashboard_option == 'dashboard_1') {
//   $this->load->view('admin/dashboard/administrator_dashboard_1');
// } else if ($theme[0]->dashboard_option == 'dashboard_2') {
//   $this->load->view('admin/dashboard/administrator_dashboard_2');
// } else if ($theme[0]->dashboard_option == 'dashboard_3') {
//   $this->load->view('admin/dashboard/administrator_dashboard_3');
// } else if ($theme[0]->dashboard_option == 'dashboard_4') {
//   $this->load->view('admin/dashboard/administrator_dashboard_4');
// } else {
//   $this->load->view('admin/dashboard/administrator_dashboard_1');
// }
/*elseif($user_info[0]->user_role_id==3):
	$this->load->view('admin/dashboard/management_dashboard');*/
// else :
// $this->load->view('admin/dashboard/employee_dashboard');
// endif; 
?>
<style>
  th,
  td {
    text-align: center;
  }

  .invalid-kegiatan {
    background-color: #ffd9d9 !important;
  }
</style>
<div class="card mb-4">
  <div id="accordion">
    <div class="card-header with-elements"> <span class="card-header-title mr-2"><strong>Tambah Baru</strong> Kegiatan</span>
      <div class="card-header-elements ml-md-auto">
        <a class="text-dark collapsed" data-toggle="collapse" href="#add_form" aria-expanded="false">
          <button type="button" class="btn btn-md btn-primary"> <span class="ion ion-md-add"></span> <?php echo $this->lang->line('xin_add_new'); ?></button>
        </a>
      </div>
      <div id="add_form" class="collapse add-form animated fadeInRight" data-parent="#accordion" style="width: 100%;">
        <div class="card-body">
          <form action="<?= base_url() ?>admin/kegiatan/add_kegiatan" autocomplete="off" enctype="multipart/form-data" method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="form-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="kode">Kode Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="kode" class="form-control" placeholder="Kode Kegiatan" name="kode" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama" class="control-label">Nama Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="nama" class="form-control" placeholder="Nama Kegiatan" name="nama" type="text" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tanggal">Tanggal Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="tanggal" class="form-control date" placeholder="Tanggal Kegiatan" name="tanggal" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tema">Tema Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="tema" class="form-control" placeholder="Tema Kegiatan" name="tema" type="text" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lokasi_kegiatan">Lokasi Kegiatan</label>
                        <input id="lokasi_kegiatan" class="form-control" placeholder="Lokasi Kegiatan" name="lokasi_kegiatan" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lokasi_digital">Lokasi Digital</label>
                        <input id="lokasi_digital" class="form-control" placeholder="Lokasi Digital" name="lokasi_digital" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="penanggung_jawab">Penanggung Jawab Kegiatan</label>
                        <input id="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab Kegiatan" name="penanggung_jawab" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pendamping" class="control-label">Pendamping Kegiatan</label>
                        <input id="pendamping" class="form-control" placeholder="Pendamping Kegiatan" name="pendamping" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-actions box-footer">
              <button name="hrsale_form" type="submit" class="btn btn-primary ladda-button" data-style="expand-right">
                <span class="ladda-label"><i class="fas fa-check-square"></i> Simpan</span><span class="ladda-spinner"></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="filter_hrsale" class="collapse add-formd animated fadeInRight" data-parent="#accordion">
  <div class="ui-bordered px-4 pt-4 mb-4 mt-3">
    <form action="<?= base_url() ?>admin/kegiatan" autocomplete="off" class="add form-hrm" method="post" accept-charset="utf-8">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <input type="hidden" name="filter" value="true">
      <div class="form-row">
        <div class="col-md mb-3">
          <label for="filter_tanggal_awal" class="form-label">Tanggal Awal</label>
          <input id="filter_tanggal_awal" class="form-control date" placeholder="Tanggal Awal" name="filter_tanggal_awal" value="<?= $start_date ? $start_date : '' ?>" required>
        </div>
        <div class="col-md mb-3">
          <label for="filter_tanggal_akhir" class="form-label">Tanggal Akhir</label>
          <input id="filter_tanggal_akhir" class="form-control date" placeholder="Tanggal Akhir" name="filter_tanggal_akhir" value="<?= $end_date ? $end_date : '' ?>" required>
        </div>
        <div class="col-md col-xl-2 d-flex align-items-center">
          <button type="submit" class="btn btn-secondary btn-block ladda-button" data-style="expand-right">
            <span class="ladda-label"><i class="fas fa-check-square"></i> Filter</span><span class="ladda-spinner"></span>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-header with-elements"> <span class="card-header-title mr-2"><strong>Daftar Semua</strong> Kegiatan
      <br>
      <?php if ($start_date) : ?>
        <span><strong>Periode:</strong> <?= $start_date ?> - <?= $end_date ?></span>
        <span><a href="<?= base_url() ?>admin/kegiatan"><i class="fas fa-retweet"></i></a></span>
      <?php endif; ?>
      <input type="hidden" name="hidden_start_date" id="hidden_start_date" value=" <?= $start_date ?>">
      <input type="hidden" name="hidden_end_date" id="hidden_end_date" value=" <?= $end_date ?>">
    </span>
    <div class="card-header-elements ml-md-auto">
      <div class="text-dark">
        <button type="button" class="btn btn-md btn-warning print-btn">
          <span class="fas fa-file-excel"></span>
          Download to Excel
        </button>
      </div>
      <a class="text-dark collapsed" data-toggle="collapse" href="#filter_hrsale" aria-expanded="false">
        <button type="button" class="btn btn-md btn-info">
          <span class="ion ion-ios-color-filter"></span>
          <?php echo $this->lang->line('xin_filter'); ?>
        </button>
      </a>
      <div class="text-dark">
        <button type="button" class="btn btn-md btn-danger delete-btn">
          <span class="ion ion-ios-trash"></span>
          Hapus
        </button>
      </div>
    </div>
  </div>
  <!-- Add this hidden input field to store selected checkbox values -->
  <input type="hidden" id="selectedCheckboxes" name="selectedCheckboxes">

  <div class="card-body">
    <div class="box-datatable table-responsive">
      <table class="datatables-demo table table-striped table-bordered kegiatan_table">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">CH<input type="checkbox" id="selectAllCheckBox"></th>
            <th rowspan="2">Kode Kegiatan</th>
            <th rowspan="2">Tanggal</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Durasi (JAM)</th>
            <th rowspan="2">Luring</th>
            <th rowspan="2">Daring</th>
            <th colspan="3">Strategi</th>
            <th colspan="4">Kelompok Kegiatan</th>
            <th colspan="4">Fokus Kegiatan</th>
            <th colspan="3">Platform</th>
            <th colspan="6">6 Literasi Dasar</th>
            <th colspan="4">Inklusivitas</th>
            <th colspan="17">Sustainable Development Goals (SDGs)</th>
          </tr>
          <tr>
            <!-- Strategi Start -->
            <td><span data-toggle="tooltip" data-placement="top" title="Strategi Literasi">LIT</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Strategi Diseminasi">DIS</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Strategi Institutiona Engagement">INE</span></td>
            <!-- Strategi End -->
            <!-- Kelompok Kegiatan Start -->
            <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Services">CS</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Representative">CR</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Development">CD</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Kelompok Community Empowerment">CE</span></td>
            <!-- Kelompok Kegiatan End -->
            <!-- Fokus Kegiatan Start -->
            <td><span data-toggle="tooltip" data-placement="top" title="Fokus Peningkatan Kualitas Pendidikan di Masyarakat">EDU</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Fokus Pemberdayaan Ekonomi Masyarakat">ECO</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Fokus Peningkatan Kesehatan dan Kualitas Hidup">HQL</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Fokus Penguatan Kelembagaan di Masyarakat">IE</span></td>
            <!-- Fokus Kegiatan Start -->
            <!-- Platform Start -->
            <td><span data-toggle="tooltip" data-placement="top" title="Platform Ragawi">RG</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Platform Digital">DG</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Platform Hybrid">HY</span></td>
            <!-- Platform End -->
            <!-- 6 Literasi Dasar Start -->
            <td><span data-toggle="tooltip" data-placement="top" title="Literasi Baca dan Tulis">BT</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Literasi Numerasi">NU</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Literasi Sains">SA</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Literasi Digital">DI</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Literasi Finansial">FI</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Literasi Budaya dan Kewargaan">BK</span></td>
            <!-- 6 Literasi Dasar End -->
            <!-- Inklusivitas Start -->
            <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Down Syndrome">DS</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Marginal">MR</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas Grand Design">GD</span></td>
            <td><span data-toggle="tooltip" data-placement="top" title="Inklusivitas 3T (Terdepan, Terluar dan Tertinggal)">3T</span></td>
            <!-- Inklusivitas End -->
            <!-- SDGS Start -->
            <td>#1</td>
            <td>#2</td>
            <td>#3</td>
            <td>#4</td>
            <td>#5</td>
            <td>#6</td>
            <td>#7</td>
            <td>#8</td>
            <td>#9</td>
            <td>#10</td>
            <td>#11</td>
            <td>#12</td>
            <td>#13</td>
            <td>#14</td>
            <td>#15</td>
            <td>#16</td>
            <td>#17</td>
            <!-- SDGS End -->
          </tr>
        </thead>
        <tbody>
          <?php if ($kegiatan) : ?>
            <?php $no = 1;
            foreach ($kegiatan as $item) : ?>
              <tr class="<?= ($item['validitas'] === 'invalid') ? 'invalid-kegiatan' : '' ?>">
                <td><?= $no ?></td>
                <td><input class="checkbox" type="checkbox" name="checklist_kegiatan[]" id="" data-id="<?= $item['id'] ?>"></td>
                <td><?= $item['kode'] ?></td>
                <td><?= $item['tanggal'] ?></td>
                <td><a href="<?= base_url() ?>admin/kegiatan/detail/<?= $item['id'] ?>"><?= $item['nama'] ?></a></td>
                <td><?= $item['ht_digit_jam'] ? $item['ht_digit_jam'] . ' Jam' : '-' ?> <?= $item['ht_digit_menit'] ?  ' & ' . $item['ht_digit_menit'] . ' Menit' : '' ?></td>
                <td><?= $item['luring'] ?></td>
                <td><?= $item['daring'] ?></td>
                <!-- Strategi Start -->
                <td><?= $item['strategi_lit'] ?></td>
                <td><?= $item['strategi_dis'] ?></td>
                <td><?= $item['strategi_ine'] ?></td>
                <!-- Strategi End -->
                <!-- Kelompok Kegiatan Start -->
                <td><?= $item['kelompok_cs'] ?></td>
                <td><?= $item['kelompok_cr'] ?></td>
                <td><?= $item['kelompok_cd'] ?></td>
                <td><?= $item['kelompok_ce'] ?></td>
                <!-- Kelompok Kegiatan End -->
                <!-- Fokus Kegiatan Start -->
                <td><?= $item['fokus_edu'] ?></td>
                <td><?= $item['fokus_eco'] ?></td>
                <td><?= $item['fokus_hql'] ?></td>
                <td><?= $item['fokus_ie'] ?></td>
                <!-- Fokus Kegiatan End -->
                <!-- Platform Start -->
                <td><?= $item['platform_rg'] ?></td>
                <td><?= $item['platform_dg'] ?></td>
                <td><?= $item['platform_hy'] ?></td>
                <!-- Platform End -->
                <!-- 6 Literasi Dasar Start -->
                <td><?= $item['literasi_bt'] ?></td>
                <td><?= $item['literasi_nu'] ?></td>
                <td><?= $item['literasi_sa'] ?></td>
                <td><?= $item['literasi_di'] ?></td>
                <td><?= $item['literasi_fi'] ?></td>
                <td><?= $item['literasi_bk'] ?></td>
                <!-- 6 Literasi Dasar End -->
                <!-- Inklusivitas Start -->
                <td><?= $item['inklusivitas_ds'] ?></td>
                <td><?= $item['inklusivitas_mr'] ?></td>
                <td><?= $item['inklusivitas_gd'] ?></td>
                <td><?= $item['inklusivitas_3t'] ?></td>
                <!-- Inklusivitas End -->
                <!-- SDGS Start -->
                <td><?= $item['sdg_1'] ?></td>
                <td><?= $item['sdg_2'] ?></td>
                <td><?= $item['sdg_3'] ?></td>
                <td><?= $item['sdg_4'] ?></td>
                <td><?= $item['sdg_5'] ?></td>
                <td><?= $item['sdg_6'] ?></td>
                <td><?= $item['sdg_7'] ?></td>
                <td><?= $item['sdg_8'] ?></td>
                <td><?= $item['sdg_9'] ?></td>
                <td><?= $item['sdg_10'] ?></td>
                <td><?= $item['sdg_11'] ?></td>
                <td><?= $item['sdg_12'] ?></td>
                <td><?= $item['sdg_13'] ?></td>
                <td><?= $item['sdg_14'] ?></td>
                <td><?= $item['sdg_15'] ?></td>
                <td><?= $item['sdg_16'] ?></td>
                <td><?= $item['sdg_17'] ?></td>
                <!-- SDGS End -->
              </tr>
            <?php $no++;
            endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<hr>
<div class="card">
  <div class="card-header with-elements"> <span class="card-header-title mr-2"><strong>Total Peserta</strong> Kegiatan</span></div>
  <div class="card-body">
    <div class="box-datatable table-responsive">
      <table class="datatables-demo table table-striped table-bordered">
        <thead>
          <tr>
            <th rowspan="2">JUMLAH PARTISIPAN</th>
            <th colspan="5">PERAN</th>
            <th colspan="2">JENIS KELAMIN</th>
            <th colspan="7">USIA</th>
          </tr>
          <tr>
            <th>PESERTA</th>
            <th>PENAMPIL</th>
            <th>FASILITATOR</th>
            <th>NARASUMBER</th>
            <th>PANITIA</th>
            <th>LAKI-LAKI</th>
            <th>PEREMPUAN</th>
            <th>0-6 th</th>
            <th>7-12 th</th>
            <th>13-17 th</th>
            <th>18-30 th</th>
            <th>31-40 th</th>
            <th>41-60 th</th>
            <th> > 60 th</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $partisipan ? $partisipan['total'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_peserta'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_penampil'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_fasilitator'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_narasumber'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_panitia'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_laki'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_perempuan'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_0_6'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_7_12'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_13_17'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_18_30'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_31_40'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_41_60'] : '-' ?></td>

            <td><?= $partisipan ? $partisipan['partisipan_60'] : '-' ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  var selectAllCheckbox = document.getElementById('selectAllCheckBox');
  var checkboxes = document.querySelectorAll('.checkbox');
  var deleteButton = document.querySelector('.delete-btn');
  var printButton = document.querySelector('.print-btn');

  selectAllCheckbox.addEventListener('click', function() {
    checkboxes.forEach(function(checkbox) {
      checkbox.checked = selectAllCheckbox.checked;
    });

    updateSelectedCheckboxes();
  });

  checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
      updateSelectedCheckboxes();
    });
  });

  deleteButton.addEventListener('click', function() {
    // Get the selected checkbox values
    var selectedCheckboxValues = getSelectedCheckboxValues();

    // Check if there are selected checkboxes
    if (selectedCheckboxValues.length === 0) {
      alert('Please select at least one checkbox before deleting.');
      return;
    }

    // Create a form element dynamically
    var form = document.createElement('form');
    form.action = '<?= base_url() ?>admin/kegiatan/delete'; // Replace with your actual delete endpoint
    form.method = 'post';

    // Create a hidden input for CSRF token
    var csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

    // Append the CSRF input to the form
    form.appendChild(csrfInput);

    // Create a hidden input for selected checkbox values
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'selectedCheckboxes';
    input.value = selectedCheckboxValues.join(',');

    // Append the hidden input to the form
    form.appendChild(input);

    // Append the form to the document body
    document.body.appendChild(form);

    // Submit the form
    form.submit();
  });

  printButton.addEventListener('click', function() {
    // Get the selected checkbox values
    var selectedCheckboxValues = getSelectedCheckboxValues();

    // Check if there are selected checkboxes
    if (selectedCheckboxValues.length === 0) {
      alert('Please select at least one checkbox before printing.');
      return;
    }

    // Create a form element dynamically
    var form = document.createElement('form');
    form.action = '<?= base_url() ?>admin/kegiatan/print'; // Replace with your actual delete endpoint
    form.method = 'post';

    // Create a hidden input for CSRF token
    var csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfInput.value = '<?php echo $this->security->get_csrf_hash(); ?>';

    // Append the CSRF input to the form
    form.appendChild(csrfInput);

    // Create a hidden input for selected checkbox values
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'selectedCheckboxes';
    input.value = selectedCheckboxValues.join(',');

    var hidden_start_date = document.createElement('input');
    hidden_start_date.type = 'hidden';
    hidden_start_date.name = 'hidden_start_date';
    hidden_start_date.value = document.getElementById('hidden_start_date').value;

    var hidden_end_date = document.createElement('input');
    hidden_end_date.type = 'hidden';
    hidden_end_date.name = 'hidden_end_date';
    hidden_end_date.value = document.getElementById('hidden_end_date').value;

    // Append the hidden input to the form
    form.appendChild(input);
    form.appendChild(hidden_start_date);
    form.appendChild(hidden_end_date);

    // Append the form to the document body
    document.body.appendChild(form);

    // Submit the form
    form.submit();
  });

  // Function to update the hidden input with selected checkbox values
  function updateSelectedCheckboxes() {
    var selectedValues = [];
    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        selectedValues.push(checkbox.dataset.id);
      }
    });

    document.getElementById('selectedCheckboxes').value = selectedValues.join(',');
  }

  // Function to get an array of selected checkbox values
  function getSelectedCheckboxValues() {
    return document.getElementById('selectedCheckboxes').value.split(',').filter(value => value !== '');
  }
</script>