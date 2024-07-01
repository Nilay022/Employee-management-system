<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>asset/dist/img/logo.png" alt="AdminLTE Logo" data-toggle="tooltip" data-placement="bottom" title="Company profile" class="brand-image img-squar elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" data-toggle="tooltip" data-placement="bottom" title="Company name">CYPER CRAFT</span>
    </a>

     <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
            <div class="image">
          <img src="<?php echo base_url(); ?>image/IMG_0030.JPG" data-toggle="tooltip" data-placement="bottom" title="profile" class="img-circle  elevation-4" alt="User Image">
        </div>
        <div class="info">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="username" class="d-block">
          
             Nilay Chotaliya
          </a>
        </div>
      </div>

 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="<?php echo base_url();?>hrpanel" data-toggle="tooltip" data-placement="bottom" title="HR Dashboard" class="nav-link  <?php if($page == 'hrpanel') echo "active"; ?> mt-3">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            <li class="nav-item menu-close mt-3">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>add_employee" data-toggle="tooltip" data-placement="bottom" title="Add Employee" class="nav-link  <?php if($page == 'add_employee') echo "active"; ?> mt-3">
                 <i class="nav-icon fa fa-user-plus"></i>
                  <p>Add employee</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo base_url();?>listing" data-toggle="tooltip" data-placement="bottom" title="Employee List" class="nav-link  <?php if($page == 'employee_list') echo "active"; ?> mt-3">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Employee list
              </p>
            </a>  
              </li>
              <li class="nav-item">
            <a href="<?php echo base_url();?>leave_list" data-toggle="tooltip" data-placement="bottom" title="Leave list" class="nav-link  <?php if($page == 'leave_list') echo "active"; ?>  mt-3">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Leave list
              </p>
              </a>
              </li>
               <li class="nav-item">
            <a href="<?php echo base_url();?>department" data-toggle="tooltip" data-placement="bottom" title="Leave list" class="nav-link  <?php if($page == 'department_list') echo "active"; ?> mt-3">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Department list
              </p>
              </a>
              </li>
            </ul>
          </li>
           <li class="nav-item menu-close mt-3">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                To do
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>add_task" data-toggle="tooltip" data-placement="bottom" title="Add task" class="nav-link  <?php if($page == 'add_task') echo "active"; ?> mt-3">
                 <i class="nav-icon fa fa-user-plus"></i>
                  <p>Add task</p>
                </a>
              </li>
               <li class="nav-item">
                  <a href="<?php echo base_url(); ?>task_list" data-toggle="tooltip" data-placement="bottom" title="task List" class="nav-link 
                   <?php if($page == 'task_list') echo "active"; ?> mt-3">
              <i class="nav-icon fa fa-list"></i>
              <p>
                task list
              </p>
            </a>
              </li>
            </ul>
          </li>
           <li class="nav-item menu-close mt-3">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Permission
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item mt-3">
               <a href="<?php echo base_url(); ?>permission" data-toggle="tooltip" data-placement="bottom" title="Add permission" class="nav-link  <?php if($page == 'add_permission') echo "active"; ?>">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add Permission
              </p>
            </a>
             </li>
            </ul>
          </li>
           <li class="nav-item menu-close mt-3">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Attendance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item mt-3">
            <a href="<?php echo base_url(); ?>attendance" data-toggle="tooltip" data-placement="bottom" title="Add attendance" class="nav-link  <?php if($page == 'attendance') echo "active"; ?>">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Attendance
              </p>
            </a>
          </li>
           <li class="nav-item mt-3">
            <a href="<?php echo base_url(); ?>attendance_view" data-toggle="tooltip" data-placement="bottom" title="Attendance List" class="nav-link  <?php if($page == 'attendance_view') echo "active"; ?>">
            <i class="nav-icon fas fa-list"></i>
              <p>
                Attendance List
              </p>
            </a>
          </li>
            </ul>
          </li>
          <li class="nav-item mt-3">
            <a href="<?php echo base_url(); ?>activity_log" data-toggle="tooltip" data-placement="bottom" title="Records" class="nav-link  <?php if($page == 'activity_log') echo "active"; ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Activity Log
              </p>
            </a>
          </li>
          <li class="nav-item">
            <?php 
             if ($this->session->has_userdata('hr')){
              echo '
               <a href="'.base_url().'logouthr" data-toggle="tooltip" data-placement="bottom" title="Logout" class="nav-link mt-3">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Logout
              </p>
            </a>';
             }
            ?>
            </li>

          </li>

        </ul>
      </nav>
       </div>
    
</aside>