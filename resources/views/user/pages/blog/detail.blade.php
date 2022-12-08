@extends('user.layout.app')

@section('title')
<title>Home</title>
@endsection

@section('content')
<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $blog->title }}</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="index.html">{{ $place }}</a><i class="fa fa-angle-double-right"></i><span>Blog</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->

<!-- Privacy Content -->
<div class="ex-basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <h3>{{ $blog->title }}</h3>
                    <img src="{{ asset('web/images/project-1.jpg') }}" alt="">
                    <p>Aria Landing Page uses tracking technology on the landing page, in the Applications, and in the Platforms, including mobile application identifiers and a unique Aria user ID to help us recognize you across different Services, to monitor usage and web traffic routing for the Services, and to customize and improve the Services.</p>
                    <p> By visiting Aria or using the Services you agree to the use of cookies in your browser and HTML-based emails. Cookies are small text files placed on your device when you visit a website. By using any of the Services, or submitting or collecting any Personal Information via the Services, you consent and use of your <a class="green" href="#your-link">Personal Information</a></p>
                </div> <!-- end of text-container-->

                <div class="text-container rating d-flex">
                    <h5>Star:</h5>
                    <p><i class="far fa-star ml-1"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                </div> <!-- end of text-container-->
                <div class="text-container comments">
                    <h5>Comments: </h5>
                    <div class="comment d-flex">
                        <h6 class="comment__user">Viet Nguyen: </h6>
                        <p class="comment__content ml-3">Ok good job!</p>
                    </div>
                    <div class="comment d-flex">
                        <h6 class="comment__user">Viet Nguyen: </h6>
                        <p class="comment__content ml-3">Ok good job!</p>
                    </div>
                    <div class="comment d-flex">
                        <h6 class="comment__user">Viet Nguyen: </h6>
                        <p class="comment__content ml-3">Ok good job!</p>
                    </div>
                </div> <!-- end of text-container-->
                <a class="btn-outline-reg back" href="{{ route('user.home') }}">BACK</a>
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->

@include('user.pages.components.home.blog')
@endsection
