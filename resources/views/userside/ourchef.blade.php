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
        <li class="breadcrumb-item active" aria-current="page">Our chefs</li>
    </ol>
</div>
<!-- //page details -->
<!-- team -->
<div class="team py-5" id="chefs">
    <div class="container-fluid py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3">Our <span>Chefs</span></h3>
            <p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.Nemo
                enim totam rem aperiam.</p>
        </div>
        <div class="row team-bottom pt-4">
            <div class="col-lg-3 col-6 team-grid">
                <a href="#team"><img src="{{url('userassets/')}}/images/t1.png" class="img-fluid" alt=""></a>
                <div class="caption">
                    <div class="team-text">
                        <h4><a href="#team">Mack Joe</a></h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6 team-grid">
                <a href="#team"><img src="{{url('userassets/')}}/images/t2.png" class="img-fluid" alt=""></a>
                <div class="caption">
                    <div class="team-text">
                        <h4><a href="#team">Cruz Deo</a></h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6 team-grid mt-lg-0 mt-4">
                <a href="#team"><img src="{{url('userassets/')}}/images/t3.png" class="img-fluid" alt=""></a>
                <div class="caption">
                    <div class="team-text">
                        <h4><a href="#team">Rochy Jae</a></h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6 team-grid  mt-lg-0 mt-4">
                <a href="#team"><img src="{{url('userassets/')}}/images/t4.png" class="img-fluid" alt=""></a>
                <div class="caption">
                    <div class="team-text">
                        <h4><a href="#team">Rojo Poy</a></h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //team -->
@endsection