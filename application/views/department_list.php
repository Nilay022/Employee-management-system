<?php $page = 'department_list' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Department List</title>

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
            <a href="#" class="nav-link">Home</a>
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
<!-- sidebar Menu end -->

     <!--Department list table -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card" style="width: 85%; margin-left: 15%;">
                <div class="card-header">
                  <h3 class="card-title mt-3 ml-3">Department List</h3>
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Sr No.</th>
                          <th>Department</th>
                          <th>Employee name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <?php
                        $i=1;
                          if(!empty($dept)){
                            foreach($dept as $data){
                                echo "<tr>";
                                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;".$i."</td>";
                                echo "<td>".$data->department_name."</td>";
                                echo "<td>".$data->name."</td>"; 
                                 if($this->session->userdata('user')){ 

                                 if($this->session->userdata('user')['edit_id'] == 1){

                                   if($data->emp_status == 0) {

                                        echo '<td>
                                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                 <button type="button" class="dropdown-item" onclick="edit_dept('.$data->eid.')" data-toggle="modal" data-target="#editmodal">
                                                    Edit
                                                  </button>

                                                  <a class="dropdown-item" href="'.base_url().'emp_active/'.$data->eid.'">Active</a>
                                                </div>
                                                </td>'
                                        ;
                                        }
                                        else
                                         {
                                        echo '<td>
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <button type="button" class="dropdown-item" onclick="edit_dept('.$data->eid.')" data-toggle="modal" data-target="#editmodal">
                                                    Edit
                                                  </button>               
                                                  <a class="dropdown-item" href="'.base_url().'emp_inactive/'.$data->eid.'">Inactived</a>
                                                </div>
                                                </td>';
                                          }
                                      }
                                  }
                                  else 
                                  {
                                     if($data->emp_status == 0){
                                      echo '<td>
                                              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                               <button type="button" class="dropdown-item" onclick="edit_dept('.$data->eid.')" data-toggle="modal" data-target="#editmodal">
                                                  Edit
                                                </button>

                                                <a class="dropdown-item" href="'.base_url().'emp_active/'.$data->eid.'">Active</a>
                                              </div>
                                              </td>'
                                      ;
                                      }
                                      else
                                      echo '<td>
                                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <button type="button" class="dropdown-item" onclick="edit_dept('.$data->eid.')" data-toggle="modal" data-target="#editmodal">
                                                  Edit
                                                </button>               
                                                <a class="dropdown-item" href="'.base_url().'emp_inactive/'.$data->eid.'">Inactived</a>
                                              </div>
                                              </td>';
                                        }

                            $i++;
                          }
                        }
                        else{
                          echo "No data found";
                        }

                        ?>
                    </tbody>
                      <tfoot>
                        <tr>
                            <th>Sr No.</th>
                            <th>Department</th>
                            <th>Employee name</th>
                            <th>Action</th>
                        </tr>
                      </tfoot>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Department list table end -->

<!-- Department employee list table -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card" style="width: 85%; margin-left: 15%;">
              <div class="card-header">
                <h3 class="card-title mt-3 ml-3">Department Employee List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                            $i=1;
                            foreach($department as $data){
                                echo "<tr>";
                                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;".$i."</td>";
                                echo "<td>".$data->department_name."</td>";

                                if($this->session->userdata('user')) { 

                                   if($this->session->userdata('user')['edit_id'] == 1){

                                      if($data->dept_status == 0 )
                                       {
                                       echo '<td>
                                      <a class="btn btn-danger" href="'.base_url().'department_active/'.$data->dp_id.'">Active</a>
                                              </td>';
                                       }
                                      else{
                                      echo '<td>
                                       <a class="btn btn-primary" onclick="unactive()" href="'.base_url().'department_inactive/'.$data->dp_id.'">Inactive</a>
                                     </td>'; 
                                      } 
                                 }
                              }
                             else {

                                  if($data->dept_status == 0)
                                {
                                echo '<td>
                                <a class="btn btn-danger" href="'.base_url().'department_active/'.$data->dp_id.'">Active</a>
                                        </td>';
                                }
                                else
                                echo '<td>
                                 <a class="btn btn-primary" onclick="unactive()" href="'.base_url().'department_inactive/'.$data->dp_id.'">Inactive</a>
                               </td>'; 
                             }
                            $i++;
                              }

                             ?>
                  </tbody>
                    <tfoot>
                      <tr>
                        <th>Sr No.</th>
                        <th>Department</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- department employee list talbe end -->

<!-- footer -->
<?php include 'footer.php' ?>
<!-- footer end -->
                
<!-- edit department Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="editdata" action="<?php echo base_url() ?>update_dept" method="post">
          <div class="form-group">
              <label>Department</label>
              <input type="hidden" id="eid" name="eid">
              <select name="dept" id="department" required class="form-control">
                  <option value="" selected disabled readonly>Select Department</option>
                   <?php

                   if(!empty($department)){
                   foreach($department as $d) { ?>

                      <option value="<?php echo $d->dp_id; ?>"><?php echo $d->department_name;  ?></option>

                  <?php } }?> 
              </select>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="stylesheet" name="add" class="btn btn-primary">Update</button>
      </div>
       </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit modal end -->
        
         
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

<script type="text/javascript">

  function edit_dept(id)
  {
     $.ajax({
       url: "<?php echo base_url('Home/edit_department') ?>",
       method: "POST",
       data:  {'eid':id},
       dataType: "json",
       success:function(response)
       {
           $('#eid').val(id);
       }
      })
  }

</script>
</body>
</html>

                    
                 