<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('sidebar'); ?>
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>age</td>
		</tr>
		<tr>
			<td>111</td>
			<td>111</td>
			<td>111</td>
		</tr>
	</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>这是主体内容。</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>