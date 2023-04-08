

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"></h1>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
           
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit User</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?php echo e(route('updateprofile.update',$user->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="row">
                    <div class="form-group" hidden>
                        <label>Id</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($user->id); ?>">
                    </div>

                    <div class="form-group col-6">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>">
                    </div>
                    <div class="form-group col-6">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small><i>Leave this if you dont want to change your password</i></small>
                    </div>
                    <div class="form-group col-6">
                        <label>Avatar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="image" onchange="displayImg(this,$(this))">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center">
                            <?php if($user->image): ?>
                                <img src="<?php echo e(asset ('images/'.$user->image)); ?>" alt="Avatar" id="cimg" class="img-fluid img-thumbnail">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/avatar5.png')); ?>" id="cimg" class="img-fluid img-thumbnail" alt="Avatar">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.content -->

<script src="<?php echo e(asset('js/bs-custom-file-input.min.js')); ?>"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });

    function displayImg(input,_this) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#cimg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\ishan\projects\Qa\resources\views/updateprofile/index.blade.php ENDPATH**/ ?>