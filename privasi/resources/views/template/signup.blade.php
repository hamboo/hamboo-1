@extends('template.master')
@section('content')	
<div class="signup-form">
	<div class="login_heading signup-head">
		<h1>Hamboo</h1>
		DAFTAR SEKARANG DI HAMBOO
	</div>
	<div class="popup_inner">
		<form class="signup_form" action="{{url(action('SignUpController@doRegister'))}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			@if ($errors->has('name'))
				<span class="help-block">
                    <strong>{!! $errors->first('name') !!}</strong>
                </span>
            @endif
			<input type="text" name="name" placeholder="Name" class="input_login" required autofocus>
			@if ($errors->has('email'))
				<span class="help-block">
                    <strong>{!! $errors->first('email') !!}</strong>
                </span>
            @endif
			<input type="text" name="email" placeholder="Email Id"   class="input_login">
			<input type="text" name="no_hp" placeholder="Handphone" class="input_login" required autofocus>
			 @if ($errors->has('password'))
				<span class="help-block">
                    <strong>{!! $errors->first('password') !!}</strong>
                </span>
            @endif
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
@stop