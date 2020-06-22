<html>
    <head>
        <title>应用名称 - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <div class="container">
            <?php echo e($name); ?>

        </div>

         <?php $__env->startSection('sidebar'); ?>
        <?php echo $__env->yieldSection(); ?>

        <div>
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
        </div>
    </body>
</html>