<?php $page = 'add_task'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HR Dashboard</title>

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
<div class="wrapper"
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
<?php include 'sidebar.php'; ?>
<!-- /.sidebar-menu -->
   
<!-- task add form -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
       <h3 class="mt-3 mb-5" style="margin-left: 5%">Add Task</h3>
         <form style=" width: 75% ; margin-left: 5%;" name="task_form" onsubmit="return(task())" method="post" action="<?php echo base_url(); ?>task" >

            <div class="form-group">
              <label>Task</label>
              <input type="text" name="task" class="form-control" value="<?php if(!empty($empl)){ print_r($empl['task']); } ?>"  placeholder="Enter task">
               <span><?php echo form_error('task') ?></span> 
            </div>

            <div class="form-group">  
              <label>Employee name</label>
                <select name="assign[]" class="form-control">
                <option disabled value="" selected readonly>Select Employee</option>
                   <?php
                 
                   if(!empty($emp)){ 
                   foreach($emp as $employee) { ?>

                      <option value="<?php echo $employee->eid; ?>"><?php echo $employee->name;  ?></option>
        
                  <?php } }?>
                </select>
              <span><?php echo form_error('assign') ?></span> 
            </div>

            <div class="form-group">
              <label >start date</label>
              <input type="date" name="start_date"  value="<?php if(!empty($empl)){ print_r($empl['start_date']); } ?>" class="form-control">
              <span><?php echo form_error('start_date') ?></span> 
            </div>

            <div class="form-group">
              <label>due date</label>
              <input type="date" name="due_date" value="<?php if(!empty($empl)){ print_r($empl['due_date']); } ?>" class="form-control"></input>
              <span><?php echo form_error('due_date') ?></span> 
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Add">
            </div>
       </form> 
      </div>
    </section>
  </div>

<!-- form end -->

<!-- footer  -->
<div>
    <?php include 'footer.php' ?>
</div>
<!-- footer end -->


    <!-- jquery -->
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
