@extends('userside/master')

@section('main')


	<!-- blog -->
	<section class="blog_w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<p class="w3ls-title-sub">Posts</p>
				<h3 class="w3ls-title mb-3">Our Latest <span>Blog</span></h3>
				<p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo.Nemo
					enim totam rem aperiam.</p>
			</div>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0">
						<div class="card-header p-0">
							<a href="{{route('single')}}">
								<img src="{{url('userassets/')}}/images/blog1.png" class="card-img-bottom img-fluid" alt="image">
							</a>
							<img src="{{url('userassets/')}}/images/te1.jpg" alt="" class="img-blog rounded-circle img-fluid">
						</div>
						<div class="card-body text-center pt-5 mt-2">
							<h5 class="blog-title card-title mb-2"><a href="single.html">Sed ut Riciatis</a></h5>
							<div class="blog_w3icon border-top border-bottom py-1 mb-3">
								<span>
									Magna Kictum - Nov 12</span>
							</div>
							<p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
							<a href="{{route('single')}}" class="button-w3ls mt-4">Read More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0">
						<div class="card-header p-0">
							<a href="single.html">
								<img src="{{url('userassets/')}}/images/blog2.png" class="card-img-bottom img-fluid" alt="image">
							</a>
							<img src="{{url('userassets/')}}/images/te2.jpg" alt="" class="img-blog rounded-circle img-fluid">
						</div>
						<div class="card-body text-center pt-5 mt-2">
							<h5 class="blog-title card-title mb-2"><a href="{{route('single')}}">Unde omnis iste</a></h5>
							<div class="blog_w3icon border-top border-bottom py-1 mb-3">
								<span>
									Auris Jlan - Nov 15</span>
							</div>
							<p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
							<a href="{{route('single')}}" class="button-w3ls active mt-4">Read More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
					<div class="card border-0">
						<div class="card-header p-0">
							<a href="{{route('single')}}">
								<img src="{{url('userassets/')}}/images/blog3.png" class="card-img-bottom img-fluid" alt="image">
							</a>
							<img src="{{url('userassets/')}}/images/te3.jpg" alt="" class="img-blog rounded-circle img-fluid">
						</div>
						<div class="card-body text-center pt-5 mt-2">
							<h5 class="blog-title card-title mb-2"><a href="{{route('single')}}">Natus error sit</a></h5>
							<div class="blog_w3icon border-top border-bottom py-1 mb-3">
								<span>
									Dictum Orta - Nov 20</span>
							</div>
							<p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
							<a href="{{route('single')}}" class="button-w3ls mt-4">Read More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //blog -->


@endsection
