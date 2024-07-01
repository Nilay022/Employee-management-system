<?php $page = 'hrpanel'; ?>
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
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/codemirror/theme/monokai.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/codemirror/codemirror.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/simplemde/simplemde.min.css">
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

    <!-- Right navbar links  -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li>
      <!-- notification -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" data-toggle="tooltip" data-placement="bottom" title="Notifications" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">
            <?php if(!empty($note)){ foreach ($note as $con) {
                echo $con;
                       ?>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $con; } } ?> Notifications</span>
          <?php if(!empty($des))
           {
            foreach ($des as $b)
             { ?>
         <div class="dropdown-divider"></div>
          <a href="<?php echo base_url(); ?>readed/<?php echo $b->nid; ?>" class="dropdown-item">
           <?php
            if($b->status == 0)
               echo $b->notification;

                 }
                 ?>
          </a>
              <?php }
              else
              echo "No Data";
              ?>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url(); ?>read" class="dropdown-item dropdown-footer">Read</a>
          <a href="<?php echo base_url(); ?>unread" class="dropdown-item dropdown-footer">Unread</a>
        </div>
      </li>


    </ul>
  </nav>
</div>

      <!-- Sidebar Menu -->
         <?php include 'sidebar.php'; ?>

   
    <!-- /.sidebar menu -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <?php
                foreach ($employee as $con) { ?>

                <h3>
                  <?php echo $con; ?>
                </h3>
                <?php }  ?>
                <p>Employee</p>
              </div>
              <div class="icon">
                <i class="ion ion-man"></i>
              </div>
              <a href="<?php echo base_url();?>listing" data-toggle="tooltip" data-placement="bottom" title="Employee List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                foreach ($approve as $con) { ?>

                <h3>
                  <?php echo $con; ?>
                </h3>
                <?php }  ?>
                <p>Aprroved leave</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>leave_list" data-toggle="tooltip" data-placement="bottom" title="Leave List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                 foreach ($pending as $con) { ?>

                <h3>
                  <?php echo $con; ?>
                </h3>
                <?php }  ?>
                <p>Pending leave</p>
              </div>
              <div class="icon">
                <i class="fa fa-hourglass-start"></i>
              </div>
              <a href="<?php echo base_url(); ?>leave_list" data-toggle="tooltip" data-placement="bottom" title="Leave List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>leave_list" data-toggle="tooltip" data-placement="bottom" title="Leave List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

<!-- Add message -->
          <div class="card">
              <div class="card-header">
                <div class="col">
                <h2 class="card-title mt-1" style="font-size: 20px;">Messages</h2>
                <button class=" card-title ml-3 btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Add message" data-bs-toggle="modal"  data-bs-target="#exampleModal">
                  <i class="fa fa-plus"></i>
                     Add message
                    </button>
                </div>
          <!-- ./col -->
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
              <!-- message display -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <?php foreach ($massage as $m) { ?>
                  <li class="item">
                    <div class="product-img">
                      <img src="<?php echo base_url(); ?>image/<?php echo $m->hr_image; ?>"  alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"><?php echo $m->hr_name; ?>
                        </a>
                      <span class="product-description">
                       <?php echo $m->message; ?>
                      </span>
                      <span class="">
                       <?php echo $m->date; ?>
                      <a href='<?php echo base_url() .'delete_message/'.$m->mid ?>'><i class="fas fa-times float-right"></i></a>
                      </span>
                    </div>
                      
                  </li>
                <?php } ?>

                  </ul>
              </div>

          </div>
          <!-- Message end -->
        </div>

        <!-- to do list -->
         <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <?php $i=1; if(!empty($task)){ foreach($task as $t) { ?>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                  
                    <!-- todo text -->
                   <a href="<?php echo base_url(); ?>task_list"> <span class="text-dark font-weight-bold"><?php echo $t->task; ?></span></a>
                    <small class="badge badge-danger"><i class="far fa-clock"></i> <?php echo $t->due_date; ?></small>

                  </li>
                <?php $i++; } } else { echo "No data Found"; } ?>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?php echo base_url(); ?>add_task" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add Task</a>
              </div>
            </div>
        <!-- To do list end -->
            <!-- /.card -->
          </section>

        <!-- message Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alert Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url(); ?>add_message" method="post">
                           <section class="content">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card card-outline card-info">
                                    <div class="card-header">
                                      <h3 class="card-title">
                                        Message
                                      </h3>
                                    </div>

                                    <div class="card-body">
                                      <textarea name="message" required id="summernote">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                      </textarea>
                                    </div>
                                   </div>
                                </div>
                              </div>
                            </section>

                           <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" hidden/>

                           <div class="form-group">
                            <label class="form-inline mt-3">Select Employee</label>
                              <select name="employee[]" id="employee" required multiple class="form-control">
                                 <?php

                                 if(!empty($emp)){
                                 foreach($emp as $employee) { ?>

                                    <option value="<?php echo $employee->eid; ?>"><?php echo $employee->name;  ?></option>

                                <?php } }?>
                              </select>
                                <label class="form-inline mt-3">
                                  <input type="checkbox" id="select_all" name="select_all" value="select_all">  Select all
                                </label>
                            </div>

                              <div class="modal-footer">
                              <button type="submit" name="send" class="btn btn-primary">Send</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
      <!-- Message modal end -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!-- footer -->
   <?php include 'footer.php' ?>
 <!-- footer end -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
 $('#select_all').click(function() {
    $('#employee option').prop('selected', true);
});
</script>
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

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>
