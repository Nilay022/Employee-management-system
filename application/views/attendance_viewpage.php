<?php $page = 'attendance_view'; 
$year = explode("-",$date)[0];
$month = explode("-",$date)[1];
$datamonth = cal_days_in_month(CAL_GREGORIAN,$month,$year);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Attendance</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">    
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/fontawesome-free/css/all.min.css">
<!-- fullCalendar -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/fullcalendar/main.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/adminlte.min.css">
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
  
<!-- Sidebar Menu -->
<?php include 'sidebar.php';  ?>
<!-- Sidebar Menu end -->


<!-- Attendance list table -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card" style="width: 85%; margin-left: 15%;">
              <div class="card-header">
                <h3 class="card-title mt-3 ml-3">Attendance List</h3>
              </div>
              <form action="<?php echo base_url(); ?>attendance_view" method="POST">
                <label class="ml-4" for="bdaymonth">Select month and year:</label>
                <input type="month" class="mt-3" required name="date" value="<?php if(!empty($date)) { echo $date; } else { echo date('Y-m'); }  ?>">
                <input class="btn btn-primary ml-2" type="submit" value="search">
              </form>
              <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   <tr>
                        <th>Employee</th>  
                        <?php 
                        $i=01; for($i; $i <= $datamonth; $i++) {
                        $dates = $year."-".$month."-".$i;
                         ?>
                        <th><?php echo explode("-",$dates)[2]; ?></th>             
                        <?php } ?>
                       
                      </tr>
                    </thead>
                  <tbody>
                    <?php foreach ($record as $data) {  ?>
                      <tr>
                        <td>
                     
                            <img src="<?php echo base_url(); ?>image/<?php echo $data->image?>" class="img-circle"  data-toggle="tooltip" style="width:40px; height: 40px;" data-placement="bottom" title="Profile">
                            <a href="<?php echo base_url(); ?>listing" class="text-dark"><?php echo $data->name;  ?></a>
                            
                        </td>  
                          <?php 
                          $i=01; for($i; $i <= $datamonth; $i++) {
                          $dates = $year."-".$month."-".$i;
                          $date2 = date("Y-m-d", strtotime($dates));
                           ?>
                        <td>
                          <?php 
                          foreach ($attendance as $dataatt) 
                          {
                              if($dataatt->eid == $data->eid)
                              {
                                  if(strtotime($dataatt->date) == strtotime($date2))
                                  {
                                      if($dataatt->present == 1)
                                      {
                                        echo "<i class='fa fa-check' style='color:green'>";
                                      }
                                      else
                                      {
                                        echo "<i class='fa fa-times' style='color:red'>";
                                      }
                                  }
                              
                               }
                            }
                           ?>
                        </td> 
                        <?php  }  ?>

                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Attendance list table end -->

       
<!-- footer -->
<div>
<?php include 'footer.php' ?>
</div>
<!-- footer end -->
                
<script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
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