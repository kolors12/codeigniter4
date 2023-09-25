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
              <h4 class="page-title">Crete Users</h4>
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
        
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
        
          <button class="btn btn-primary btn-sm text-white" onclick="window.history.back()">Back</button>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal" id="form" Method="post" action="<?php echo base_url();?>UsersController/add">
                  <div class="card-body">
                
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="F_name" id="fname" placeholder="First Name Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="L_name" id="lname" placeholder="Last Name Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" name="Password" id="password" placeholder="Password Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email1" class="col-sm-3 text-end control-label col-form-label">Company</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="Company" id="email1" placeholder="Company Name Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="Contect_no" minlength="10" maxlength="10" id="cono1"placeholder="Contact No Here"  required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="Message" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body" style="text-align:center">
                      <button type="submit" class="btn btn-primary btn-sm text-white">Submit</button>
                      <button type="reset" class="btn btn-danger btn-sm text-white">Reset</button>
                    </div>
                  </div>
                </form>
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
