
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Tasty Burger Restaurants Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Tasty Burger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{url('userassets/')}}/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="{{url('userassets/')}}/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<!-- css slider -->
	<link rel="stylesheet" href="{{url('userassets/')}}/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{url('userassets/')}}/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-map-marker mr-2"></span>Parma Via, Italy
								</p>
							</div>
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-phone mr-2"></span>+91 9725288220
								</p>
							</div>
							<div class="col-xl-6"></div>
						</div>
					</div>
					<div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
						<div class="row middle-flex">
						
							<div class="col-lg-5 col-4 top-w3layouts p-md-0 text-right">
								@if(Session::has('user'))
								<!-- logout -->
								<a href="{{route('logout')}}" class="btn login-button-2 text-uppercase text-wh">
									<span class="fa fa-sign-in mr-2"></span>Logout</a>
								
								@else
								<!-- login -->
								<a href="{{route('login')}}" class="btn login-button-2 text-uppercase text-wh">
								<span class="fa fa-sign-in mr-2"></span>Login</a>
								@endif
							</div>
								

							<div class="col-lg-7 col-8 social-grid-w3">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p>Follow Us:</p>
									</li>
									<li class="facebook-w3">
										<a href="#facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="twitter-w3">
										<a href="#twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li class="google-w3">
										<a href="#google">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="dribble-w3">
										<a href="#dribble">
											<span class="fa fa-dribbble"></span>
										</a>
									</li>								
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="{{route('home')}}">
						<img src="{{url('userassets/')}}/images/logo.png" alt="" class="img-fluid"><span>Tasty</span> Burger
					</a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('aboutus')}}">About Us</a></li>
							<li>
								<!-- First Tier Drop Down -->
								<label for="drop-3" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
										aria-hidden="true"></span>
								</label>
								<a href="#pages">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-3" />
								<ul>
									@if(Session::has('user'))
										 <li><b> welcome {{Session()->get('user')->name;}}</b></li>
										<li><a class="drop-text" href="{{route('manageprofile',Session()->get('user')->id)}}">Manage Profile</a></li>
										<li><a class="drop-text" href="{{route('services')}}">Services</a></li>
										<li><a class="drop-text" href="{{route('ourchef')}}">Our Chef</a></li>
										<li><a class="drop-text" href="{{route('blog')}}">Blog</a></li>
										<li><a class="drop-text" href="{{route('single')}}">Single Page</a></li>
									@else
									<li><a class="drop-text" href="{{route('register')}}">Register</a></li>
									<li><a class="drop-text" href="{{route('services')}}">Services</a></li>
									<li><a class="drop-text" href="{{route('blog')}}">Blog</a></li>
									<li><a class="drop-text" href="{{route('single')}}">Single Page</a></li>
									@endif
								</ul>
							</li>
							<li><a href="{{route('menu')}}">Menu</a></li>
							<li><a href="{{route('contactus')}}">Contact Us</a></li>
							 @if(Session::has('user'))
							 <li>
           					   <a class="dropdown-item d-flex align-items-center" href="{{route('addcart')}}">
                			     <i class="bi bi-cart-fill"></i>
                			   </a>
            				 </li>
            				 @endif
     						<!-- login -->
								<a href="https://w3layouts.com/" target="_blank" class="dwn-button ml-lg-5">
									<span class="fa fa-cloud-download mt-lg-0 mt-4" aria-hidden="true"></span>
								</a>
								<!-- //login -->
							</li>
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 --