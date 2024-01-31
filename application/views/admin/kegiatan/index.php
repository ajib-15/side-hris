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
          <form action="<?= base_url() ?>admin/kegiatan" id="xin-form" autocomplete="off" enctype="multipart/form-data" method="get" accept-charset="utf-8">
            <div class="form-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="kode_kegiatan">Kode Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="kode_kegiatan" class="form-control" placeholder="Kode Kegiatan" name="kode_kegiatan" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_kegiatan" class="control-label">Nama Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" name="nama_kegiatan" type="text" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tanggal_kegiatan">Tanggal Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="tanggal_kegiatan" class="form-control date" placeholder="Tanggal Kegiatan" name="tanggal_kegiatan" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tema_kegiatan">Tema Kegiatan<i class="hrsale-asterisk">*</i></label>
                        <input id="tema_kegiatan" class="form-control" placeholder="Tema Kegiatan" name="tema_kegiatan" type="text" required>
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
                        <label for="lokasi_digital_kegiatan">Lokasi Digital</label>
                        <input id="lokasi_digital_kegiatan" class="form-control" placeholder="Lokasi Digital" name="lokasi_digital_kegiatan" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="penanggung_jawab_kegiatan">Penanggung Jawab Kegiatan</label>
                        <input id="penanggung_jawab_kegiatan" class="form-control" placeholder="Penanggung Jawab Kegiatan" name="penanggung_jawab_kegiatan" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pendamping_kegiatan" class="control-label">Pendamping Kegiatan</label>
                        <input id="pendamping_kegiatan" class="form-control" placeholder="Pendamping Kegiatan" name="pendamping_kegiatan" type="text">
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
    <form action="<?= base_url() ?>admin/kegiatan" autocomplete="off" class="add form-hrm" method="get" accept-charset="utf-8">
      <div class="form-row">
        <div class="col-md mb-3">
          <label for="filter_tanggal_awal" class="form-label">Tanggal Awal</label>
          <input id="filter_tanggal_awal" class="form-control date" placeholder="Tanggal Awal" name="filter_tanggal_awal">
        </div>
        <div class="col-md mb-3">
          <label for="filter_tanggal_akhir" class="form-label">Tanggal Akhir</label>
          <input id="filter_tanggal_akhir" class="form-control date" placeholder="Tanggal Akhir" name="filter_tanggal_akhir">
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
  <div class="card-header with-elements"> <span class="card-header-title mr-2"><strong>Daftar Semua</strong> Kegiatan</span>
    <div class="card-header-elements ml-md-auto">
      <a href="<?= base_url() ?>" class="text-dark">
        <button type="button" class="btn btn-md btn-warning">
          <span class="fas fa-file-excel"></span>
          Download to Excel
        </button>
      </a>
      <a class="text-dark collapsed" data-toggle="collapse" href="#filter_hrsale" aria-expanded="false">
        <button type="button" class="btn btn-md btn-info">
          <span class="ion ion-ios-color-filter"></span>
          <?php echo $this->lang->line('xin_filter'); ?>
        </button>
      </a>
      <a href="<?= base_url() ?>" class="text-dark">
        <button type="button" class="btn btn-md btn-danger">
          <span class="ion ion-ios-trash"></span>
          Hapus
        </button>
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="box-datatable table-responsive">
      <table class="datatables-demo table table-striped table-bordered kegiatan_table">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">CH<input type="checkbox" name="checklist_kegiatan[]" id=""></th>
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
          <tr>
            <td>1</td>
            <td><input type="checkbox" name="checklist_kegiatan[]" id=""></td>
            <td>K000-91223</td>
            <td>9 December 2024</td>
            <td><a href="<?= base_url() ?>admin/kegiatan/detail/1">Produksi Video Pengetahuan Alam</a></td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <!-- Strategi Start -->
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <!-- Strategi End -->
            <!-- Kelompok Kegiatan Start -->
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <!-- Kelompok Kegiatan End -->
            <!-- Fokus Kegiatan Start -->
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <!-- Fokus Kegiatan End -->
            <!-- Platform Start -->
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <!-- Platform End -->
            <!-- 6 Literasi Dasar Start -->
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <!-- 6 Literasi Dasar End -->
            <!-- Inklusivitas Start -->
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <!-- Inklusivitas End -->
            <!-- SDGS Start -->
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>43</td>
            <td>44</td>
            <!-- SDGS End -->
          </tr>
          <tr>
            <td>2</td>
            <td><input type="checkbox" name="checklist_kegiatan[]" id=""></td>
            <td>K000-91223</td>
            <td>9 December 2024</td>
            <td><a href="<?= base_url() ?>admin/kegiatan/detail/1">Produksi Video Pengetahuan Alam</a></td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <!-- Strategi Start -->
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <!-- Strategi End -->
            <!-- Kelompok Kegiatan Start -->
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <!-- Kelompok Kegiatan End -->
            <!-- Fokus Kegiatan Start -->
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <!-- Fokus Kegiatan End -->
            <!-- Platform Start -->
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <!-- Platform End -->
            <!-- 6 Literasi Dasar Start -->
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <!-- 6 Literasi Dasar End -->
            <!-- Inklusivitas Start -->
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <!-- Inklusivitas End -->
            <!-- SDGS Start -->
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>43</td>
            <td>44</td>
            <!-- SDGS End -->
          </tr>
          <tr>
            <td>3</td>
            <td><input type="checkbox" name="checklist_kegiatan[]" id=""></td>
            <td>K000-91223</td>
            <td>9 December 2024</td>
            <td><a href="<?= base_url() ?>admin/kegiatan/detail/1">Produksi Video Pengetahuan Alam</a></td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <!-- Strategi Start -->
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <!-- Strategi End -->
            <!-- Kelompok Kegiatan Start -->
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <!-- Kelompok Kegiatan End -->
            <!-- Fokus Kegiatan Start -->
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <!-- Fokus Kegiatan End -->
            <!-- Platform Start -->
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <!-- Platform End -->
            <!-- 6 Literasi Dasar Start -->
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <!-- 6 Literasi Dasar End -->
            <!-- Inklusivitas Start -->
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <!-- Inklusivitas End -->
            <!-- SDGS Start -->
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>43</td>
            <td>44</td>
            <!-- SDGS End -->
          </tr>
          <tr class="invalid-kegiatan">
            <td>4</td>
            <td><input type="checkbox" name="checklist_kegiatan[]" id=""></td>
            <td>K000-91223</td>
            <td>9 December 2024</td>
            <td><a href="<?= base_url() ?>admin/kegiatan/detail/1">Produksi Video Pengetahuan Alam</a></td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <!-- Strategi Start -->
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <!-- Strategi End -->
            <!-- Kelompok Kegiatan Start -->
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <!-- Kelompok Kegiatan End -->
            <!-- Fokus Kegiatan Start -->
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <!-- Fokus Kegiatan End -->
            <!-- Platform Start -->
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <!-- Platform End -->
            <!-- 6 Literasi Dasar Start -->
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <!-- 6 Literasi Dasar End -->
            <!-- Inklusivitas Start -->
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <!-- Inklusivitas End -->
            <!-- SDGS Start -->
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>43</td>
            <td>44</td>
            <!-- SDGS End -->
          </tr>
          <tr>
            <td>4</td>
            <td><input type="checkbox" name="checklist_kegiatan[]" id=""></td>
            <td>K000-91223</td>
            <td>9 December 2024</td>
            <td><a href="<?= base_url() ?>admin/kegiatan/detail/1">Produksi Video Pengetahuan Alam</a></td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <!-- Strategi Start -->
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <!-- Strategi End -->
            <!-- Kelompok Kegiatan Start -->
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <!-- Kelompok Kegiatan End -->
            <!-- Fokus Kegiatan Start -->
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <!-- Fokus Kegiatan End -->
            <!-- Platform Start -->
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <!-- Platform End -->
            <!-- 6 Literasi Dasar Start -->
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <!-- 6 Literasi Dasar End -->
            <!-- Inklusivitas Start -->
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <!-- Inklusivitas End -->
            <!-- SDGS Start -->
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>43</td>
            <td>44</td>
            <!-- SDGS End -->
          </tr>
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
            <td>14</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>