 <header id="header_wrapper">
	  <!-- popup form Start -->
	  <div class="full_width login_wrapper">
		  <div class="row">
			  <div class="container">
				  <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
					  <!-- login form start -->
					  <div class="popup_alert_main Travelite_login_form">
						  <div class="login_heading">
							  login
							  <span class="close_btn"><i class="fa fa-times"></i></span>
						  </div>
						  <div class="popup_inner">
							  <form>
								  <input type="email" name="emaillogin" placeholder="Email Id"   class="input_login">
								  <input type="password" name="passlogin" placeholder="Password" class="input_login">
								  <input type="checkbox" id="login_check" name="checkbox" class="checkbox_login">
								  <label for="login_check" class="remember_me">Remember me</label>
								  <a href="#" class="forgot_link">Forget password?</a>
							  </form>
							  <div class="have_an_acnt">
								  <p>Dont have an account?  <a href="#">Sign up</a></p>
							  </div>
							  <div class="or_line">
								  <span>(OR)</span>
							  </div>
							  <div class="social_links_login">
								  <ul>
									  <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
									  <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
								  </ul>
							  </div>
						  </div>
					  </div>
					  <!-- login form  End -->
					  <!-- signup form start -->
					  <div class="popup_alert_main Travelite_signup_form">
						  <div class="login_heading">
							  signup
							  <span class="close_btn"><i class="fa fa-times"></i></span>
						  </div>
						  <div class="popup_inner">
							  <form class="signup_form">
								  <input type="text" name="emaillogin" placeholder="First Name" class="input_login">
								  <input type="text" name="emaillogin" placeholder="Last Name"  class="input_login">
								  <input type="email" name="emaillogin" placeholder="Email Id"   class="input_login">
								  <input type="password" name="passlogin" placeholder="Password" class="input_login">
								  <input type="password" name="conf passlogin" placeholder="Confirm Password" class="input_login">
								  <input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login">
								  <label for="signup_check" class="remember_me">I agree the Terms of Service, Privacy Policy, Guest 
								  Refund Policy, and Host Guarantee Terms.</label>
								  <input type="submit" value="SIGN UP" class="sub_signup">
							  </form>
							  <div class="or_line">
								  <span>(OR)</span>
							  </div>
							  <div class="social_links_login">
								  <ul>
									  <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
									  <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
								  </ul>
							  </div>
							  <div class="already_member"> already member? <a href="#">login here</a></div>
						  </div>
					  </div>
					  <!-- signup form  End -->
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
				<li><a href="<?php echo e(url('/blog')); ?>">blog</a>
				</li>
                <span class="btn-login">Login</span>
				</li>
				</li>
		     </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Header end--> 