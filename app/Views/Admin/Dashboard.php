<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include("Head.php");?>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
     <?php include("Header.php");?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <?php include ("Sidemenu.php");?>



      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">Dashboard</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white">Charts</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>
                  <h6 class="text-white">Widgets</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white">Tables</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-arrow-all"></i>
                  </h1>
                  <h6 class="text-white">Full Width</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-receipt"></i>
                  </h1>
                  <h6 class="text-white">Forms</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-relative-scale"></i>
                  </h1>
                  <h6 class="text-white">Buttons</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-pencil"></i>
                  </h1>
                  <h6 class="text-white">Elements</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-calendar-check"></i>
                  </h1>
                  <h6 class="text-white">Calnedar</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-alert"></i>
                  </h1>
                  <h6 class="text-white">Errors</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Pie chart data</h4>
                     
                    </div>
                  </div>
                  <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">

                    <div class="mt-1">
                    <div id="GooglePieChart" style="height: 350px; width: 100%"></div>
                    </div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                    google.charts.load('visualization', "1", {
                    packages: ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawBarChart);

                    // Pie Chart
                    google.charts.setOnLoadCallback(showBarChart);
                    function drawBarChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Day', 'Products Count'], 
                    <?php 
                    foreach ($products as $row){
                    echo "['".$row['day']."',".$row['sell']."],";
                    }
                    ?>
                    ]);
                    var options = {
                    title: ' Pie chart data',
                    is3D: true,
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('GooglePieChart'));
                    chart.draw(data, options);
                    }
                    </script>
                    </div>


                      <div class="col-lg-6">
                      <div class="row">

                      <div class="mb-5 mt-1">
				<div id="GoogleLineChart" style="height: 350px; width: 100%"></div>
			</div>
                      <script>
                      google.charts.load('current', {'packages':['corechart', 'bar']});
                      google.charts.setOnLoadCallback(drawLineChart);
                      google.charts.setOnLoadCallback(drawBarChart);
                      // Line Chart
                      function drawLineChart() {
                      var data = google.visualization.arrayToDataTable([
                      ['Day', 'Products Count'],
                      <?php 
                      foreach ($products as $row){
                      echo "['".$row['day']."',".$row['sell']."],";
                      } ?>
                      ]);
                      var options = {
                      title: 'Line chart product sell wise',
                      curveType: 'function',
                      legend: {
                      position: 'top'
                      }
                      };
                      var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChart'));
                      chart.draw(data, options);
                      }
                      </script>

                      </div>
                      </div>
                    <!-- column -->
                  </div>




                  2nd row



                  <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">

                    <div class="mt-1">
                    <div id="GoogleBarChart" style="height: 350px; width: 100%"></div>
                    </div>

                    
                    <script>
                      google.charts.load('current', {'packages':['corechart', 'bar']});
                    
                      google.charts.setOnLoadCallback(drawBarChart);
                      google.charts.setOnLoadCallback(showBarChart);
                      function drawBarChart() {
                      var data = google.visualization.arrayToDataTable([
                      ['Day', 'Products Count'], 
                      <?php 
                      foreach ($products as $row){
                      echo "['".$row['day']."',".$row['sell']."],";
                      }
                      ?>
                      ]);
                      var options = {
                      title: ' Bar chart products sell wise',
                      is3D: true,
                      };
                      var chart = new google.visualization.BarChart(document.getElementById('GoogleBarChart'));
                      chart.draw(data, options);
                      }
                    </script>
                    </div>


                              <div class="col-lg-6">
                              <div class="row">
                              <div class="col-6">
                              <div class="bg-dark p-10 text-white text-center">
                              <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                              <h5 class="mb-0 mt-1">2540</h5>
                              <small class="font-light">Total Users</small>
                              </div>
                              </div>
                              <div class="col-6">
                              <div class="bg-dark p-10 text-white text-center">
                              <i class="mdi mdi-plus fs-3 font-16"></i>
                              <h5 class="mb-0 mt-1">120</h5>
                              <small class="font-light">New Users</small>
                              </div>
                              </div>
                              <div class="col-6 mt-3">
                              <div class="bg-dark p-10 text-white text-center">
                              <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                              <h5 class="mb-0 mt-1">656</h5>
                              <small class="font-light">Total Shop</small>
                              </div>
                              </div>
                              <div class="col-6 mt-3">
                              <div class="bg-dark p-10 text-white text-center">
                              <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                              <h5 class="mb-0 mt-1">9540</h5>
                              <small class="font-light">Total Orders</small>
                              </div>
                              </div>
                              <div class="col-6 mt-3">
                              <div class="bg-dark p-10 text-white text-center">
                              <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                              <h5 class="mb-0 mt-1">100</h5>
                              <small class="font-light">Pending Orders</small>
                              </div>
                              </div>
                              <div class="col-6 mt-3">
                              <div class="bg-dark p-10 text-white text-center">
                              <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                              <h5 class="mb-0 mt-1">8540</h5>
                              <small class="font-light">Online Orders</small>
                              </div>
                              </div>
                              </div>
                              </div>
                    <!-- column -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
         
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include ("Copyright.php");?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <?php include ("Footer.php");?>
  </body>
</html>
