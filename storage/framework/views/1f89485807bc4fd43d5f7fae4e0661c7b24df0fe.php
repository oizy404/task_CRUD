

<?php $__env->startSection('title'); ?>
    Output
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-6 offset-md-3">
        <h2>Hi, <?php echo e($fullname); ?></h2>
        <?php if($valid === null): ?>
            <div class="alert alert-danger" role="alert">
                Please enter a valid age!
            </div>
        <?php elseif($valid === true): ?>
            <p>You are obliged to vote.</p>
        <?php elseif($valid === false): ?>
            <p>You are a minor, you can't vote.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sauce\Laravel\app_3\resources\views/pages/output.blade.php ENDPATH**/ ?>