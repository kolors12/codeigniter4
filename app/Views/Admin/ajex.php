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
              <h4 class="page-title">Jquery Ajex Curd Operations</h4>
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
          <?= \Config\Services::validation()->listErrors(); ?>
          <span class="d-none alert alert-success mb-3" id="res_message"></span>
          
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
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add Students</button>
             <!-- <a href="<?php //echo base_url();?>UsersController/Createusers"><button type="button" class="btn btn-primary btn-sm">Add Users</button></a> -->
              <div class="card">
                <div class="card-body">
                
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><b>S.No</b></th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Cource</th>
                        
                          <th>Actions</th>
                        
                        </tr>
                      </thead>
                      <tbody class="studentdata">
                     
                       <!-- <tr></tr> -->
                     
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




    <div class="modal fade" id="StudentDeleteModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Student Delete Data ?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          <input type="hidden" id="stud_delete_id">
        <h4> Are you sure want to delete this data ?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger ajaxstudent-deletebtn">Yes. Delete</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Student Add Model  Start -->


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add Student Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      
                <form class="form-horizontal" id="ajax_form"   name="ajax_form" Method="post" action="javascript:void(0)">
                  <div class="card-body">
                
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Plese Enter Name" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Please Enter Your Email" required/>
                      </div>
                    </div>
                    
                    
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Mobile</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone" minlength="10" maxlength="10" id="phone"placeholder="Please Enter Mobile Number"  required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="cono1" class="col-sm-3 text-end control-label col-form-label">Cources</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="cource" id="cource" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body" style="text-align:center">
                    <button type="submit" class="btn btn-primary btn-sm text-white" id="send_form">Submit</button>
    
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </form>
              
        </div>
        
      </div>
      
    </div>
  </div>
<!-- Student Add Model  Close -->
<!-- Student View Model Start -->

  <div class="modal fade" id="studentview" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Student View Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
        <h4>ID : <span class="guid_view"></span></h4>
        <h4>Name : <span class="name_view"></span></h4>
        <h4>Email : <span class="email_view"></span></h4>
        <h4>Phone : <span class="phone_view"></span></h4>
        <h4>Course : <span class="cource_view"></span></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Student View Model End -->
 <!-- Student Update Model start -->
<div class="modal fade" id="StudentEditModel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Edit Student Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      
                
                    <div class="form-group">
                      <label >Name</label>
                      
                    <textarea class="form-control cource stud_guid"  id="stud_guid" required></textarea>
                     <textarea class="form-control cource"  id="stud_name" required></textarea>
                     </div>
                    <div class="form-group">
                     <label>Email</label>
                     
                     <textarea class="form-control cource"  id="stud_email" required></textarea>
                    
                     </div>
                    
                    
                      <div class="form-group">
                      <label>Mobile</label>
                      <textarea class="form-control cource"  id="stud_phone" required></textarea>
                    
                     
                      </div>
                    <div class="form-group">
                      <label>Cources</label>
                      <textarea class="form-control cource"  id="stud_cource" required></textarea>
                    
                    </div>
                  
                  <div class="border-top">
                    <div class="card-body" style="text-align:center">
                    <button type="button" class="btn btn-primary btn-sm text-white  ajaxstudent-update" >Submit</button>
    
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>
                 
              
        </div>
        
      </div>
      
    </div>
  </div>
