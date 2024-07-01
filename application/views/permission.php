<?php $page = 'add_permission'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
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

      <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li> 
    </ul>
  </nav>
 
      <!-- Sidebar Menu -->
        <?php include 'sidebar.php'; ?>

    <!-- /.sidebar Menu -->
 

   <h3 class="mt-3 mb-5" style="margin-left: 18%">Give Permission</h3>
    <form style=" width: 75% ; margin-left: 21%" name="form" method="post"  action="<?php echo base_url(); ?>add_permission" >

    <div class="form-group">
    <label>Employee</label>
    <select name="employee" required class="form-control">
                               <option value="" selected disabled readonly>Select Employee</option>
                                 <?php

                                 if(!empty($emp)){
                                 foreach($emp as $d) { ?>

                                    <option value="<?php echo $d->eid; ?>"><?php echo $d->name;  ?></option>

                                <?php } }?>
                              </select>
  </div>
  <div class="form-group">
  <label>Module</label>
  <select name="module" required class="form-control">
                               <option value="" selected disabled readonly>Select Module</option>
                                 <?php

                                 if(!empty($module)){
                                 foreach($module as $d) { ?>

                                    <option value="<?php echo $d->md_id; ?>"><?php echo $d->module_name;  ?></option>

                                <?php } }?>
                              </select>
  </div>
  <div class="form-group">
  <label >Permissions</label><br>

  <input type="checkbox" id="view" name="view" required value="1">
  <label for="view" class="mr-3"> View</label>

  <input type="checkbox" id="add" name="add"  value="1">
  <label for="Add" class="mr-3"> Add</label>

  <input type="checkbox" id="edit" name="edit"  value="1">
  <label for="Edit" class="mr-3">Edit</label>

  <input type="checkbox" id="delete" name="delete"  value="1">
  <label for="Delete"> Delete</label>
  </div>
  <button type="submit" name="stylesheet" data-toggle="tooltip" data-placement="bottom" title="Add permission" name="add" class="btn btn-primary mb-3">Add</button>
</form>
<hr>
<!-- permission list -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card" style="width: 85%; margin-left: 15%;">
              <div class="card-header">
                <h3 class="mt-3 ml-3">Permission List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Module</th>
                      <th>view</th>
                      <th>Add</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $i = 1;
                        foreach($list as $data)
                        { ?>
                      <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $data->name; ?></td>
                      <td><?php echo $data->module_name; ?></td>
                      <td><input type="checkbox" <?php if($data->permission_view == 1) { echo "checked "; } else{ echo "disabled";} ?> ></td>
                      <td><input type="checkbox" <?php if($data->permission_add == 1) { echo "checked"; } else{ echo "disabled";} ?> ></td>
                      <td><input type="checkbox" <?php if($data->permission_edit == 1) { echo "checked"; } else{ echo "disabled";} ?> ></td>
                      <td><input type="checkbox" <?php if($data->permission_delete == 1) { echo "checked"; } else{ echo "disabled";} ?> ></td>
                      <td> 
                        <button type="button" class="btn btn-primary" data-toggle="modal" onclick="edit_per('<?php echo $data->pid; ?>')" data-target="#exampleModal">
                        Edit
                        </button>  
                        <a href="<?php echo base_url(); ?>permission_delete/<?php echo $data->pid; ?>" data-toggle="tooltip" class="btn btn-danger" data-placement="bottom" title="Delete permission">Delete</a>
                      </td>
                      </tr>

                  <?php  

                  $i++;
                  }

                   ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Module</th>
                      <th>view</th>
                      <th>Add</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>action</th>
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
 <?php include 'footer.php'; ?>

  <!-- modal for edit -->
<!-- Modal -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Permission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <form method="post" action="<?php echo base_url(); ?>permission_update">
        <input type="hidden" id="pid" name="pid">
        <input type="hidden" name="eid" id="eid">
          <div class="form-group">
             <label>Module</label>
               <select name="module" required class="form-control">
                                 <option value="" selected disabled readonly>Select Module</option>
                                   <?php

                                   if(!empty($module)){
                                   foreach($module as $d) { ?>

                                      <option value="<?php echo $d->md_id; ?>"><?php echo $d->module_name;  ?></option>

                                  <?php } }?>
              </select>
        </div>
       <div class="form-group">

       <label >Permissions</label><br>

        <input type="checkbox" id="modal_view" name="view" value="1">
        <label for="view" class="mr-3"> View</label>

        <input type="checkbox" id="modal_add" name="add" value="1">
        <label for="Add" class="mr-3"> Add</label>

        <input type="checkbox" id="modal_edit" name="edit" value="1">
        <label for="Edit" class="mr-3">Edit</label>

        <input type="checkbox" id="modal_delete" name="delete" value="1">
        <label for="Delete"> Delete</label>

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
<!--   </div>
 --><!-- modal end -->

<!-- jQuery -->
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

    $('#edit,#add,#delete').change(function () 
    {
    ($(this).is(":checked") ? $('#view').prop("checked", true) :$('#view').prop("checked", false))
    });

     $('#modal_edit,#modal_add,#modal_delete').change(function () 
    {
    ($(this).is(":checked") ? $('#modal_view').prop("checked", true) :$('#modal_view').prop("checked", false))
    });

</script>

<script type="text/javascript">
                                  
  function edit_per(id)
  {
     $.ajax({
       url: "<?php echo base_url('Permission/edit_permission') ?>",
       method: "POST",
       data:  {'pid':id},
       dataType: "json",
       success:function(response)
       {  
           $('#pid').val(response[0].pid);
           $('#eid').val(response[0].eid);
       }
      })
  }
</script>
</body>
</html>
