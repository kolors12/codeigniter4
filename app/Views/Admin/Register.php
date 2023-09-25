<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?php echo base_url();?>assetss/assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assetss/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>

.error {
    color: red;
}
</style>
  <body>
    <div class="main-wrapper">
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
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        "
      >
        <div class="auth-box bg-dark border-top border-secondary">
          <div id="loginform">
            <div class="text-center pt-3 pb-3">
              <span class="db"
                ><img src="<?php echo base_url();?>assetss/assets/images/logo.png" alt="logo"
              /></span>
            </div>
          
            <!-- Form -->
            <form  id="form" class="form-horizontal mt-3" method="post" action="<?php echo base_url(); ?>Login/store">
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Frist Name" name="F_name" required/>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="L_name" required/>
                  </div>
                  <!-- email -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-phone fs-4"></i
                      ></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Phone Number" maxlength="10" minlength="10" name="Contect_no" required/>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-email fs-4"></i
                      ></span>
                    </div>
                    <input type="email" class="form-control form-control-lg" placeholder="Email" name="eamil" required/>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input type="text" class="form-control form-control-lg"  placeholder="Password" id="Password" name="Password" required/>
                  </div>
                  
                </div>
              </div>
              <div class="border-top">
                    <div class="card-body" style="text-align:center">
                   <a href="<?php echo base_url();?>Login"> <button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Login</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="Submit" class="btn btn-primary btn-lg text-white  ajaxstudent-update" >Submit</button>
    
                  
                    </div>
             
            </form>
          </div>

          


        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assetss/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assetss/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
      // ==============================================================
      // Login and Recover Password
      // ==============================================================
      $("#signupform").on("click", function () {
        $("#loginform").slideUp();
        $("#signupform").fadeIn();
      });
      $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
      });

      // $("#to-login").click(function () {
      //   $("#recoverform").hide();
      //   $("#loginform").fadeIn();
      // });
    </script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js" type="text/javascript"></script>

<script>
   ///validation///
   $("#form").validate({
     });

</script>
  </body>
</html>
