<?php $__env->startSection('content'); ?>	
<div class="signup-form">
	<div class="login_heading signup-head">
		<h1>Hamboo</h1>
		DAFTAR SEKARANG DI HAMBOO
	</div>
	<div class="popup_inner">
		<form class="signup_form" action="<?php echo e(url(action('SignUpController@doRegister'))); ?>" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<?php if($errors->has('name')): ?>
				<span class="help-block">
                    <strong><?php echo $errors->first('name'); ?></strong>
                </span>
            <?php endif; ?>
			<input type="text" name="name" placeholder="Name" class="input_login" required autofocus>
			<?php if($errors->has('email')): ?>
				<span class="help-block">
                    <strong><?php echo $errors->first('email'); ?></strong>
                </span>
            <?php endif; ?>
			<input type="text" name="email" placeholder="Email Id"   class="input_login">
			<input type="text" name="no_hp" placeholder="Handphone" class="input_login" required autofocus>
			 <?php if($errors->has('password')): ?>
				<span class="help-block">
                    <strong><?php echo $errors->first('password'); ?></strong>
                </span>
            <?php endif; ?>
			<input type="password" name="password" placeholder="Password" class="input_login" required autofocus>
			<input type="password" name="conf passlogin" placeholder="Confirm Password" class="input_login" required autofocus>
			<input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login" required>
			<label for="signup_check" class="remember_me">I agree the Terms of Service, Privacy Policy, Guest 
			Refund Policy, and Host Guarantee Terms.</label>
			<input type="submit" value="SIGN UP" class="sub_signup">
			<input type="submit" value="LOGIN" class="sub_signup">
		</form>		
		<div class="already_member"> already member? <a href="#">login here</a></div>
	</div>		
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>