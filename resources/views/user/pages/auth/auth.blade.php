@extends('user.layout.index')

@section('title')
    <title>Login</title>
@show

@section('content')
<h2>Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="bi bi-facebook"></i></i></a>
				<a href="#" class="social"><i class="bi bi-google"></i></i></a>
				<a href="#" class="social"><i class="bi bi-linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="bi bi-facebook"></i></i></a>
				<a href="#" class="social"><i class="bi bi-google"></i></i></a>
				<a href="#" class="social"><i class="bi bi-linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/assets/css/user_login.css">
@endsection

@section('js')
    <script src="/assets/js/user_login.js"></script>
@endsection