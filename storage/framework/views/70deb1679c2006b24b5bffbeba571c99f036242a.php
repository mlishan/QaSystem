<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="app-url" content="<?php echo e(env('APP_URL')); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/sweetalert2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/stylesheet.css')); ?>">

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Header -->
    <?php echo $__env->make('header.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Navigation -->
    <?php echo $__env->make('navigation.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php echo $__env->make('footer.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<!-- ./wrapper -->

<script src="<?php echo e(asset('js/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
</script>

<script>
    // CSRF for all ajax call
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
</script>
</body>
</html>
<?php /**PATH C:\Users\Lenovo\Documents\ishan\projects\Qa\resources\views/layouts/master.blade.php ENDPATH**/ ?>