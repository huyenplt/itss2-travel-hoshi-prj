@extends('admin.layout.auth')

@section('title')
    <title>Login</title>
@show

@section('content')
<section class="vh-100 gradient-custom">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				<div class="card bg-dark text-white" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">
						@include('user.pages.components.helper.alert')
						<form action="{{route('admin.post.login')}}" method="POST" class="mb-md-5 mt-md-4 pb-5">
							@csrf
							<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
							<p class="text-white-50 mb-3">Please enter your login and password!</p>
							<div class="form-outline form-white mb-4">
								<input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email" value="{{ old('email') }}" />
								@if($errors->has('email'))
									<div class="text-danger w-100 text-start">{{ $errors->first('email') }}</div>
								@endif
							</div>
							<div class="form-outline form-white mb-4">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="Enter your password"/>
								@if($errors->has('password'))
									<div class="text-danger w-100 text-start">{{ $errors->first('password') }}</div>
								@endif
							</div>
							<button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>  
@endsection

@section('css')
    <link rel="stylesheet" href="/assets/css/admin/admin_login.css">
@endsection

@section('js')
    <script src="/assets/js/admin/admin_login.js"></script>
@endsection