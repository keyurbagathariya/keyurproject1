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
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
</div>
<!-- //page details -->

<!-- about -->
<section class="w3ls-bnrbtm py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3">About <span>Us</span></h3>
            <p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.Nemo
                enim totam rem aperiam.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 pr-xl-5 mt-xl-2 mt-lg-0">
                <h3 class="title-sub mb-4">Donec conse sapien archi<br>ut cursus rhons.</h3>
                <p class="sub-para">Nullam dui mi, vulputate ac metus
                    at, semper
                    varius orci. Nulla accumsan ac elit in congue. Class aptent taciti sociosqu ad litora torquent
                    per conubia.</p>
                <p class="sub-para pt-4 mt-4 border-top">Donec consequat sapien ut leo cursus rhoncus. Nullam dui
                    mi, vulputate ac metus at, semper varius orci..</p>
            </div>
            <div class="col-lg-6 text-center mt-lg-0 mt-4">
                <img src="{{url('userassets/')}}/images/ab.jpg" alt="about" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<!-- //about -->

<!-- services -->
<section class="middle py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <p class="w3ls-title-sub">Our Work</p>
            <h3 class="w3ls-title mb-3">Excellent <span>Services</span></h3>
        </div>
        <div class="row grids-w3 py-xl-5 py-lg-4 pt-lg-0 pt-4">
            <div class="col-lg-5 w3pvt-lauits_banner_bottom_left">
                <div class="row">
                    <div class="col-8 wthree_banner_bottom_grid_right text-right">
                        <h4 class="mb-3"><a href="{{route('login')}}">Free Shipping</a></h4>
                        <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                    </div>
                    <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
                        <img src="{{url('userassets/')}}/images/s1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 w3pvt-lauits_banner_bottom_left">

            </div>
            <div class="col-lg-5 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
                <div class="row">
                    <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
                        <img src="{{url('userassets/')}}/images/s2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-8 wthree_banner_bottom_grid_right">
                        <h4 class="mb-3"><a href="{{route('login')}}">Free & Easy Returns</a></h4>
                        <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row grids-w3 py-xl-5 py-lg-4 mt-lg-0 mt-4">
            <div class="col-lg-4 w3pvt-lauits_banner_bottom_left">
                <div class="row">
                    <div class="col-8 wthree_banner_bottom_grid_right text-right pl-lg-0">
                        <h4 class="mb-3"><a href="{{route('login')}}">Online Order</a></h4>
                        <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                    </div>
                    <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pr-lg-0">
                        <img src="{{url('userassets/')}}/images/s3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 w3pvt-lauits_banner_bottom_left pr-0">

            </div>
            <div class="col-lg-4 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
                <div class="row">
                    <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pl-lg-0">
                        <img src="{{url('userassets/')}}/images/s4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-8 wthree_banner_bottom_grid_right pr-lg-0">
                        <h4 class="mb-3"><a href="{{route('login')}}">24/7 Support</a></h4>
                        <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img-blog-2">
        <img src="{{url('userassets/')}}/images/img.png" alt="" class="img-fluid">
    </div>
</section>
<!-- //services -->
@endsection