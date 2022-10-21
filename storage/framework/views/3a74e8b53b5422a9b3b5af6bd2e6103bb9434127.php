<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="largeModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" placeholder="Nama.." value="<?php echo e($user->name); ?>" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" placeholder="Email.." value="<?php echo e($user->email); ?>" name="email" class="form-control" id="email">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="role">
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($role->name); ?>" <?php echo e($role->name == $userRole ? 'selected' : ''); ?>><?php echo e($role->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
            data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div><?php /**PATH D:\Developement\DigiPosyandu\resources\views/users/user-action.blade.php ENDPATH**/ ?>