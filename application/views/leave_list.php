<?php $page = 'leave_list'; ?>
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
        <a href="index3.html" class="nav-link">Home</a>
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

  <!-- Main Sidebar Container -->
  
      <!-- Sidebar Menu -->
           <?php include 'sidebar.php'; ?>

      <!-- sidebar Menu end -->
    
     <!-- list table -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card" style="width: 85%; margin-left: 15%;">
              <div class="card-header">
                <h3 class="card-title mt-3 ml-3">Leave List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Leave type</th>
                        <th>Reason</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Total days</th>
                        <th>submit date</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                            if(!empty($leave)) {
                            $i=1;
                            foreach($leave as $r){
                                echo "<tr>";
                                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;".$i."</td>";
                                echo "<td>".$r->name."</td>"; 
                                echo "<td>".$r->lname."</td>";
                                echo "<td>".$r->desc."</td>";
                                echo "<td>".$r->d_from ."</td>";
                                echo "<td>".$r->d_to."</td>";
                                echo "<td>".$r->total_day."</td>";
                                echo "<td>".$r->sub_date."</td>";
                               
                            ?>
                            <?php 
                               echo "<td>";
                                   if($r->status == 1)
                                   { 
                                      echo '
                                      <span class="bg-success p-2" style="font-size:15px; border-radius:8px;">Approved</a></span> 
                                      ';
                                   }

                                   else if($r->status == 2)
                                   {
                                   echo '
                                  <span class="bg-danger p-2" style="font-size:15px; border-radius:8px;">Rejected</a></span> 
                                   ';
                                   }

                                   elseif ($r->status == 3) 
                                   {
                                   echo '
                                   <span class="bg-info p-2" style="font-size:15px; border-radius:8px;">canceled</a></span> 
                                   ';                           
                                   }

                                  else
                                  {
                                    echo '
                                    <span> <a href="'. base_url().'status/'.$r->le_id.'/'.$r->lid.'/'.$r->total_day.'/'.$r->eid.'" class="btn btn-outline-primary"data-toggle="tooltip" data-placement="bottom" title="Approve Leave">Approve</a></span>
                                    <span>  <a href="'. base_url().'statusreject/'.$r->le_id.'" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="Reject Leave">Reject</a></span>';
                                  }
                                  ?>
                                    <?php
                                    echo "</tr>";
                                    $i++;
                                  }
                                }
                               
                                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Leave type</th>
                        <th>Reason</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Total days</th>
                        <th>submit date</th>
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
<script src="<?php echo base_url(); ?>asset/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/pdfmake/vfs_fonts.js"></script>
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

                    
                 