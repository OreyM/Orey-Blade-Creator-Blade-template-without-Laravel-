<?php $__env->startSection('title', 'Test Page Title'); ?>

<?php $__env->startSection('content'); ?>
    <p>This is TEST page.</p>
    <a href="/">Return to Home page</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/test.blade.php ENDPATH**/ ?>