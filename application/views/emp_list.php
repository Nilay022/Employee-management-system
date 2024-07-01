<?php $page='employee_list'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee List</title>

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

    <!-- sidebar menu end -->

  <!-- employee listing table -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card" style="width: 85%; margin-left: 15%;">
              <div class="card-header">
                <h3 class="mt-3 ml-3">Employee List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   <tr>
                        <th>No.</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Total leave</th>
                        <th>Remaining leave</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       $i = 1;     
                       foreach($details as $data){ ?>
                     
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="<?php echo base_url() ;?>image/<?php echo $data->image?>" style="width:50px;"></td>
                    <td><?php echo $data->name; ?></td>
                    <td><?php echo $data->department_name;?></td>
                    <td><?php echo $data->email; ?></td>
                    <td><?php echo $data->number; ?></td>
                    <td><?php echo $data->address; ?></td>
                    <td><?php echo $data->image; ?></td>                    
                    <td><?php echo $data->total_leave; ?></td>
                    <td><?php echo $data->remaining_leave; ?></td>
                  <?php if($this->session->userdata('user')) { ?>
                      <td>
                       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                      </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <?php if($this->session->userdata('user')['edit_id'] == 1) { ?>
                            <a href="<?php echo base_url(); ?>edits/<?php echo $data->eid; ?>" data-toggle="tooltip" data-placement="bottom" title="edit Employee" class="dropdown-item">Edit</a>
                            <?php } ?>

                             <?php if($this->session->userdata('user')['delete_id'] == 1) { ?>
                             <a href="<?php echo base_url(); ?>delete/<?php echo $data->eid ?>" onClick = confirmDelete(); id="delete" data-toggle="tooltip" data-placement="bottom" title="Delete Employee"  class="dropdown-item">Delete</a>
                             <?php } ?>                               
                          </div>
                    </td>
                  <?php }  else { ?>
                    <td>
                       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Action
                      </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="<?php echo base_url(); ?>edits/<?php echo $data->eid; ?>" data-toggle="tooltip" data-placement="bottom" title="edit Employee" class="dropdown-item">Edit</a>
                             <a href="<?php echo base_url(); ?>delete/<?php echo $data->eid ?>" onClick = confirmDelete(); id="delete" data-toggle="tooltip" data-placement="bottom" title="Delete Employee"  class="dropdown-item">Delete</a>
                             <a href="<?php echo base_url(); ?>permission"  data-toggle="tooltip" data-placement="bottom" title="Gice permission to employee"  class="dropdown-item">Permission</a>
                          </div>
                    </td>
                  <?php } ?>
                  </tr>
                  <?php $i++; }  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Total leave</th>
                    <th>Remaining leave</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
  </section>
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
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>


                    
                