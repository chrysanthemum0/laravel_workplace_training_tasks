<?php $__env->startSection('content'); ?>
<h1>My Page</h1>
<p>Your Name : <?php echo e($login_user->name); ?></p>
<p>Your ID : <?php echo e($login_user->email); ?></p>
<p><a href="<?php echo e(route('home.edit')); ?>">Rename Account</a></p>
<form action="<?php echo e(route('logout')); ?>" method="post" >
    <?php echo csrf_field(); ?>
    <p><input type="submit" value="Logout"></p>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\laravel-kadai\message-board\resources\views/home/index.blade.php ENDPATH**/ ?>