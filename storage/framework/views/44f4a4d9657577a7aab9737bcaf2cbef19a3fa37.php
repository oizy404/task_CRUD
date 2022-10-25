

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    
    <h1>HOMEEEEE</h1>
    <p>Welcome, <?php echo e($name ?? ''); ?></p>
    <p>You are <?php echo e($describe ?? ''); ?></p>
    <button onclick="testfunction()">Click Me</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sauce\Laravel\default-app\resources\views/pages/home.blade.php ENDPATH**/ ?>