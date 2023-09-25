<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 PDF Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Generate PDF in Codeigniter from View</h2>
    <div class="d-flex flex-row-reverse bd-highlight">
      <a href="<?php echo base_url('PdfController/htmlToPDF') ?>" class="btn btn-danger">
        Download PDF
      </a>
    </div>
    <button class="btn btn-primary btn-sm text-white" onclick="window.history.back()">Back</button>
    <table class="table table-striped table-hover mt-4">
      <thead>
      <tr>
      <th><b>S.No</b></th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Numbet</th>
      <th>Created</th>
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
        <td><?php echo $row['created_at'];?></td>

        <td>

        <a href="<?php echo base_url();?>UsersController/edit/<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Edit </a>
        <a href="<?php echo base_url();?>UsersController/deleteuser/<?php echo $row['id'];?>" class="btn btn-danger btn-sm" onClick="return delete1();">Delete </a>
        </td>

        </tr>
        <?php endforeach;?>
        <?php endif;?>
      </tbody>
    </table>
  </div>
</body>
</html>