<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('home')); ?>" class="brand-link">
      <img src="<?php echo e(asset('images/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">JpWeb</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if(Auth::user()->image): ?>
            <img src="<?php echo e(asset('images/'.Auth::user()->image)); ?>" class="img-circle elevation-2" alt="User Image">
          <?php else: ?>
              <img src="<?php echo e(asset('images/avatar5.png')); ?>" class="img-circle elevation-2" alt="User Image">
          <?php endif; ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
          <img src="<?php echo e(asset('images/34211_green_icon.png')); ?>" class="online-img" alt="online"> <a><small>Online</small></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?php echo e(url('home')); ?>" class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('projects')); ?>" class="nav-link <?php echo e(Request::is('projects') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-layer-group"></i>
                  <p>Projects</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('users')); ?>" class="nav-link <?php echo e(Request::is('users') ? 'active' : ''); ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Users</p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH /home/jpwebhos/public_html/dev.jpwebhosting.co.uk/qasystemfiles/resources/views/navigation/index.blade.php ENDPATH**/ ?>