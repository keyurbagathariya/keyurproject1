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
        <li class="breadcrumb-item active" aria-current="page">Menu</li>
    </ol>
</div>
<!-- //page details -->

<!-- menu -->
<section class="portfolio py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3">Our <span>Menu</span></h3>
            <p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.Nemo
                enim totam rem aperiam.</p>
        </div>
        @foreach ($menu as $m)
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="gallery-demo">
                    <a href="#gal1">
                        <img src="{{url('upload/'.$p->iamge)}}" alt=" " class="img-fluid" />
                        <h4 class="p-mask">{{$p->name}} - <span>${{$p->price}}</span></h4>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- gallery model-->
<!-- gallery popup 1 -->
@foreach ($menu as $m)
<div id="gal1" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src="{{url('upload/'.$p->iamge)}}" alt="">
        <h4 class="p-mask">{{$p->name}} - - <span>${{$p->price}}</span></h4>
        <a href="{{route('login')}}" class="button-w3ls active mt-3">Order Now
            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
@endforeach
<!-- //gallery popup 1 -->
<!-- //menu -->
@endsection