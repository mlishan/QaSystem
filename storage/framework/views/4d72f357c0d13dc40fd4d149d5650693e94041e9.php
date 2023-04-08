<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

              
        <div class="modal-body" id="projectData">
                    
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Project Name</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" id="status" name="status">
                  <option value="0">Pending</option>
                  <option value="1">On-Progress</option>
                  <option value="2">Done</option>
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
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label>Project Team Members</label>
                <div class="select2-purple">
                  <select class="select2" multiple="multiple" id="user_ids" name="user_ids[]" data-dropdown-css-class="select2-purple" style="width: 100%;">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
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
</div><?php /**PATH /home/jpwebhos/public_html/dev.jpwebhosting.co.uk/qasystemfiles/resources/views/projects/saveForm.blade.php ENDPATH**/ ?>