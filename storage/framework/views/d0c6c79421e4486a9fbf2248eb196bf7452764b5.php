<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    <title>Laravel App - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div>
        <h5>Laravel App</h5>
        <nav>
            <a href="<?php echo e(route('home.index')); ?>">Home</a>
            <a href="<?php echo e(route('home.contact')); ?>">Contact</a>
            <a href="<?php echo e(route('posts.index')); ?>">Blog Posts</a>
            <a href="<?php echo e(route('posts.create')); ?>">Add Blog Post</a>
            
        </nav>
    </div>
    <div class="container">
        <?php if(session('status')): ?>
            <div style="background: red;color:white">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel8\resources\views/layouts/app.blade.php ENDPATH**/ ?>