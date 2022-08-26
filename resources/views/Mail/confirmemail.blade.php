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
			<li class="breadcrumb-item active" aria-current="page">Confrim Email</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Confirm Email</h5>
					<form  method="post" action="{{route('confirmemail')}}">
						@csrf
						<div class="form-group">
							<label>Email:</label>
							<input type="email" class="form-control" name="email" placeholder="Enter Your Email"  required="">
						</div>
						
						<input type="submit" class="btn submit mb-4 btn-btn-success" name="save" value="Confirm">
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
@endsection