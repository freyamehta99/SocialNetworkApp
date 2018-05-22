<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Extra meta tags if needed like meta description for example. -->
    <?php echo $__env->yieldContent('meta'); ?>

    <!-- Page title. -->
    <?php echo $__env->yieldContent('title'); ?>
    
    <!-- <title><?php echo e(config('app.name', 'Laravel')); ?></title> -->

    <!-- Scripts -->
    <!-- <script src="<?php echo e(asset('js/app.js')); ?>" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<!-- Page Header -->
<?php echo $__env->yieldContent('header'); ?>

<!-- Nav Bar -->
<?php echo $__env->yieldContent('navbar'); ?>

<!-- Page Content -->
<?php echo $__env->yieldContent('content'); ?>

<!-- Page Footer -->
<?php echo $__env->yieldContent('page_footer'); ?>

<!-- Application specific JavaScript -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<!-- Script Footer extra scripts if needed -->
<?php echo $__env->yieldContent('script_footer'); ?>

   
</body>
</html>