<!-- Student Update Model Close -->





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
$(document).ready(function () {
  loadstudent();

/////View model code Open //////
 $(document).on('click','.view_btn',function(){

var stud_id = $(this).closest('tr').find('.stud_id').text();
$.ajax({
    method : "POST",
    url: "<?php echo base_url('AjexController/viewstudent') ?>",
    data : {
    'stud_id' : stud_id,
    },
    success: function (response) {
        $.each(response, function(key,studview){
          $('.guid_view').text(studview['guid']);
          $('.name_view').text(studview['name']);
          $('.email_view').text(studview['email']);
          $('.phone_view').text(studview['phone']);
          $('.cource_view').text(studview['cource']);
          $('#studentview').modal('show');
     });


    
      }
    });

   });

   /////View model code close //////
   /////View model Edit Open //////
   $(document).on('click','.edit_btn',function(){

    var stud_id= $(this).closest('tr').find('.stud_id').text();
    $.ajax({
        method:"POST",
        url: "<?php echo base_url('AjexController/edit') ?>",
        data:{
          'stud_id' : stud_id
        },
        success: function(response) {
           //console.log(response.students);
           $.each(response, function(key,studvalue){
          $('#stud_guid').text(studvalue['guid']);
          $('#stud_name').text(studvalue['name']);
          $('#stud_email').text(studvalue['email']);
          $('#stud_phone').text(studvalue['phone']);
          $('#stud_cource').text(studvalue['cource']);
          $('#StudentEditModel').modal('show');
     });


           
           
          
         }

       });

    });

   /////View model Edit Close //////
   });

 /////View model Edit Update //////
   $(document).on('click','.ajaxstudent-update',function(){
  
    var data = {

      'stud_guid' : $('#stud_guid').val(),
      'name' : $('#stud_name').val(),
      'email' : $('#stud_email').val(),
      'phone' : $('#stud_phone').val(),
      'cource' : $('#stud_cource').val(),
    }


    $.ajax({
      method : "POST",
      url:"<?php echo base_url('AjexController/update') ?>",
      data:data,
      success : function(response){
      $('#res_message').html(response.msg);
      $('#res_message').show();
      $('#res_message').removeClass('d-none');
      $('#StudentEditModel').hide();
      $('.studentdata').html("");
      loadstudent();
    
      }


    })

   });
 /////View model Edit Update close //////
 $(document).on('click','.delete_btn',function(){
  
  var stud_id= $(this).closest('tr').find('.stud_id').text();
  $('#stud_delete_id').val(stud_id);
   $('#StudentDeleteModal').modal('show');


  

 });
 $(document).on('click','.ajaxstudent-deletebtn',function(){
   var stud_id = $('#stud_delete_id').val();

   $.ajax({
        method:"POST",
        url: "<?php echo base_url('AjexController/delete') ?>",
        data : {
          'stud_id' : stud_id
        },
        success: function(response) {
          $('#res_message').html(response.msg);
          $('#res_message').show();
          $('#res_message').removeClass('d-none');
          $('#StudentDeleteModal').hide();
          $('.studentdata').html("");
          loadstudent();
         }
        });
 });

function loadstudent()
{
        $.ajax({
        method:"GET",
        url: "<?php echo base_url('AjexController/getdata') ?>",
        success: function(response) {
           //console.log(response.students);
          $.each(response.students, function (key,value) {
            $('.studentdata').append('<tr>\
            <td class="stud_id">'+value['guid']+'</td>\
            <td>'+value['name']+'</td>\
            <td>'+value['email']+'</td>\
            <td>'+value['phone']+'</td>\
            <td>'+value['cource']+'</td>\
            <td>\
            <a href="javascript:void(0);" class="badge btn-info view_btn">view</a>\
            <a href="javascript:void(0);" class="badge btn-primary edit_btn">Edit</a>\
            <a href="javascript:void(0);" class="badge btn-danger delete_btn">Delete</a>\
            </td>\
            </tr>');
          });
         }

       });
}


</script>



<script>
if ($("#ajax_form").length > 0) {
      $("#ajax_form").validate({
     
submitHandler: function(form) {
      $('#send_form').html('Sending..');
      $.ajax({
        url: "<?php echo base_url('AjexController/store') ?>",
        type: "POST",
        data: $('#ajax_form').serialize(),
        dataType: "json",
        success: function(response) {
           
            $('#send_form').html('Submit');
            $('#res_message').html(response.msg);
            $('#res_message').show();
            $('#res_message').removeClass('d-none');
            // $('#myModal').model('hide');
            // $('#myModal').find('input').val('');
            $('.studentdata').html("");
            loadstudent();
            // document.getElementById("ajax_form").reset(); 
            //   setTimeout(function(){
            // $('#myModal').modal('');
            // $('#myModal').html('');
           
            //  },10000);
            document.getElementById("ajax_form").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#res_message').html('');
            },1000);
        }
      });
    }

});

}


</script>

  </body>
</html>
