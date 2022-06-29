

<?php $__env->startSection('title', 'home page'); ?>

<?php $__env->startSection('content'); ?>
    <h1>hello world</h1>
<?php for($i = 0; $i< 10; $i++): ?>
    <div>
        <h1>value is <?php echo e($i); ?></h1>
    </div>
    
<?php endfor; ?>
    <div>
        <?php
            $done=false
        ?>
        <?php while(!$done): ?>
            <div>i am not done</div>
            <?php
                if(random_int(0,1) === 1) $done = true
            ?>            
        <?php endwhile; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL-PROJECTS\laravel8\resources\views/home/index.blade.php ENDPATH**/ ?>