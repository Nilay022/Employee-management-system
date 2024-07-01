<?php $page = 'home' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee deshboard</title>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">  
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/summernote/summernote-bs4.min.css">
</head>

<body>
 <div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu"role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
           <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>   
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar Menu -->
             <?php include 'sidebar_emp.php'; ?>
      <!-- sidebar end -->

   <!-- edit form  -->
    <h3 class="mt-3 mb-5" style="margin-left: 17%">Edit Your Profile</h3>
      <form style=" width: 75% ; margin-left: 21%" name="form" onsubmit="return (add())" method="post" action="<?php echo base_url(); ?>updateemp" enctype="multipart/form-data">
       <?php foreach ($res as $d) { ?>

    <div class="form-group">
      <input type="hidden" name="eid" value="<?php echo  $d->eid ?>" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
        <input type="text" name="name" value="<?php echo $d->name ?>" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
      <span><?php echo form_error('name') ?></span>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mobile No.</label>
      <input type="text" name="number"  value="<?php echo $d->number ?>" class="form-control" id="exampleInputPassword1" placeholder="Mobile no">
    <span><?php echo form_error('number') ?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
      <input type="text" name="address"  value="<?php echo $d->address ?>" class="form-control" id="exampleInputPassword1" placeholder="address" ></input>
    <span><?php echo form_error('address') ?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" disabled  value="<?php echo $d->email ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <span><?php echo form_error('email') ?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Education</label>
      <input type="text" name="education"  value="<?php echo $d->education ?>" class="form-control" id="exampleInputEmail1" a placeholder="Enter about your education">
    <span><?php echo form_error('education') ?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Skills</label>
       <input type="text" name="skill"  value="<?php echo $d->skill ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter your Skills">
    <span><?php echo form_error('skill') ?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
       <input type="password" name="password" class="form-control"  value="<?php echo $d->password ?>" id="exampleInputPassword1" placeholder="Password">
    <span><?php echo form_error('password') ?></span>
  </div>


  <?php } ?>
  
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>   





  <!-- /.content-wrapper -->
  <footer class="main-footer" style="margin-top: 3%;">
    <div class="float-right d-none d-sm-block" >
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>

          

  
