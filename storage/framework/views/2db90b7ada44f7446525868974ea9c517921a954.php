<?php $__env->startSection('content'); ?>


<!-- Select2 -->
<link rel="stylesheet" href="<?php echo e(asset('css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/select2-bootstrap4.min.css')); ?>">
<!-- summernote -->
<link rel="stylesheet" href="<?php echo e(asset('css/summernote-lite.min.css')); ?>">

<!-- daterange picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">

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

          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Project</h3>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="form-group" hidden>
                    <label>Id</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($projects->id); ?>">
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" name="name" id="name" value="<?php echo e($projects->name); ?>" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="0" <?php echo e($projects->status == 0 ? 'selected' : ''); ?>>Pending</option>
                      <option value="1" <?php echo e($projects->status == 1 ? 'selected' : ''); ?>>On-Progress</option>
                      <option value="2" <?php echo e($projects->status == 2 ? 'selected' : ''); ?>>Done</option>
                    </select>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Start Date: </label>
                    <div id="sartdatepicker" class="input-group date">
                        <input class="form-control datetimepicker-input" type="text" name="start_date" id="start_date">
                        <span class="input-group-addon input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>End Date: </label>
                    <div id="enddatepicker" class="input-group date">
                        <input class="form-control datetimepicker-input" type="text" name="end_date" id="end_date">
                        <span class="input-group-addon input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Project Owner</label>
                    <select class="form-control" id="owner_id" name="owner_id">
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>" <?php echo e($projects->owner_id == $user->id ? 'selected' : ''); ?>><?php echo e($user->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Team Members</label>
                    <div class="select2-purple">
                      <select class="select2" multiple="multiple" id="user_ids" name="user_ids[]" data-dropdown-css-class="select2-purple" style="width: 100%;">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>" <?php $__currentLoopData = $projects->users(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($team->id == $user->id ? 'selected' : ''); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>><?php echo e($user->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <label>Description</label>
                 <textarea id="description" name="description" ><?php echo e($projects->description); ?></textarea>
                </div>
              </div>
            </div>

            <div class="card-footer">
                <button type="button" class="btn btn-primary" id="butedit">Update</button>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
<!-- /.content -->

<!-- Select2 -->
<script src="<?php echo e(asset('js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/summernote-lite.min.js')); ?>"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



<script>
  $('.select2').select2();

  //Date picker
  $("#sartdatepicker").datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true,
        // setDate: <?php echo e($projects->start_date); ?>

  }).datepicker('setDate', '<?php echo e($projects->start_date); ?>');

  $("#enddatepicker").datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true
  }).datepicker('setDate', '<?php echo e($projects->end_date); ?>');

  // Summernote
  $('#description').summernote({
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
  });
</script>


<!-- save project details -->

<script src="<?php echo e(asset('js/function/projectEdit.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\ishan\projects\Qa\resources\views/projects/editprojects.blade.php ENDPATH**/ ?>