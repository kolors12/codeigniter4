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
              <h4 class="page-title">Update User</h4>
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
                <form class="form-horizontal" id="form" Method="post" action="<?php echo base_url();?>UsersController/updateuser">
                  <div class="card-body">
                  
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?=$users['F_name']; ?>" name="F_name" id="fname" placeholder="First Name Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="L_name" id="lname"  value="<?=$users['L_name']; ?>" placeholder="Last Name Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label">Password</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="Password" id="Password"  value="<?=$users['Password']; ?>" placeholder="Password Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email1" class="col-sm-3 text-end control-label col-form-label">Company</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="Company" id="email1"  value="<?=$users['Company']; ?>" placeholder="Company Name Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                      <div class="col-sm-6">
                        <input type="number" class="form-control" minlength="10" maxlength="10" name="Contect_no"  value="<?=$users['Contect_no']; ?>" id="cono1"placeholder="Contact No Here" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="Message" required><?=$users['Message']; ?></textarea>
                        <input type="hidden" class="form-control" name="guid"  value="<?=$users['guid']; ?>" id="message"placeholder="Contact No Here"/>
                      </div>
                    </div>
                   
                  </div>
                  <div class="border-top">
                    <div class="card-body" style="text-align:center">
                      <button type="submit" class="btn btn-primary btn-sm text-white">Update</button>
                      
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
