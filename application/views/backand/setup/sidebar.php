 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
         <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $this->session->userdata('nama_depan');?> <?php echo $this->session->userdata('nama_belakang');?></p>
          <p class="app-sidebar__user-designation"><?php echo $this->session->userdata('email');?></p>
        </div>
      </div>
               
        
      </div>
      
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo base_url()?>auth"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Personal</span><i class="treeview-indicator fa fa-user-right"></i></a>
          <ul class="treeview-menu">
           
            <li><a class="treeview-item" href="<?php echo base_url()?>profile" ><i class="icon fa fa-user-circle-o"></i> Profile</a></li>
            <li><a class="treeview-item" href="<?php echo base_url()?>education"><i class="icon fa fa-graduation-cap"></i> Education </a></li>
            <li><a class="treeview-item" href="<?php echo base_url()?>works"><i class="icon fa fa-user-plus"></i> Work Experience</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Job</span></a></li>
    
  
      </ul>
    </aside>