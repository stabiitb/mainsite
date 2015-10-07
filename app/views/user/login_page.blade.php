@extends('layout.default')
@section('script')
	<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')
<main>
	@if (Session::get('messages') != null && Session::get('messages')->has('message'))			
	<section id="error" class="light-bg">
		<div class="container inner-xs">
			<div class="row">
				<div class="col-sm-10 center-block text-center">
				    {{ Session::get('messages')->first('message') }}
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>    
	@endif

	<section class="white-bg">
		<div class="container" style="padding-top:50px;padding-bottom:50px;">
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<header>
							<h3>Signup</h3>
					</header>
					<form id="signup_form" class="forms" action="{{URL::Route('user.signup')}}" method="post">

						<input class="form-control" name="name" type="text" placeholder="Name" required>
						<input class="form-control" name="password" size="8" type="password" placeholder="Enter Pasword" required>
						<input class="form-control" name="password_verify" size="8" type="password" placeholder="Re-enter Password" required>
						<input class="form-control" name="ldap" type="text" placeholder="LDAP ID (For Example: <LDAP ID>@iitb.ac.in)" required>
						<input class="form-control" name="email" type="email" placeholder="Email (Preferrably gmail)" required>
						<!-- <div class="g-recaptcha" data-sitekey="6LeQbA0TAAAAALLqeFkJGG-JVh-CHYilzDaVxWxH"></div> -->
						<input class="btn btn-green" type="submit" value="Signup">
					</form>
				</div><!-- /.col -->
				<div class="col-md-4">
					<header>
							<h3>Login</h3>
					</header>
					<form class="forms" action="{{URL::Route('user.login')}}" method="post">
						<input class="form-control" name="ldap" type="text" placeholder="LDAP ID (For Example: <LDAP ID>@iitb.ac.in)" required>
						<input class="form-control" name="password" size="8" type="password" placeholder="Enter Pasword" required>
						<input class="btn btn-green" type="submit" value="Login">
					</form>
					<div style="text-align:center">
						<h3 style="text-align:center">OR</h3>
						<a style="width:100%" href="{{UserController::LoginURL()}}" class="btn btn-blue" ><i class="icon-facebook-squared-1"></i> Login with Facebook</a>

					</div>
					
				</div><!-- /.col -->
			</div><!-- ./row -->
		</div><!-- /.container -->
	</section>
</main>
@endsection