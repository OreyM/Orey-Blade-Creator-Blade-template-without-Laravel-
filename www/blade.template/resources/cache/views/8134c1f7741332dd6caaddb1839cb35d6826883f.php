<?php $__env->startSection('title', 'Test Page Title'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e(__('home.testPage')); ?></h1>
    <a href="<?php echo e(url('/')); ?>"><?php echo e(__('home.returnHome')); ?></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/test.blade.php ENDPATH**/ ?>