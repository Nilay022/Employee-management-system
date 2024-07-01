<?php $page = 'add_leave'; ?>
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" data-toggle="tooltip" data-placement="bottom" title="Dashboard" class="nav-link">Home</a>
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
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- sidebar profile -->
 
      <!-- Sidebar Menu -->
             <?php include 'sidebar_emp.php'; ?>
      <!-- sidebar end -->

             
  <!-- add leave form -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <h3 class="mt-3 mb-5" style="margin-left: 10px">Add New Leave</h3>
           <form style=" width: 75% ; margin-left: 11%" name="form1" onsubmit="return(leave())" onclick="return(mail())" method="post" action="<?php echo base_url(); ?>addleave" enctype="multipart/form-data">
              <div class="form-group">
              <?php
              if(!empty($detail)){
      
              foreach($detail as $d) { ?>

              <input type="hidden" name="eid" value="<?php echo $d->eid; ?>">
              <input type="hidden" name="email" value="<?php echo $d->email; ?>">
              <input type="hidden" name="name" value="<?php echo $d->name; ?>" >

              </div>

              <?php } } ?>

              <div class="form-group">
                <label>leave type</label>
                  <select name="leave" id="leave" class="form-control">
                    <option value="" selected disabled readonly>Select leave</option>
                     <?php
                     if(!empty($leave)){
                     foreach($leave as $l) { ?>
                    <option value="<?php echo $l->lid; ?>"><?php echo $l->lname;  ?></option>

                     <?php } }?>
                  </select>
                 <span><?php echo form_error('leave');?></span>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Reason</label>
                <input type="text" name="reason"  value="<?php if(!empty($empl)){ print_r($empl['desc']); } ?>" id="reason" class="form-control"  placeholder="Enter your reason" >
                    <span><?php echo form_error('reason');?></span>
              </div>

              <div class="from-group">
                <label for="exampleInputEmail1">From</label>
                <input type="date" class="form-control" name="from_date" value="<?php if(!empty($empl)){ print_r($empl['d_from']); } ?>" min="2022-03-21" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"  id="from_date"  data-mask>
                   <span><?php echo form_error('from_date');?></span>
              </div>

               <div class="form-group">
                <label for="exampleInputEmail1">To</label>
                <input type="date" name="to_date" value="<?php if(!empty($empl)){ print_r($empl['d_to']); } ?>" id="to_date" min="2022-03-21"  data-inputmask-inputformat="dd/mm/yyyy" data-mask  class="form-control">
                    <span><?php echo form_error('to_date');?></span>
               </div>

               <div class="form-group">
                <label for="exampleInputEmail1">Massage</label>
                <textarea type="text" name="massage" class="form-control" placeholder="Enter full Massage"  ></textarea>
                    <span><?php echo form_error('massage');?></span>
               </div>

               <div class="form-group">
                  <input type="date" name="sub_date" hidden id="sub_date" class="form-control"  value="<?php echo date('Y-m-d'); ?>" >
               </div>

               <button type="submit" name="stylesheet" data-toggle="tooltip" data-placement="bottom" title="Add" class="btn btn-primary md-5">Add leave</button>
            </form>
        </div>
      </section>
    </div>
  </div>
<!-- from end -->

<!-- footer  -->
<div>
    <?php include 'footer.php'; ?>
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
         <!-- Sparkline -->
<script src="<?php echo base_url(); ?>asset/plugins/sparklines/sparkline.js"></script>
         <!-- JQVMap -->
<script src="<?php echo base_url(); ?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
         <!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
       <!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.js"></script>
       <!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<script type="text/javascript">
$("form-control").datepicker({
       format:'yyyy-mm-dd',
       autoclose: true,
       minDate: 0,   
}); 
</script>
</body>
</html>
