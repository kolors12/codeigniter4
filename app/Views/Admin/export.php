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
              <h4 class="page-title">Search And Export Excel Data</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#" class="badge btn-info">Refresh </a>
                   
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
          
           
          
          
          
          <?php if(session()-> getFlashdata('status2')){?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> Hey..! </strong><?=session()->getFlashdata('status2');?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php  }?>



			<?php $validation = \Config\Services::validation(); ?>
          
      
          <div class="col-12">
          <div class="card-body">
             
              </div>
              <form id="form" >         
  <div class="input-group my-3">
  <input type="text" name="q" class="form-control required" placeholder="Search By Name (OR) Full Data Download"/>
  <div class="input-group-append">
  <button class="btn btn-info" type="submit">Search</button>
  <a href="<?php echo base_url();?>ExportExcelController/Export/<?php echo $users['0']['name'];?>"><button class="btn btn-warning" type="button">Search Download Excel</button></a>
  <a href="<?php echo base_url();?>ExportExcelController/Export"><button class="btn btn-success text-white" type="button">Full Excel Download</button></a>
  
  </div>
  </div>
  </form>        
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
                          <th> Name</th>
                          <th> Eamil</th>
                          <th> Phone Number</th>
                          <th>View Model</th>
                          <th>created_at</th>
                          <th>Actions</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($users):?>
                          <?php foreach($users as $row) : ?>
                          <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['phone'];?></td>
                          <td style="text-align: center"><a href="javascript:void(0);" class="badge btn-info view_btn " data-id="<?php echo $row['id'] ?>">View </a></td>
                          <td><?php echo $row['created_at'];?></td>
                          
                        
                          <td>
                            
                            <!-- <a href="<?php// echo base_url();?>ExportExcelController/edit/<?php //echo $row['id'];?>" class="btn btn-primary btn-sm">Edit </a> -->
                            <a href="<?php echo base_url();?>ExportExcelController/delete/<?php echo $row['id'];?>" class="btn btn-danger btn-sm" onClick="return delete1();">Delete </a>
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
    <div class="modal fade" id="studentview" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">View Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
        <!-- <h4>ID : <span class="guid_view"></span></h4> -->
        <h4>Name : <span class="name_view"></span></h4>
        <h4>Email : <span class="email_view"></span></h4>
        <h4>Phone : <span class="phone_view"></span></h4>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <?php include ("Footer.php");?>
    <script src="<?php echo base_url();?>assetss/assets/extra-libs/DataTables/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
<script>

$(document).on('click','.view_btn',function(){

  var stud_id= $(this).data('id');
  
//var stud_id = $(this).closest('tr').find('.stud_id').text();

//alert(id);
$.ajax({
    method : "POST",
    url: "<?php echo base_url('ExportExcelController/viewstudent') ?>",
    data : {
    'stud_id' : stud_id,
    },
    success: function (response) {
        $.each(response, function(key,studview){
          // $('.guid_view').text(studview['id']);
          $('.name_view').text(studview['name']);
          $('.email_view').text(studview['email']);
          $('.phone_view').text(studview['phone']);
          $('#studentview').modal('show', {backdrop: 'static'});
        
     });


    
      }
    });

   });

</script>


  </body>
</html>
