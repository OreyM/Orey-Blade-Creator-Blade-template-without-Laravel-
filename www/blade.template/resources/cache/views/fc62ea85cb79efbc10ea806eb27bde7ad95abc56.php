<?php $__env->startSection('title', 'Home Page Title'); ?>

<?php $__env->startSection('content'); ?>
    <p>This is HOME page.</p>
    <a href="test">Test link</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>