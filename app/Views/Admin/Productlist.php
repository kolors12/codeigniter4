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
              <h4 class="page-title">Product List</h4>
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
          <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
          
           
          
          <?php if(session()-> getFlashdata('status')){?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong> Hey..! </strong><?=session()->getFlashdata('status');?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php  }?>

          <?php if(session()-> getFlashdata('status2')){?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> Hey..! </strong><?=session()->getFlashdata('status2');?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php  }?>
          
          
          <div class="col-12">
             <a href="<?php echo base_url();?>ProductController/Createproduct"><button type="button" class="btn btn-primary btn-sm">Add Product</button></a>
              <div class="card">
                <div class="card-body">
                
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th><b>S.No</b></th>
                          <th>Product Name</th>
                          <th>Product Price</th>
                          <th>Product Number</th>
                          <th>Product Description</th>
                          <th>Image</th>
                         
                          <th>Actions</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($products):?>
                          <?php foreach($products as $row) : ?>
                          <tr>
                          <td><?php echo $row['guid'];?></td>
                          <td><?php echo $row['productname'];?></td>
                          <td><?php echo $row['price'];?></td>
                          <td><?php echo $row['product_number'];?></td>
                          <td><?php echo $row['description'];?></td>
                          <td><img src="<?php echo base_url();?><?="uploads/".$row['image']?>" height="50px" width="50px" alr="image"></td>
                        
                          <td>
                            
                            <a href="<?php echo base_url();?>ProductController/edit/<?php echo $row['guid'];?>" class="btn btn-primary btn-sm">Edit </a>
                            <a href="<?php echo base_url();?>ProductController/deleteproduct/<?php echo $row['guid'];?>" class="btn btn-danger btn-sm" onClick="return delete1();">Delete </a>
                        </td>
                       
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
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
   
<script>
$(document).ready(function(){
  <?php if(session()-> getFlashdata('status1')){?>

  swal({
  title: "<?= session()-> getFlashdata('status1')?>",
  text: "<?= session()-> getFlashdata('status_text')?>",
  icon: "<?php  session()-> getFlashdata('status_icon')?>",
  button: "OK",
  });

    <?php }?>

});
</script>
<script type="text/javascript">
function delete1(){
if(window.confirm("Do you want Delete this data..!"))  {
return true;
} else
return false;
}
</script> 



  </body>
</html>
