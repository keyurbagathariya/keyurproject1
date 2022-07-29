@extends('userside/master')

@section('main')

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
                        <h4 class="mb-3"><a href="login.html">Free Shipping</a></h4>
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