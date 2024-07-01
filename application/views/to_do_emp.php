<?php $page = 'to_do'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee Dashboard</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/fontawesome-free/css/all.min.css">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/ekko-lightbox/ekko-lightbox.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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

<!-- Sidebar Menu -->
<?php include 'sidebar_emp.php'; ?>
<!-- sidebar end -->
  
  <div class="content-wrapper pt-3">
    <section class="content pb-3">
      <div class="container-fluid h-100">
        <div class="card card-row card-secondary">
          <div class="card-header">
            <h3 class="card-title">
              Assigned to me
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="card-title">Tasks</h5>
                <div class="card-tools">

                </div>
              </div>
                <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                   <?php $i = 1; if(!empty($assign)) { foreach($assign as $data) { ?>
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                     <div class="icheck-primary d-inline ml-2">
                                            <input <?php echo "onclick=updatetask('".$data->tid."')";?>  type="checkbox" name="<?php echo 'todo'.$i ?>"
                                                id=<?php echo 'todoCheck'.$i; ?>
                                                <?php if($data->status == 1) echo 'disabled'; ?>>
                                            <label for="<?php echo 'todoCheck'.$i; ?>"></label>
                                        </div>
                    <!-- todo text -->
                    <span class="text"><?php echo $data->task; ?></span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i><?php echo $data->due_date; ?></small>
                    
                  </li>
                <?php $i++; } } else { echo "No TASK"; } ?>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="card card-row card-primary">
          <div class="card-header">
            <h3 class="card-title">
              My day
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">My Tasks</h5>
                <div class="card-tools">
                  <a href="#"  data-toggle="modal" data-target="#exampleModal" class="fa fa-plus mr-2">
                  </a>
                </div>
              </div>
                <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <?php $i=1; if(!empty($mytask)) { foreach ($mytask as $data) { ?>
                  
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                                            <input <?php echo "onclick=updatetask('".$data->tid."')";?>  type="checkbox" name="<?php echo 'todo'.$i ?>"
                                                id=<?php echo 'todoCheck'.$i; ?>
                                                <?php if($data->status == 1) echo 'disabled'; ?>>
                                            <label for="<?php echo 'todoCheck'.$i; ?>"></label>
                                        </div>
                    <!-- todo text -->
                    <span class="text"><?php echo $data->task; ?></span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i><?php echo $data->due_date; ?></small>
                    <!-- General tools such as edit or delete-->
                   <div class="tools">
                      <a href='<?php echo base_url(); ?>edittaskemp/<?php echo $data->tid; ?>'><i class="fas fa-edit"></i></a>
                      <a href='<?php echo base_url(); ?>deletetaskemp/<?php echo $data->tid; ?>'><i class="fas fa-trash"></i></a>
                    </div>
                  </li>
                <?php $i++; } } else echo "No TASK"; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
         <div class="card card-row card-success">
          <div class="card-header">
            <h3 class="card-title">
              Completed 
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Completed task</h5>
          
              </div>
               <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <?php if(!empty($complete)) { foreach($complete as $data) { ?>
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- todo text -->
                    <span class="text"><?php echo $data->task; ?></span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i><?php echo $data->due_date; ?></small>
                                
                  </li>
                <?php } } else { echo "NO TASK"; } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
       </div>
    </section>
  </div>

<!-- employee to do add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                      </div>
                         <div class="modal-body">
                            <section class="content">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card card-outline card-info">
                                    <div class="card-header">
                                     <form action="<?php echo base_url(); ?>task_emp" method="post">
                                          <?php 
                                          if(!empty($detail)){
                                          foreach($detail as $d) { ?> 

                                          <input type="hidden" name="assign" value="<?php echo $d->eid; ?>">

                                          <input type="hidden" name="create" value="<?php echo $d->eid; ?>">
                                          <?php } } ?>
                                        <div class="form-group">
                                         <label>Task</label>
                                        <input type="text" name="task" required class="form-control" placeholder="Enter task">
                                        </div>

                                      <div class="form-group">
                                        <label >start date</label>
                                        <input type="date" name="start_date" required  class="form-control">
                                      </div>

                                      <div class="form-group">
                                        <label>due date</label>
                                        <input type="date" name="due_date" required class="form-control"></input>
                                      </div>
                                    </div>
                                   </div>
                                </div>
                              </div>
                            </section>
                              <div class="modal-footer">
                              <input  type="submit" name="send" value="Add"  data-toggle="tooltip" data-placement="bottom" title="Add Task"  class="btn btn-primary">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                             </form>
                      </div>
                    </div>  
                  </div>
                </div>

<!-- footer -->
<div>
<?php include 'footer.php' ?>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?php echo base_url(); ?>asset/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="<?php echo base_url(); ?>asset/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<!-- Page specific script -->
<script type="text/javascript">
  
  function updatetask(tid) {
       const key = {'tid':tid};
    $.ajax({
      url: "<?php echo base_url('To_do/updatetask') ?>",
      type: "POST",
      data: key,
      dataType: "json",            
       success: function(response)
       { 
          if(response.status == 1)
          {
             location.reload();
          }
          else
          {
            alert('Something wrong');
          }
        }
     });

  } 


</script>

</script>
</body>
</html>
