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
@include('user.pages.components.helper.alert')
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
                    @foreach ($comments as $comment)
                    <div class="comment d-flex">
                        <h6 class="comment__user">{{$comment->user->name}}: </h6>
                        <p class="comment__content ml-3">{{$comment->comment}}</p>
                    </div>
                    @endforeach
                </div> <!-- end of text-container-->
                <div class="text-container">
                    <h5>Post a comment: </h5>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" class="w-100 p-3" style="height: 150px" placeholder="Your comment..."></textarea>
                        </div>

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn-solid-reg mr-3" href="#your-link">POST</button>
                            <a class="btn-outline-reg back mt-0" href="{{ route('user.home') }}">BACK</a>
                        </div>
                    </form>
                </div> <!-- end of text-container-->

                <div class="blog-rating container-wrapper">
                    <div class="container d-flex align-items-center justify-content-center">
                        <div class="row justify-content-center">

                            <!-- star rating -->
                            <div class="rating-wrapper">

                                <!-- star 5 -->
                                <input type="radio" id="5-star-rating" name="star-rating" value="5">
                                <label for="5-star-rating" class="star-rating">
                                    <i class="fas fa-star d-inline-block"></i>
                                </label>

                                <!-- star 4 -->
                                <input type="radio" id="4-star-rating" name="star-rating" value="4">
                                <label for="4-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                </label>

                                <!-- star 3 -->
                                <input type="radio" id="3-star-rating" name="star-rating" value="3">
                                <label for="3-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                </label>

                                <!-- star 2 -->
                                <input type="radio" id="2-star-rating" name="star-rating" value="2">
                                <label for="2-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                </label>

                                <!-- star 1 -->
                                <input type="radio" id="1-star-rating" name="star-rating" value="1">
                                <label for="1-star-rating" class="star-rating star">
                                    <i class="fas fa-star d-inline-block"></i>
                                </label>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- <a class="btn-outline-reg back" href="{{ route('user.home') }}">BACK</a> -->
                <form action="{{route('user.comment.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                    <input type="text" name="comment">
                    <button type="submit">Comment</button>
                </form>
                <a class="btn-outline-reg back" href="{{ route('user.home') }}">BACK</a>
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->

@include('user.pages.components.home.blog')
@endsection
