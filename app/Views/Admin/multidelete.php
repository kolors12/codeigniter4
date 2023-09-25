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
              <h4 class="page-title text-center">Multipule Rows Deletion & Import Data  </h4>
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
          
           
          
        

          <?php if(session()-> getFlashdata('status2')){?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> Hey..! </strong><?=session()->getFlashdata('status2');?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php  }?>
          
          
          <div class="col-12">
             <a href="<?php echo base_url();?>MultiDeleteController/Addimport"><button type="button" class="btn btn-primary btn-sm">Add Import Data</button></a>
              <div class="card">
                <div class="card-body">
                
                  <div class="table-responsive">
                  <?php
			if ($product_list) {
		?>
		<div id="msg"></div>
		<button class="btn btn-danger btn-sm" id="delete_selected"> Delete Selected Users(s)</button><br><br>
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <tr>
					<th><input id="check_all" type="checkbox"> Select All</th>
					<th>ID</th>
					<th>Name</th>
					<th>Eamil</th>
					<th>Phone</th>
                <th>Data</th>
                     <th>Actions</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                      <?php
					$i = 1;
					foreach ($product_list as $p) {
						$col_class = ($i % 2 == 0 ? 'odd_col' : 'even_col');
						$i++;
					?>
                         <tr class="<?php echo $col_class; ?>">
                          <td><input type="checkbox" name="row-check" value="<?php echo $p->id;?>"></td>
						<td><?php echo $p->id; ?></td>
						<td><?php echo $p->name; ?></td>
						<td><?php echo $p->email; ?></td>
						<td><?php echo $p->phone; ?></td>
                        <td><?php echo $p->created_at; ?></td>
                        
                          <td>
                            
                            <!-- <a href="<?php// echo base_url();?>ProductController/edit/<?php echo $p->id;?>" class="btn btn-primary btn-sm">Edit </a> -->
                            <a href="<?php echo base_url();?>MultiDeleteController/delete/<?php echo $p->id;?>" class="btn btn-danger btn-sm" onClick="return delete1();">Delete </a>
                        </td>
                       
                        </tr>
                        <?php
			         	} ?>
                      </tbody>
                      
                    </table>
                    <?php
                    } else {  ?>  
                  

                    <tr >
      <td colspan="7" style="text-align: center"> 
      <div class="td-bg-first" style= "color:red"> <b><?php echo "No result Found...!" ?></b></div>
      </td>
      </tr>
                   <?php  }?>
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



<script>
$(function() {
	//If check_all checked then check all table rows
	$("#check_all").on("click", function () {
		if ($("input:checkbox").prop("checked")) {
			$("input:checkbox[name='row-check']").prop("checked", true);
		} else {
			$("input:checkbox[name='row-check']").prop("checked", false);
		}
	});

	// Check each table row checkbox
	$("input:checkbox[name='row-check']").on("change", function () {
		var total_check_boxes = $("input:checkbox[name='row-check']").length;
		var total_checked_boxes = $("input:checkbox[name='row-check']:checked").length;

		// If all checked manually then check check_all checkbox
		if (total_check_boxes === total_checked_boxes) {
			$("#check_all").prop("checked", true);
		}
		else {
			$("#check_all").prop("checked", false);
		}
	});
	
	$("#delete_selected").on("click", function () {
		var ids = '';
		var comma = '';
		$("input:checkbox[name='row-check']:checked").each(function() {
			ids = ids + comma + this.value;
			comma = ',';			
		});
		
		console.log(ids);
		
		if(ids.length > 0) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('MultiDeleteController/delete_products') ?>",
				data: {'ids': ids},
				dataType: "html",
				cache: false,
				success: function(msg) {
					$("#msg").html(msg);
					window.setTimeout(function(){
						window.location.href = "http://localhost/codeigniter4/MultiDelete";
					}, 1000);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					$("#msg").html("<span style='color:red;'>" + textStatus + " " + errorThrown + "</span>");
				}
			});
		} else {
			$("#msg").html('<span style="color:red;">You must select at least one product row for deletion</span>');
		}
	});
});
</script>



  </body>
</html>
