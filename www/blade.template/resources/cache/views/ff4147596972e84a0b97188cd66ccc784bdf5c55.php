<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo $__env->yieldContent('css'); ?>

    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <?php echo $__env->yieldContent('fonts'); ?>

</head>
<body class="<?php echo $__env->yieldContent('body_class'); ?>">

<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->yieldContent('scripts'); ?>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html><?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>