<form action="info" method="post">
<div class="row">
    <div class="col-md-8">
        <input type="text" class="form-control <?php echo e($errors->has('captcha')?'parsley-error':''); ?>" name="vcode" placeholder="captcha">
    </div>
    <div class="col-md-4">
        <img src="<?php echo e(captcha_src()); ?>" style="cursor: pointer" onclick="this.src='<?php echo e(captcha_src()); ?>'+Math.random()">
    </div>
    <?php if($errors->has('captcha')): ?>
        <div class="col-md-12">
            <p class="text-danger text-left"><strong><?php echo e($errors->first('captcha')); ?></strong></p>
        </div>
    <?php endif; ?>
</div>
<input type="submit" name="sdfdfsd" value="sdfdsfsd">
</form>