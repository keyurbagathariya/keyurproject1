@extends('userside/master')

@section('main')

<main id="main" class="main">
<!-- banner -->
	<div class="baneer-w3ls">
		<div class="row no-gutters">
			<div class="col-xl-5 col-lg-6">
				<div class="banner-left-w3">
					<div class="container">
						<div class="banner-info_agile_w3ls">
							<h5>Only Fresh Burgers</h5>
							<h3 class="text-da mb-4">Flame <span>Grilled Burger</span> </h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								laudantium</p>
							<a href="{{route('aboutus')}}" class="button-w3ls active mt-5">Read More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
							@if(Session::has('user'))
							<a href="{{route('menu')}}" class="button-w3ls mt-5 ml-2">Order Now
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
							@else
							<a href="{{route('login')}}" class="button-w3ls mt-5 ml-2">Order Now
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 callbacks_container">
				<!-- banner slider -->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
						<li>
							<div class="banner-top1"></div>
						</li>
						<li>
							<div class="banner-top2"></div>
						</li>
						<li>
							<div class="banner-top3"></div>
						</li>
					</ul>
					<div class="arrows">
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
					<div class="navigation">
						<div>
							<label for="slides_1"></label>
							<label for="slides_2"></label>
							<label for="slides_3"></label>
						</div>
					</div>
				</div>
				<!-- //banner slider -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- specials -->
	<section class="blog_w3ls py-5">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<p class="w3ls-title-sub">Tasty</p>
				<h3 class="w3ls-title">Our <span>Special</span></h3>
			</div>

			

			<div class="row" hight="200px" width="200px">
			
				@foreach ($menu as $m)
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6" >
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="{{route('menu')}}">
								<img class="card-img-bottom" src="{{url('upload/'.$m->img)}}" id="h" alt="Card image cap">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="{{route('menu')}}">{{$m->productname}}</a></h5>
							<p class="mt-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
							<a href="{{route('menu')}}" class="btn button-w3ls mt-4 mb-3">View More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				@endforeach
				<!-- //blog grid -->
			</div>
			
		</div>
	</section>
	<!-- //specials -->

	<!-- two grids -->
	@if(Session::has('user'))
	<section class="offer pt-lg-3">
		<div class="row no-gutters">
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3"><a href="{{route('menu')}}">Best Fast Food Collection</a></h4>
						<p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
							ut perspiciatis
							unde omnis iste natus error.</p>
						<a href="{{route('menu')}}" class="button-w3ls active mt-5">Order Now
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3 blog-sec-w3-2">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3"><a href="{{route('menu')}}">Organic Best & Fresh Food</a></h4>
						<p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
							ut perspiciatis
							unde omnis iste natus error.</p>
						<a href="{{route('menu')}}" class="button-w3ls active mt-5">Order Now
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@else

	<section class="offer pt-lg-3">
		<div class="row no-gutters">
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3"><a href="{{route('menu')}}">Best Fast Food Collection</a></h4>
						<p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
							ut perspiciatis
							unde omnis iste natus error.</p>
						<a href="{{route('login')}}" class="button-w3ls active mt-5">Order Now
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3 blog-sec-w3-2">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3"><a href="{{route('login')}}">Organic Best & Fresh Food</a></h4>
						<p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
							ut perspiciatis
							unde omnis iste natus error.</p>
						<a href="{{route('menu')}}" class="button-w3ls active mt-5">Order Now
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	<!-- //two grids -->

	
	<!-- slides images -->
	<section class="wthree-slider" id="masthead">

	</section>
	<!-- //slides images -->

	<!-- newsletter -->
	<section class="subscribe-main py-5">
		<div class="container py-xl-5 py-3">
			<div class="row pb-lg-4 pt-lg-5">
				<div class="col-lg-6 col-md-9 text-center">
					<h3 class="w3ls-title mb-2">Subscribe to Newsletter</h3>
					<p class="mb-xl-5 mb-4">Free Delivery on your first order!</p>
					<form action="{{route('home')}}" method="post" class="d-flex newsletter-info">
						@csrf
						<input type="email" name="email" placeholder="Enter your Email..." required="">
						<button type="submit">Submit</button>
					</form>
				</div>
				<div class="col-lg-6 col-md-3">

				</div>
			</div>
			<img src="{{url('userassets/')}}/images/sub.png" alt="" class="img-fluid sub-img">
		</div>
	</section>
	<!-- //newsletter -->
</main><!-- End #main -->


@endsection