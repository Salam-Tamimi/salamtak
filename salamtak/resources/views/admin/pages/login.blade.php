@extends('admin.Layout.master')
@section('title', ' تسجيل دخول ')
@section('content')
<br> <br> 

<div class="container" >
	<div class="loginbox"style="width: 80%; margin-right:20%;">
		<div class="login-left">
			<img class="img-fluid" src="{{ asset('images/logo-white.png') }}" alt="Logo">
		</div>
		<div class="login-right">
			<div class="login-right-wrap">
				<h1>Login</h1>
				<p class="account-subtitle">Access to our dashboard</p>
				
				<!-- Form -->
				<form action="https://dreamguys.co.in/demo/doccure/admin/index.html">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Email">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Password">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block" type="submit">Login</button>
					</div>
				</form>
				<!-- /Form -->
				
				<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
				<div class="login-or">
					<span class="or-line"></span>
					<span class="span-or">or</span>
				</div>
				  
				<!-- Social Login -->
				<div class="social-login">
					<span>Login with</span>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
				</div>
				<!-- /Social Login -->
				
				<div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>