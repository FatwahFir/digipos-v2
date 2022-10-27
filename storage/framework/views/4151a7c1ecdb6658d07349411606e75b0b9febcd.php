<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>DigiPosyandu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="<?php echo e(asset('')); ?>/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('')); ?>/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('')); ?>/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    <?php echo $__env->yieldPushContent('css'); ?>
    <!-- End CSS  -->

    <link rel="stylesheet" href="<?php echo e(asset('')); ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('')); ?>/assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="../assets/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <footer>
            Copyright © 2022 &nbsp <a href="https://www.youtube.com/c/mulaidarinull" target="_blank" class="ml-1"> Mulai Dari Null </a> <span> . All rights Reserved</span>
        </footer>
        <div class="overlay action-toggle">
        </div>
    </div>
    <script src="<?php echo e(asset('')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="<?php echo e(asset('')); ?>/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    <?php echo $__env->yieldPushContent('js'); ?>
    <!-- ======= -->
    <script src="<?php echo e(asset('')); ?>/assets/js/main.js"></script>
    <script>
        Main.init()
    </script>
</body>

</html><?php /**PATH D:\Developement\DigiPosyandu\resources\views/layouts/master.blade.php ENDPATH**/ ?>