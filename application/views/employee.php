<?php $page = 'add_employee' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee Registration</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">    
<!-- Font Awesome -->                                                                                                     
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
<div class="wrapper">

  <!-- Preloader -->
 <!--  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

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

      <!-- /.sidebar-menu -->
  
    <h3 class="mt-3 mb-5" style="margin-left: 18%">Add Employee</h3>
      <form style=" width: 75% ; margin-left: 21%" name="form" method="post" onsubmit="return(add())" action="<?php echo base_url(); ?>inputdata" enctype="multipart/form-data">
          
      <div class="form-group">
        <label>Full Name</label>
          <input type="text" name="name" value="<?php if(!empty($empl)){ print_r($empl['name']); } ?>" class="form-control"  aria-describedby="emailHelp" placeholder="Enter name">
         <span><?php echo form_error('name') ?></span> 
      </div>

      <div class="form-group">
        <label>Role</label>
           <select name="role" required class="form-control">
                                   <option value="<?php if(!empty($empl)){ print_r($empl['role']); } ?>" selected disabled readonly>Select Role</option>
                                     <?php

                                     if(!empty($role)){
                                     foreach($role as $d) { ?>

                                        <option value="<?php echo $d->rid; ?>"><?php echo $d->role_name;  ?></option>

                                    <?php } }?>
                                  </select>
      </div>

      <div class="form-group">
        <label>Department</label>
          <select name="dept" required class="form-control">
                                   <option value="<?php if(!empty($empl)){ print_r($empl['dept']); } ?>" selected disabled readonly>Select Department</option>
                                     <?php

                                     if(!empty($dept)){
                                     foreach($dept as $d) { ?>

                                        <option value="<?php echo $d->dp_id; ?>"><?php echo $d->department_name;  ?></option>

                                    <?php } }?>
                                  </select>
      </div>

      <div class="form-group">
         <label>Mobile No.</label>
            <input type="text" maxlength="10" name="number"  value="<?php if(!empty($empl)){ print_r($empl['number']); } ?>" class="form-control"  placeholder="Mobile no">
        <span><?php echo form_error('number') ?></span> 
      </div>

      <div class="form-group">
        <label>Address</label>
          <input type="text" name="address"  value="<?php if(!empty($empl)){ print_r($empl['address']); } ?>" class="form-control"  placeholder="address" ></input>
         <span><?php echo form_error('address') ?></span> 
      </div>

      <div class="form-group">
        <label>Education</label>
           <input type="text" name="education"  value="<?php if(!empty($empl)){ print_r($empl['education']);  } ?>" class="form-control"   placeholder="Enter about your education">
         <span><?php echo form_error('education') ?></span> 
      </div>

      <div class="form-group">
        <label>Skills</label>
           <input type="text" name="skill"  value="<?php if(!empty($empl)){ print_r($empl['skill']);  } ?>" class="form-control"  placeholder="Enter your skills">
          <span><?php echo form_error('skill') ?></span> 
      </div>

     <div class="form-group">
       <label>Email address</label>
          <input type="email" name="email"  value="<?php if(!empty($empl)){ print_r($empl['email']);  } ?>" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
      <span><?php echo form_error('email') ?></span> 
      </div>

      <div class="form-group">
        <label>Password</label>
           <input type="password" name="password" class="form-control"  value="<?php if(!empty($empl)){ print_r($empl['password']);  } ?>"  placeholder="Password">
          <span><?php echo form_error('password') ?></span> 
      </div>

       <div class="form-group">
         <label>Total leave</label>
            <input type="text" name="total_lv"  value="<?php if(!empty($empl)){ print_r($empl['total_lv']);  } ?>" class="form-control"   placeholder="Enter total leave No.">
         <span><?php echo form_error('total_lv') ?></span> 
       </div>

       <div class="form-group">
          <label>Remaining leave</label>
             <input type="text" name="remain_lv"  class="form-control" value="<?php if(!empty($empl)){ print_r($empl['remain_lv']);  } ?>"  placeholder="Enter Remaining leave No.">
         <span><?php echo form_error('remain_lv') ?></span> 
      </div>

      <div class="form-group">
        <label>Profile</label>
           <input type="file" name="image"  value="" class="form-control" >
         <span><?php echo form_error('image') ?></span> 
      </div>
   
        <button type="submit" name="stylesheet" name="add" class="btn btn-primary mb-5">Add</button><br>
  </form>

<!-- footer -->
<div>
<?php include 'footer.php' ?>
</div>

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
