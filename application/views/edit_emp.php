<?php $page = 'employee_list' ?>


<!DOCTYPE html>
<html lang="en">
<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Employee Details</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"><!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url(); ?>hrpanel" class="nav-link">Home</a>
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
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
<!-- Sidebar Menu -->
<?php if($this->session->userdata('user'))
       { 
        include 'sidebar_emp.php';
       } 
       else
       {
         include 'sidebar.php';
       } ?>
<!-- sidebar end -->

<!-- Edit employee page -->
<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">   
        <h3 class="mb-5" style="margin-left: 10%"> Edit Employee</h3>
          <form style=" width: 75% ; margin-left: 10%" name="form" method="post" onsubmit="return(add())" action="<?php echo base_url(); ?>update_employee" enctype="multipart/form-data">
              <?php foreach ($res as $d) { ?>

          <input type="hidden" name="eid" class="form-control" value="<?php echo  $d->eid ?>" aria-describedby="emailHelp" placeholder="Enter name">
             
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo  $d->name ?>" aria-describedby="emailHelp" placeholder="Enter name">
             <span><?php echo form_error('name') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputnumber1">Mobile No.</label>
              <input type="number" maxlength="10" name="number" value="<?php echo  $d->number ?>"  class="form-control"  placeholder="Mobile no">
            <span><?php echo form_error('number') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputaddress1">Address</label>
              <input type="text" name="address"   class="form-control" value="<?php echo  $d->address ?>"  placeholder="address" ></input>
            <span><?php echo form_error('address') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputeducation1">Education</label>
              <input type="text" name="education"   class="form-control" value="<?php echo  $d->education ?>"  placeholder="Enter about your education">
            <span><?php echo form_error('education') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputskill1">Skills</label>
              <input type="text" name="skill"  class="form-control" value="<?php echo  $d->skill ?>"  placeholder="Enter your skills">
             <span><?php echo form_error('skill') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email"  class="form-control" value="<?php echo  $d->email ?>" aria-describedby="emailHelp" placeholder="Enter email">
            <span><?php echo form_error('email') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" value="<?php echo  $d->password ?>" placeholder="Password">
            <span><?php echo form_error('password') ?></span> 
          </div>

          <div class="form-group">
            <label for="exampleInputeducation1">Total leave</label>
              <input type="text" name="total_lv"   class="form-control" value="<?php echo  $d->total_leave ?>"   placeholder="Enter total leave No.">
            <span><?php echo form_error('total_lv') ?></span> 
          </div>

           <div class="form-group">
            <label for="exampleInputeducation1">Remaining leave</label>
              <input type="text" name="remain_lv"   class="form-control" value="<?php echo  $d->remaining_leave ?>"   placeholder="Enter total leave No.">
            <span><?php echo form_error('remain_lv') ?></span> 
          </div>

          <button type="submit" name="update" class="btn btn-primary mb-5">Update</button>

           <?php } ?>
        </form>
      </div>
  </section>
</div>
<!-- Edit page end -->

<!-- footer -->
<div>
  <?php include 'footer.php' ?>
</div>
<!-- footer end -->


<!-- javascript -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>asset/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js"></script>
</body>
</html>