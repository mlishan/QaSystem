

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/buttons.bootstrap4.min.css')); ?>">

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
        <h1 class="m-0">Projects</h1>
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
           
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-layer-group"></i> Add New Project
        </button>

        <!-- Modal save-->
        <?php echo $__env->make('projects.saveForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- Modal delete-->
        <?php echo $__env->make('projects.deleteForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 custom-margin">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Project Progress</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped projects">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Project</th>
                    <th>Project Owner</th>
                    <th>Progress</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($project->id); ?></td>
                          <td><a><?php echo e($project->name); ?></a>
                              <br/>
                              <small class="text-muted"><b>Started Date: <?php echo e($project->start_date); ?></b></small>
                          </td>
                          <td>
                              <ul class="list-inline">
                                  <li class="list-block-item">
                                    <?php if($project->owner?->image): ?>
                                      <img alt="Avatar" class="table-avatar" src="<?php echo e(asset('images/'.$project->owner?->image)); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('images/avatar5.png')); ?>" class="table-avatar" alt="User Image">
                                    <?php endif; ?>
                                  </li>
                                  <li class="list-block-item">
                                    <?php echo e($project->owner?->name); ?>

                                  </li>
                              </ul>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($project->progress()); ?>%">
                                  </div>
                              </div>
                              <small>

                                  <?php echo e($project->progress()); ?>% Complete
                                  
                              </small>
                          </td>
                          <td class="project-state">
                            <?php if($project->status == 0): ?>
                              <span class="badge badge-secondary">Pending</span>
                            <?php elseif($project->status == 1): ?>
                              <span class="badge badge-primary">On-Progress</span>
                            <?php elseif($project->status == 2): ?>
                              <span class="badge badge-success">Done</span>  
                            <?php endif; ?>
                          </td>
                          <td class="project-actions text-right">
                              <a class="btn btn-primary btn-sm" href="<?php echo e(url('viewprojects/'.$project->id)); ?>">
                                  <i class="fas fa-folder">
                                  </i>
                                  View
                              </a>
                              <a class="btn btn-info btn-sm" href="<?php echo e(url('editprojects/'.$project->id)); ?>">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($project->id); ?>">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </button>
                          </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Project</th>
                    <th>Project Owner</th>
                    <th>Progress</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

      </div>
    </div>
  </div>
</div>
<!-- /.content -->

<script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/buttons.colVis.min.js')); ?>"></script>

<!-- Select2 -->
<script src="<?php echo e(asset('js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/summernote-lite.min.js')); ?>"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



<script>

  //delete project
  $('.btn-danger').click(function() {
      var id = $(this).data('id');  
      $('#id').val(id);  
  });

  $('.select2').select2();

  //Date picker
  $("#sartdatepicker").datepicker({ 
        format: 'yyyy/mm/dd',
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());

  $("#enddatepicker").datepicker({ 
        format: 'yyyy/mm/dd',
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());

  // Summernote
  $('#description').summernote({
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
  });

  //dataTable
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
</script>


<!-- save project details -->

<script src="<?php echo e(asset('js/function/projectSave.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jpwebhos/public_html/dev.jpwebhosting.co.uk/qasystemfiles/resources/views/projects/index.blade.php ENDPATH**/ ?>