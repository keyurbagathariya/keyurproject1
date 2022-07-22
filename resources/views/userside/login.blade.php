@extends('userside/master')

@section('main')

    
    <!-- banner -->
	<div class="main-banner-2">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="{{route('home')}}">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Login Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Login Now</h5>
					<form action="#" method="post">
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" class="form-control" name="name" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="mb-2">Password</label>
							<input type="password" class="form-control" name="password" placeholder="" required="">
						</div>
						<button type="submit" class="btn submit mb-4" href="{{route('home')}}">Login</button>
						<p class="forgot-w3ls text-center mb-3">
							<a href="#" class="text-da">Forgot your password?</a>
						</p>
						<p class="account-w3ls text-center text-da">
							Don't have an account?
							<a href="{{route('register')}}">Create one now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
@endsection