<?php
$session = $this->session->userdata('username');
$system = $this->Xin_model->read_setting_info(1);
$company_info = $this->Xin_model->read_company_setting_info(1);
$layout = $this->Xin_model->system_layout();
$user_info = $this->Xin_model->read_user_info($session['user_id']);
//material-design
$theme = $this->Xin_model->read_theme_info(1);
// set layout / fixed or static
if ($user_info[0]->fixed_header == 'fixed_layout_hrsale') {
  $fixed_header = 'fixed';
} else {
  $fixed_header = '';
}
if ($user_info[0]->boxed_wrapper == 'boxed_layout_hrsale') {
  $boxed_wrapper = 'layout-boxed';
} else {
  $boxed_wrapper = '';
}
if ($user_info[0]->compact_sidebar == 'sidebar_layout_hrsale') {
  $compact_sidebar = 'sidebar-collapse';
} else {
  $compact_sidebar = '';
}
/*
if($this->router->fetch_class() =='chat'){
	$chat_app = 'chat-application';
} else {
	$chat_app = '';
}*/
$role_user = $this->Xin_model->read_user_role_info($user_info[0]->user_role_id);
if (!is_null($role_user)) {
  $role_resources_ids = explode(',', $role_user[0]->role_resources);
} else {
  $role_resources_ids = explode(',', 0);
}
?>
<?php $this->load->view('admin/components/htmlheader'); ?>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout sidenav -->
      <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

        <!-- Brand demo -->
        <div class="app-brand demo">
          <span class="app-brand-logo demo bg-primary">
            <img alt="<?php echo $system[0]->application_name; ?>" src="<?php echo base_url(); ?>uploads/logo/<?php echo $company_info[0]->logo; ?>" class="brand-logo" style="width:32px;">
          </span>
          <a href="<?php echo site_url('admin/dashboard'); ?>" class="app-brand-text demo sidenav-text font-weight-normal ml-2"><?php echo $system[0]->application_name; ?></a>
          <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
          </a>
        </div>

        <div class="sidenav-divider mt-0"></div>

        <!-- Links -->
        <?php $this->load->view('admin/components/left_menu'); ?>
      </div>
      <!-- / Layout sidenav -->

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
        <?php $this->load->view('admin/components/header'); ?>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

          <!-- Content -->
          <?php if ($this->router->fetch_class() != 'chat') { ?>
            <?php $val_container = 'container-fluid flex-grow-1 container-p-y'; ?>
          <?php } else { ?>
            <?php $val_container = 'container-fluid d-flex align-items-stretch flex-grow-1 p-0'; ?>
          <?php } ?>
          <div class="<?php echo $val_container; ?>">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <?php if ($this->router->fetch_class() != 'dashboard' && $this->router->fetch_class() != 'chat' && $this->router->fetch_method() != 'view_all') { ?>
                <div>
                  <h4 class="font-weight-bold mt-3"><?php echo $breadcrumbs; ?></h4>
                </div>

                <a href="<?php echo site_url('admin/logout'); ?>">
                  <button class="btn btn-lg btn-default">
                    <i class="ion ion-md-power text-danger"></i>&nbsp;
                    <?php echo $this->lang->line('header_sign_out'); ?>
                  </button>
                </a>
              <?php } ?>
            </div>
            <?php if ($this->router->fetch_class() != 'dashboard' && $this->router->fetch_class() != 'chat' && $this->router->fetch_class() != 'calendar') { ?>
              <?php /*?><h4 class="font-weight-bold py-3 mb-4">
                  <span class="text-muted font-weight-light">
                  <!--<a class="text-muted font-weight-light" href="<?php echo site_url('admin/dashboard/');?>"><?php echo $this->lang->line('xin_e_details_home');?></a> /--></span> <?php echo $breadcrumbs;?>
                </h4><?php */ ?>
            <?php } ?>
            <?php // get the required layout..
            ?>
            <?php echo $subview; ?>
            <!-- / Content -->
          </div>

          <!-- Layout footer -->
          <?php $this->load->view('admin/components/footer'); ?>
          <!-- / Layout footer -->

        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  <?php $this->load->view('admin/components/htmlfooter'); ?>

  <script>
    $(document).ready(function() {
      var kegiatan_table = $(".kegiatan_table").dataTable({
        bDestroy: true,
        "ordering": false,
        fnDrawCallback: function(settings) {
          $('[data-toggle="tooltip"]').tooltip();
        },
      });
    });

    function generateRandomDataWeekly() {
      var data = [];
      for (var i = 1; i <= 4; i++) { // Assuming 4 weeks
        var randomNumber = Math.floor(Math.random() * (20 - 10 + 1)) + 10; // Generates a random number between 10 and 20 (inclusive)
        data.push(randomNumber);
      }
      return data;
    }

    function generateRandomDataMonthly() {
      var data = [];
      for (var i = 1; i <= 12; i++) { // Assuming 4 weeks
        var randomNumber = Math.floor(Math.random() * (20 - 10 + 1)) + 10; // Generates a random number between 10 and 20 (inclusive)
        data.push(randomNumber);
      }
      return data;
    }

    function generateRandomColors(numColors) {
      var colors = [];
      for (var i = 0; i < numColors; i++) {
        var randomColor = 'rgba(' +
          Math.floor(Math.random() * 256) + ',' +
          Math.floor(Math.random() * 256) + ',' +
          Math.floor(Math.random() * 256) + ', 0.5)';
        colors.push(randomColor);
      }
      return colors;

    }

    function generateLabelsForPast12Months() {
      var currentDate = new Date();
      var currentMonth = currentDate.getMonth(); // Get the current month (0-indexed)

      var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];

      var labels = [];
      for (var i = 11; i >= 0; i--) {
        var monthIndex = (currentMonth - i + 12) % 12; // Calculate the past month index
        labels.push(monthNames[monthIndex]);
      }

      return labels;
    }


    function generateLabelsForPast6Months() {
      var currentDate = new Date();
      var currentMonth = currentDate.getMonth(); // Get the current month (0-indexed)

      var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];

      var labels = [];
      for (var i = 0; i < 6; i++) {
        var startMonthIndex = (currentMonth + i) % 12;
        var endMonthIndex = (startMonthIndex + 5) % 12;

        var label = monthNames[startMonthIndex];
        labels.push(label);
      }

      return labels;

    }



    $(window).on("load", function() {
      var ctx = $("#grafik_mingguan");
      Chart.defaults.global.legend.display = false;

      var currentDate = new Date();
      var currentMonthYear = currentDate.toLocaleDateString('en-US', {
        month: 'long',
        year: 'numeric'
      });
      var chartTitle = "JUMLAH KEGIATAN MINGGUAN (" + currentMonthYear + ")";

      $.ajax({
        url: site_url + 'dashboard/hrsale_payroll/',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(response) {
          //var bgcolor = []; 
          var final = [];
          var final2 = [];
          for (i = 0; i < response.c_name.length; i++) {
            final.push(response.chart_data[i].value);
            final2.push(response.chart_data[i].label);
          }

          // Chart Options
          var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500,
            title: {
              display: true,
              text: chartTitle,
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }


          };

          // Chart Data
          // var chartData = {
          //   labels: final2,
          //   datasets: [{
          //     label: response.col_name,
          //     data: final,
          //     backgroundColor: 'rgba(28,180,255,.05)',
          //   }]
          // };
          var chartData = {
            labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
            datasets: [{
              label: 'Jumlah Kegiatan',
              data: [<?php echo implode(', ', $weeklyCounts) ?>],
              backgroundColor: generateRandomColors(4)
            }]
          };

          var config = {
            type: 'bar',
            options: chartOptions,
            data: chartData
          };

          var doughnutSimpleChart = new Chart(ctx, config);
        },
        error: function(data) {
          console.log(data);
        }
      });


    });


    $(window).on("load", function() {
      var ctx = $("#grafik_bulanan");
      Chart.defaults.global.legend.display = false;

      var currentDate = new Date();
      var currentMonth = currentDate.getMonth(); // Get the current month (0-indexed)
      var startMonth = currentMonth + 1; // Start month (1-indexed)
      var endMonth = startMonth + 5; // End month

      if (endMonth > 12) {
        endMonth -= 12; // Adjust for months beyond December
      }

      var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];

      var chartTitle = "TOTAL PARTISIPAN";

      $.ajax({
        url: site_url + 'dashboard/hrsale_payroll/',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(response) {
          //var bgcolor = [];
          var final = [];
          var final2 = [];
          for (i = 0; i < response.c_name.length; i++) {
            final.push(response.chart_data[i].value);
            final2.push(response.chart_data[i].label);
          }

          // Chart Options
          var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500,
            title: {
              display: true,
              text: chartTitle,
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }


          };

          // Chart Data
          // var chartData = {
          //   labels: final2,
          //   datasets: [{
          //     label: response.col_name,
          //     data: final,
          //     backgroundColor: 'rgba(28,180,255,.05)',
          //   }]
          // };

          var chartData2 = {
            labels: generateLabelsForPast12Months(),
            datasets: [{
                label: 'Laki-Laki',
                data: [<?php foreach ($weeklyMonths as $key => $value) {
                          echo $value['total_laki'] . ",";
                        } ?>],
                backgroundColor: 'rgba(54, 162, 235, 0.7)', // Example color for male
              },
              {
                label: 'Perempuan',
                data: [<?php foreach ($weeklyMonths as $key => $value) {
                          echo $value['total_perempuan'] . ",";
                        } ?>],
                backgroundColor: 'rgba(255, 99, 132, 0.7)', // Example color for female
              },
            ],
          };

          var config = {
            type: 'bar',
            options: chartOptions,
            data: chartData2
          };

          var doughnutSimpleChart = new Chart(ctx, config);
        },
        error: function(data) {
          console.log(data);
        }
      });
    });
  </script>
</body>

</html>