

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>">

<!-- summernote -->
<link rel="stylesheet" href="<?php echo e(asset('css/summernote-lite.min.css')); ?>">



<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Project Detail</h1>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 custom-margin">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <input type="text" class="form-control" id="id" name="id" value="<?php echo e($project->id); ?>" hidden>

                <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="card-body box-profile">
                        <div class="text-center">
                            <?php if($project->owner?->image): ?>
                            <img alt="Avatar" class="profile-user-img img-fluid img-circle" src="<?php echo e(asset('images/'.$project->owner?->image)); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/avatar5.png')); ?>" class="profile-user-img img-fluid img-circle" alt="User Image">
                            <?php endif; ?>
                        </div>

                        <h3 class="profile-username text-center">Project Developer</h3>

                        <p class="text-muted text-center"><?php echo e($project->owner?->name); ?></p>
                      </div>
                      <!-- /.card-body -->
                    </div>

                   <div class="col-sm-6">
                        <div class="card card-outline card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Team Members</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body" style="display: block;">       
                            <ul class="users-list clearfix">
                                <?php $__currentLoopData = $project->users(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <img src="<?php echo e(asset('images/'.$user->image)); ?>" class="member-img" alt="User Image">
                                    <p><?php echo e($user->name); ?></p>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          </div>
                          <!-- /.card-body -->
                        </div>
                  </div>
                </div>

                

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-info"><i class="fas fa-layer-group"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-number">Project Name</span>
                            <span class="info-box-text"><?php echo e($project->name); ?></span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-success"><i class="far fa-clipboard"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-number">Description</span>
                            <span class="info-box-text"><?php echo $project->description; ?></span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-3">
                        <div class="info-box">
                          <span class="info-box-icon bg-warning"><i class="far fa-calendar-alt"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-number">Start Date</span>
                            <span class="info-box-text"><?php echo e($project->start_date); ?></span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="info-box">
                          <span class="info-box-icon bg-danger"><i class="far fa-calendar-alt"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-number">End Date</span>
                            <span class="info-box-text"><?php echo e($project->end_date); ?></span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                    </div> 

                    <div class="col-12 col-sm-3">
                        <div class="info-box">
                          <span class="info-box-icon bg-indigo"><i class="far fa-flag"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-number">Status</span>
                            <span class="info-box-number">
                                <?php if($project->status == 0): ?>
                                  <span class="badge badge-secondary">Pending</span>
                                <?php elseif($project->status == 1): ?>
                                  <span class="badge badge-primary">On-Progress</span>
                                <?php elseif($project->status == 2): ?>
                                  <span class="badge badge-success">Done</span>  
                                <?php endif; ?>
                            </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>

    <div class="row">
     


        <!-- Modal task save-->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Task For <?php echo e($project->name); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              
                <div class="modal-body" id="tasktData">

                <input type="text" class="form-control" id="project_id" name="project_id" value="<?php echo e($project->id); ?>" hidden>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" name="task" id="task" class="form-control">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="0">To-Do</option>
                          <option value="1">Done</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Description</label>
                            <textarea id="description" name="description"></textarea>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="butsave">Save</button>
                  </div>
              
            </div>
          </div>
        </div>




        <!-- Modal task edit-->
        <div class="modal fade bd-example-modal-lg" id="editTask" tabindex="-1" role="dialog" aria-labelledby="editTaskLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editTaskLabel">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              
                <div class="modal-body" id="ediTaskData">

                <input type="text" class="form-control" id="task_id" name="task_id" value="" hidden>
                <input type="text" class="form-control" id="projectid" name="projectid" value="" hidden>
                

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" name="task_name" id="task_name" class="form-control">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="taskstatus" name="taskstatus">
                          <option value="0">To-Do</option>
                          <option value="1">Done</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Description</label>
                            <textarea id="taskdescription" name="taskdescription"></textarea>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btntaskedit">Update</button>
                  </div>
              
            </div>
          </div>
        </div>

         <!-- Modal task delete-->
        <div class="modal fade" id="taskdeleteModal" tabindex="-1" role="dialog" aria-labelledby="taskdeleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-danger text-center">
              <div class="modal-header">
                <h5 class="modal-title" id="taskdeleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="<?php echo e(route('viewprojects.destroy','delete')); ?>" method="post">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                 <div class="modal-body">
                    <p class="text-center">
                        Are you sure you want to delete this?
                    </p>
                    <input type="hidden" class="form-control" id="delete_id" name="delete_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-warning">Yes, Delete</button>
                </div>
              </form>        
                
            </div>
          </div>
        </div>

        <div class="col-lg-12">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Task List</h3>

                    <div class="card-tools">
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-tasks"></i> Add New Task
                        </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display: block;">       
                     <table id="example1" class="table table-bordered table-striped tasks">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Task</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                        <?php $__currentLoopData = $project->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e($task->id); ?></td>
                              <td><?php echo e($task->task); ?></td>
                              <td><?php echo $task->description; ?></td>
                              
                              <td class="task-state">
                                <?php if($task->status == 0): ?>
                                  <span class="badge badge-primary">To-Do</span>
                                <?php elseif($task->status == 1): ?>
                                  <span class="badge badge-success">Done</span>
                                <?php endif; ?>
                              </td>
                              <td class="project-actions text-right">
                                  <button class="btn btn-info btn-sm editBtn" data-toggle="modal" data-target="#editTask" data-id="<?php echo e($task->id); ?>" data-projectid="<?php echo e($task->project_id); ?>" data-task="<?php echo e($task->task); ?>" data-taskdescription="<?php echo e($task->description); ?>" data-status="<?php echo e($task->status); ?>">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Edit
                                  </button>
                                  <button class="btn btn-danger btn-sm deleteTaskBtn" data-toggle="modal" data-target="#taskdeleteModal" data-deleteid="<?php echo e($task->id); ?>">
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
                        <th>#</th>
                        <th>Task</th>
                        <th>Description</th>
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

<script src="<?php echo e(asset('js/summernote-lite.min.js')); ?>" defer></script>

<script>
    //edit task details
    $('.editBtn').click(function() {
        var task_id = $(this).data('id');
        var projectid = $(this).data('projectid');
        var task_name = $(this).data('task');  
        var taskdescription = $(this).data('taskdescription');  
        var taskstatus = $(this).data('status'); 

        $('#task_id').val(task_id);
        $('#projectid').val(projectid);
        $('#task_name').val(task_name);
        $('#taskdescription').summernote("code",taskdescription);
        $('#taskstatus').val(taskstatus);
    });

    //delete task
    $('.deleteTaskBtn').click(function() {
        var delete_id = $(this).data('deleteid');  
        $('#delete_id').val(delete_id);  
    });

    // Summernote
      $(document).ready(function() {
        $('#description').summernote({
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
          });

        $('#taskdescription').summernote({
          setup: function (editor) {
              editor.on('change', function () {
                  editor.save();
              });
          }
        });
      });
      
      //dataTable
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });

 
</script>

<!-- save project details -->

<script src="<?php echo e(asset('js/function/taskSave.js')); ?>"></script>
<script src="<?php echo e(asset('js/function/taskEdit.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jpwebhos/public_html/dev.jpwebhosting.co.uk/qasystemfiles/resources/views/projects/viewprojects.blade.php ENDPATH**/ ?>