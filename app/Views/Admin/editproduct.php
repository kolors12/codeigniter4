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
              <h4 class="page-title">Edit Product</h4>
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
                <form class="form-horizontal" id="form" Method="post" action="<?php echo base_url();?>ProductController/updateproduct" enctype="multipart/form-data">
                  <div class="card-body">
                
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="productname"value="<?=$prod['productname']; ?>" id="productname" placeholder="Enter Product Name" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label">Product Price</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="price" id="price" value="<?=$prod['price']; ?>" placeholder="Enter Product Price" required/>
                      </div>
                    </div>
                    
                   
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Product Number</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="product_number" minlength="10" value="<?=$prod['product_number']; ?>"  placeholder="Enter Product Number"  required/>
                        <input type="hidden" class="form-control" name="guid" minlength="10" value="<?=$prod['guid']; ?>"  placeholder="Enter Product Number"  required/>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label
                        for="cono1" class="col-sm-3 text-end control-label col-form-label">Product Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="description"  placeholder="Enter Product Description" required><?=$prod['description']; ?></textarea>
                      </div>
                      
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Product Image</label>
                      <div class="col-sm-6">
                        <input type="file" class="form-control" name="image"     placeholder="Contact No Here" /><br>
                        <img src="<?php echo base_url();?><?="uploads/".$prod['image']?>" height="100px" width="100px" alt="image">
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
