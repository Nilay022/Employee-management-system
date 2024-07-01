
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
     <a href="#" class="brand-link">
        <img src="<?php echo base_url(); ?>asset/dist/img/logo.png" data-toggle="tooltip" data-placement="top" title="Logo" alt="AdminLTE Logo" class="brand-image img-squar elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">CYPER CRAFT</span>
     </a>
            <!-- Sidebar -->
            <div class="sidebar">
              
              <!-- Sidebar user panel (optional) -->
                  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() ?>image/<?php print_r($this->session->userdata('user')['image']); ?>" data-toggle="tooltip" data-placement="bottom" title="Profile" class="img-circle  elevation-4" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo base_url(); ?>home" data-toggle="tooltip" data-placement="bottom" title="Username" class="d-block"> 
                          <?php print_r($this->session->userdata('user')['name']); ?>

                        </a>
                  </div>
              </div>   
               <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                       <li class="nav-item menu-open">
                          <a href="<?php echo base_url(); ?>home" data-toggle="tooltip" data-placement="bottom" title="Employee Dashboard" class="nav-link <?php if($page == 'home') echo "active"; ?> mt-3">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                              Dashboard
                            </p>
                          </a>
                           <a href="<?php echo base_url(); ?>add_leave" data-toggle="tooltip" data-placement="bottom" title="Add leave" class="nav-link <?php if($page == 'add_leave') echo "active"; ?> mt-3">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                              Add Leave
                            </p>
                          </a>
                          <a href="<?php echo base_url(); ?>leave_list_emp" data-toggle="tooltip" data-placement="bottom" title="Leave List" class="nav-link <?php if($page == 'leave_list') echo "active"; ?> mt-3">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                              Leave List
                           </p>
                          </a>
                           <a href="<?php echo base_url(); ?>to_do_emp" data-toggle="tooltip" data-placement="bottom" title="to do List" class="nav-link <?php if($page == 'to_do') echo "active"; ?> mt-3">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                              To do
                           </p>
                          </a>
                          
                          <?php 
                          if($this->session->userdata('user')['eid'] && $this->session->userdata('user')['mid'] == 1) 
                            {
                                if($this->session->userdata('user')['view_id'] == 1){
                                  echo '
                             <a href="'.base_url().'listing" data-toggle="tooltip" data-placement="bottom" title="Logout" class="nav-link mt-3">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                            Employee list
                            </p>
                          </a>';
                           // if($page == 'employee_list') echo "class='active'";
                                }
                            }

                            if($this->session->userdata('user')['eid'] && $this->session->userdata('user')['mid'] == 1) 
                            {
                              if($this->session->userdata('user')['add_id'] == 1){
                                  echo '
                             <a href="'.base_url().'add_employee" data-toggle="tooltip" data-placement="bottom" title="Logout" class="nav-link mt-3">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                            Add Employee 
                            </p>
                          </a>';
                          // if($page == 'add_employee') echo "class='active'";
                                }
                            }
                            
                            if($this->session->userdata('user')['eid'] && $this->session->userdata('user')['mid'] == 2) 
                            {

                              if($this->session->userdata('user')['view_id'] == 1){
                                  echo '
                             <a href="'.base_url().'department" data-toggle="tooltip" data-placement="bottom" title="Logout" class="nav-link mt-3">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                            department list 
                            </p>
                          </a>';
                          // if($page == 'department_list') echo "class='active'";
                            }
                          }

                            ?>
                         <?php 
                           if ($this->session->has_userdata('user')){
                            echo '
                             <a href="'.base_url().'logout" data-toggle="tooltip" data-placement="bottom" title="Logout" class="nav-link mt-3">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                            Logout
                            </p>
                          </a>';
                           }
                          ?>
                          
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
