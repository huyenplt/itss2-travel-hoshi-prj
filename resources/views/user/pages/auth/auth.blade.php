@extends('user.layout.app')

@section('title')
    <title>Login/Sign in</title>
@show

@section('content')
<h2>Sign in/up Form</h2>
@include('user.pages.components.helper.alert')
<div class="container <?= session('type') ? 'right-panel-active' : '' ?>" id="container">
	<div class="form-container sign-up-container">
		<form action="{{route('user.signup')}}" method="POST">
			@csrf
			<h1>Create Account</h1>
			<input type="text" name="name" placeholder="Name" />
			@if($errors->has('name'))
				<div class="text-danger w-100 text-start">{{ $errors->first('name') }}</div>
			@endif
			<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
			@if($errors->has('email'))
				<div class="text-danger w-100 text-start">{{ $errors->first('email') }}</div>
			@endif
			<input type="password" name="password" placeholder="Password" />
			@if($errors->has('password'))
				<div class="text-danger w-100 text-start">{{ $errors->first('password') }}</div>
			@endif
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{route('user.login')}}" method="POST">
			@csrf
			<h1>Sign in</h1>
			<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
			@if($errors->has('email'))
				<div class="text-danger w-100 text-start">{{ $errors->first('email') }}</div>
			@endif
			<input type="password" name="password" placeholder="Password" />
			@if($errors->has('password'))
				<div class="text-danger w-100 text-start">{{ $errors->first('password') }}</div>
			@endif
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
    <link rel="stylesheet" href="{{asset('assets/css/user/user_login.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/js/user/user_login.js')}}"></script>
@endsection
