<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HR login</title>

<!-- Google Font: Source Sans Pro -->
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
<!-- css -->
<style type="text/css">
@import "bourbon";

body {
  background: #eee !important;  
}

.wrapper {  
  margin-top: 140px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
  
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 <!--  -->
   <div class="wrapper">
    <form class="form-signin" method="post" name="form" onsubmit="return (login())" action="<?php echo base_url();?>login">       
      <h2 class="form-signin-heading">HR login</h2>
      <!-- alert message -->
        <?php
          if ($this->session->tempdata('item')) {
             print_r($this->session->tempdata('item')['message']);
             echo "<br>";
          }
        ?>
      <!-- login form -->
      <label class="form-label mt-3">Email:</label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required="" autofocus="" />
          <span><?php echo form_error('email'); ?></span>
      <label class="form-label mt-3">Password:</label>
          <input type="password" class="form-control mt-3" name="password" id="password" required="" placeholder="Password" /> 
          <span><?php echo form_error('password'); ?></span>      
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>   
    </form>
    <!-- login form end -->
  </div>
</div>
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
</body>
</html>
