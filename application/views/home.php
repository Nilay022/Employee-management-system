<?php $page = 'home'; ?>
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

<body class="hold-transition sidebar-mini">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url(); ?>home" data-toggle="tooltip" data-placement="bottom" title="Dashboard" class="nav-link">Home</a>
                </li>
               <!--  <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" hidden class="nav-link">Contact</a>
                </li> -->
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

    <!-- sidebar -->
                 <?php include 'sidebar_emp.php'; ?>
    <!-- sidebar end -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="mx-5">Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
 
            
         <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                foreach ($attendance as $con) { ?>
            
                <h3>
                  <?php echo $con; ?>
                </h3>
                <?php }  ?>
<!--  -->
                <p>Mothly Persent days</p>
              </div>
              <div class="icon">
                <i class="fas fa-calendar"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  foreach($attendance as $data)
                  $date1 = date('Y-m-d');
                  $day = explode("-",$date1)[2];
                  $percentange = ($data * 100);
                  $ans = $percentange / $day;                
                  ?>
                  <h3>
                    <?php echo round($ans ,2); ?>
                  </h3>
                <p>Present percentange</p>
              </div>
              <div class="icon">
                <i class="fas fa-percent"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                 foreach ($remaining as $con) { ?>
            
                <h3>
                  <?php echo $con; ?>
                </h3>
                <?php }  ?>
                <p>Remaining leave</p>
              </div>
              <div class="icon">
                <i class="fa fa-hourglass-start"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->  
            <div class="small-box bg-danger">
              <div class="inner">
                   
                <?php 
               
                 if(!empty($total)){
                foreach ($total as $con) { ?>
            
                <h3>
                  <?php echo $con; ?>
                </h3>
                <?php } } ?>


                <p>Total leave</p>
              </div>
              <div class="icon">
                <i class="fas fa-calculator"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
       
      </div><!-- /.container-fluid -->
    </section> 

<hr>
    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="col">
          <div class="row ml-4">

             <!-- Profile Image -->
                    <?php if (!empty($detail)) {
                  
                     foreach ($detail as $d) { ?>
                    <div class="card card-primary px-5 card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-squar"
                              src="<?php echo base_url() ?>image/<?php echo $d->image;  ?>"/>
                        </div>
       
                        <h3 class="profile-username text-center"><?php echo $d->name; ?></h3>

                        <p class="text-muted text-center">Software Engineer</p>

                         <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <strong>Department</strong>
                            <p class="text-muted"><?php echo $d->department_name; ?></p>
                          </li>
                         <!--  <li class="list-group-item">
                            <b>Following</b> <a class="float-right">543</a>
                          </li>
                          <li class="list-group-item">
                            <b>Friends</b> <a class="float-right">13,287</a>
                          </li> -->
                         </ul>

                        <a href="<?php echo base_url(); ?>edit/<?php echo $d->eid ?>" data-toggle="tooltip" data-placement="bottom" title="Edit Profile" class="btn btn-primary btn-block"><b>Edit</b></a>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary px-5 ml-4">
                        <div class="card-header">
                          <h3 class="card-title">About Me</h3>
                        </div>
                      <!-- /.card-header -->
                      <div class="card-body px-5 ">
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                          <?php echo $d->education;; ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                        <p class="text-muted">
                          <?php echo $d->email;; ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted"><?php echo $d->address ?></p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                          
                          <span class="tag tag-primary"><?php echo $d->skill; ?></span>
                        </p>

                        <hr>

                      
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <?php } }  ?>
                  <!-- /.col -->

<!-- Message by hr -->
                <div class="card ml-4">
                  <div class="card-header">
                    <h3 class="card-title">Messages</h3>
                    
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                          <?php foreach ($massage as $m) { ?>
                          <li class="item">
                            <div class="product-img">
                              <img src="<?php echo base_url(); ?>image/<?php echo $m->hr_image; ?>"  alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                              <a class="product-title"><?php echo $m->hr_name; ?></a>
                                <span class="product-description">
                                  <?php 
                                  echo $m->message; 
                                    ?>
                                </span>
                                <span>
                                  <?php echo $m->date; ?>                        
                                </span>
                            </div>
                          </li>
                        <?php } ?>
                        </ul>
                      </div>  
              <!-- /.container-fluid -->
                </div>
              </div>
            </div> 
          </div> 
    </section>
    <!-- /.content -->
  </div>
<!-- Message end -->

<!-- /.content-wrapper -->


<!-- footer -->
<div>
<?php include 'footer.php' ?>
</div>
<!-- footer end -->


<!-- jQuery -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
<script src="<?php echo base_url(); ?>asset/plugins/codemirror/codemirror.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/codemirror/mode/css/css.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
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
                           
                           
                           

