<?php $__env->startSection('title', 'Home Page Title'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e(__('home.homeTitle')); ?></h1>
    <a href="test">Test link</a>
    <?php echo csrf_field(); ?>

    <p>Имя пользователя: <?php echo e(Auth::user()->name); ?></p>

    <p><?php echo e(config('app.name', 'New project')); ?></p>

    <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
    <a href="<?php echo e(route('block.index')); ?>">Block</a>



    <?php if(auth()->check()): ?>
        <p>The user is authenticated.</p>
    <?php else: ?>
        <p>The user is not authenticated.</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>