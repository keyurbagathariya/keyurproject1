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
		<li class="breadcrumb-item active" aria-current="page">Register Page</li>
	</ol>
</div>
<!-- //page details -->

<!-- login -->
<div class="login-contect py-5">
	<div class="container py-xl-5 py-3">
		<div class="login-body">
			<div class="login p-4 mx-auto">
				<h5 class="text-center mb-4">Register Now</h5>
				<form  method="post" enctype="multipart/form-data" action="">
					@csrf
					<div class="form-group">
						<label>Your Name </label>
						<input type="text" class="form-control" name="name" placeholder="" >
					</div>

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					
					@error('title')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control @error('email', 'title') is-invalid @enderror" name="email" placeholder="" >
					</div>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" name="password" id="password1">
					</div>
					<div class="form-group">
						<label>image</label>
						<input type="file" class="form-control" name="image" id="image">
					</div>
					<input type="submit" class="btn btn-btn-warning " name="register" value="Register">
					<p class="text-center account-w3ls text-center text-da">
						<a href="{{route('login')}}" class="text-da">Click Here,You Have Already Account</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //login -->

@endsection