<?php 
$asidebar = '<aside class="main-sidebar sidebar-dark-primary elevation-4">'.
            '<a href="" class="brand-link">'.
            '<img src="https://phfiles.com/img/favicon.png"'.
                 'alt="AdminLTE Logo"'.
                 'class="brand-image img-circle elevation-3"'.
                 'style="opacity: .8">'.
            '<span class="brand-text font-weight-light"> '.$system_name.'</span>'.
          '</a>'.
          ' <div class="sidebar">'.
          '<div class="user-panel mt-3 pb-3 mb-3 d-flex">'.
            '<div class="image">'.
              '<img src="'.$url.'assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">'.
            '</div>'.
            '<div class="info">'.
              '<a href="#" class="d-block">Alexander Pierce</a>'.
            '</div>'.
          '</div>'. 
          '<nav class="mt-2">'.
          '<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">';
          echo $asidebar;
?>
      <!-- Sidebar Menu -->      
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="file" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                My Files
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-share"></i>
              <p>
                Shared
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="SharedFile" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shared File</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="FileLinkedUs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File Linked Us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="Trash" class="nav-link">
              <i class="nav-icon fas fa-trash"></i>
              <p>
                Trash file
              </p>
            </a>
          </li>
          <li class="user-panel nav-item has-treeview">
            <a href="Trash" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Upgrade Storage
              </p>
            </a>
          </li>
          <li class="user-panel nav-item has-treeview">
            <a href="Usedstorage" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                20GB Used
              </p>
            </a>
          </li>
          <li class="user-panel nav-item has-treeview">
            <a href="Unusedstorage" class="nav-link">
              <i class="nav-icon fas fa-circle text-info"></i>
              <p>
                20GB Unused
              </p>
            </a>
          </li>
          <li class="user-panel nav-item has-treeview">
            <a href="logout" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
          <li class="user-panel nav-item has-treeview">
            <a class="nav-link">
              <i class="nav-icon fas fa-server"></i>
                <progress min="0" max="20" value="10"></progress><br/>
                <center><label>10GB / 20GB</label></center>
            </a>
          </li>
     





      <?php
      echo ' </ul>    </nav> </div>     </aside>';
   