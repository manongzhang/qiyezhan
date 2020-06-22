<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo e($name); ?>

        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
	 <?php $__env->startSection('t1'); ?>
     <?php echo $__env->yieldSection(); ?>
</body>
</html>