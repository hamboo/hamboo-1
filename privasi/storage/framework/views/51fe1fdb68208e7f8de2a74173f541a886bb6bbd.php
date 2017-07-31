 <header id="header_wrapper">
	 
	  <!-- popup form Start -->
	  <div class="full_width login_wrapper">
		  <div class="row">
			  <div class="container">
				  <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
					  <!-- login form start -->
		
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <div class="login_heading">
									  login
								  </div>
								</div>
								<div class="modal-body">
								 <div class="popup_inner">
									  <form action ="<?php echo e(url(action('LoginController@getLogin'))); ?>" method="post">
										  <input type="email" name="email" placeholder="Email"   class="input_login">
										  <input type="password" name="password" placeholder="Password" class="input_login">
										  <input type="checkbox" id="login_check" name="checkbox" class="checkbox_login">
										  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
										  <label for="login_check" class="remember_me">Remember me</label>
										  <a href="#" class="forgot_link">Forget password?</a>
										  <input type="submit" value="LOGIN" class="sub_signup">
									  </form>
									  <div class="have_an_acnt">
										  <p>Dont have an account?  <a href="<?php echo e(url('/signup')); ?>">Sign up</a></p>
									  </div>
								  </div>
								</div>
							  </div>

							</div>
						  </div>
  
					  <!-- login form  End -->
					 </div>
			  </div>
		  </div>
	  </div>
	  <!-- popup form  End -->
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2">
            <div class="travel_logo">
				<a href="Home_01.html"><img src="<?php echo asset('svg/Logo.svg'); ?>" alt="logo" /></a> 
			</div>
          </div>
          <div class="col-md-10 col-sm-10"> <a href="javascript:;" class="menu-toggle"></a>
            <div class="main_menu">
              <ul>
                <li class="active"><a href="<?php echo e(url('/')); ?>">home</a>
 				</li>
                  
                <li><a href="<?php echo e(url('/event')); ?>">event</a>
			     </li>
                <li><a href="<?php echo e(url('/about')); ?>">about</a>
			     </li>
				  <li><a href="<?php echo e(url('/blog')); ?>">blog</a></li>
				  <?php if(Auth::guest()): ?>
                    <li data-toggle="modal" data-target="#myModal">
					<a href="#">Login</a>
					</li>
                  <?php else: ?>
					<li data-toggle="modal" data-target="#myModal">
					<a href="#"><?php echo e(Auth::user()->name); ?></a>
					</li>
					<li><a href="<?php echo e(url('/logout')); ?>">logout</a></li>
				<?php endif; ?>;
       	 </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Header end--> 