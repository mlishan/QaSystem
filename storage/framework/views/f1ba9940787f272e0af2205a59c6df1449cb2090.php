<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-danger text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="<?php echo e(route('users.destroy','delete')); ?>" method="post">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
         <div class="modal-body" id="deletData">
            <p class="text-center">
                Are you sure you want to delete this user?
            </p>
            <input type="hidden" class="form-control" id="id" name="id" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>        
                
    </div>
  </div>
</div><?php /**PATH /home/jpwebhos/public_html/dev.jpwebhosting.co.uk/qasystemfiles/resources/views/users/deleteForm.blade.php ENDPATH**/ ?>