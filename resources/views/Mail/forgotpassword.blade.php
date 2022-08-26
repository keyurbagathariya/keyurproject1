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
			<li class="breadcrumb-item active" aria-current="page">Create New Password Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Create New Password</h5>
					<form  method="post"  action="">
						@csrf
						<input type="hidden" name="email" >
						<div class="form-group">
							<label>OTP </label>
							<input type="number" class="form-control"  name="otp" placeholder="" >
						</div>
						<div class="form-group">
							<label>New Password</label>
							<input type="password" class="form-control" name="password" placeholder="" >
						</div>
						
						<input type="submit" class="btn btn-btn-warning " name="save" value="Save">
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->

@endsection