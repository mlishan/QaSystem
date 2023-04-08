

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <!-- <div class="row">
      <div class="col-lg-12">
        <div class="callout callout-success">
          <h5>Welcome <?php echo e(Auth::user()->name); ?> !</h5>
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?php echo e($projects); ?></h3>

            <p>Total Projects</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo e(url('projects')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo e($user); ?></h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo e(url('users')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-warning">
            <div class="widget-user-image">
              <?php if(Auth::user()->image): ?>
                <img src="<?php echo e(asset('images/'.Auth::user()->image)); ?>" class="img-circle elevation-2 dashImg" alt="User Image">
              <?php else: ?>
                  <img src="<?php echo e(asset('images/avatar5.png')); ?>" class="img-circle elevation-2 dashImg" alt="User Image">
              <?php endif; ?>
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username"><?php echo e(Auth::user()->name); ?></h3>
            <h5 class="widget-user-desc">Developer</h5>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Projects <span class="float-right badge bg-primary"><?php echo e($ownerprojects); ?></span>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Completed Projects <span class="float-right badge bg-success"><?php echo e($completedProj); ?></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  On Progress Projects <span class="float-right badge bg-danger"><?php echo e($onprogressProj); ?></span>
                </a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
<!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jpwebhos/public_html/dev.jpwebhosting.co.uk/qasystemfiles/resources/views/home.blade.php ENDPATH**/ ?>