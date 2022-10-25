

<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <center>
            Username: <input type="text"><br>
            password: <input type="text"><br>

            
            <a href="<?php echo e(route('home')); ?>"><button>Login</button></a>
            <button>Cancel</button>
            
            <a href="">forgot password?</a>
    </center>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sauce\Laravel\default-app\resources\views/pages/login.blade.php ENDPATH**/ ?>