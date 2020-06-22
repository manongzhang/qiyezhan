<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
	<?php $__env->startSection('sidebar'); ?>
		
    <?php echo $__env->yieldSection(); ?>

	<?php $__env->startSection("content"); ?>
	<?php echo $__env->yieldSection(); ?>

</body>
</html>