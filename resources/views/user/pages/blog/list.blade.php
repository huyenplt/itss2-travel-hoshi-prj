@extends('user.layout.page')

@section('title')
<link rel="stylesheet" href="{{ asset('assets/css/user/page_navbar_custom.css') }}" />
<script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
<title>Place</title>
@endsection

@section('section')

<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> {{ $place->name }} </h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- slider place image -->
<div class="slider place-slider">
    <div class="container">
        <div class="row favorite px-4 mb-3">
            <div class="col-lg-12 d-flex justify-content-between">
                <div class="d-flex align-items-center ml-3 favorite-action">
                    <span>Do you love this place?</span>
                    <a href="{{ Auth::user()->can('like', $place) ? route('user.favourite.like', ['place' => $place]) : route('user.favourite.dislike', ['place' => $place])}}" class="btn favorite-action__btn {{ Auth::user()->can('like', $place)? '' : 'liked'}}" type="submit" data-toggle="tooltip" data-placement="top" title="{{ Auth::user()->can('like', $place)? 'Like' : 'Dislike'}}"><i class="fas fa-heart"></i></a>
                </div>
                <div class="d-flex align-items-center">
                    <svg style="width: 24px; height: 24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path fill="#FD8489" d="M353.6 304.6c-25.9 8.3-64.4 13.1-105.6 13.1s-79.6-4.8-105.6-13.1c-9.8-3.1-19.4 5.3-17.7 15.3 7.9 47.2 71.3 80 123.3 80s115.3-32.9 123.3-80c1.6-9.8-7.7-18.4-17.7-15.3zm-152.8-48.9c4.5 1.2 9.2-1.5 10.5-6l19.4-69.9c5.6-20.3-7.4-41.1-28.8-44.5-18.6-3-36.4 9.8-41.5 27.9l-2 7.1-7.1-1.9c-18.2-4.7-38.2 4.3-44.9 22-7.7 20.2 3.8 41.9 24.2 47.2l70.2 18.1zm188.8-65.3c-6.7-17.6-26.7-26.7-44.9-22l-7.1 1.9-2-7.1c-5-18.1-22.8-30.9-41.5-27.9-21.4 3.4-34.4 24.2-28.8 44.5l19.4 69.9c1.2 4.5 5.9 7.2 10.5 6l70.2-18.2c20.4-5.3 31.9-26.9 24.2-47.1zM248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200z" />
                    </svg>
                    <span class="ml-1 favorite__count">{{ $place->countLikes() }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            @foreach ($place->placeImages as $placeImage)
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="image" src="{{asset($placeImage->file_path)}}" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                            @endforeach

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of sliedr-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <p class="p-heading">{{ $place->content }}</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider -->
<!-- end of testimonials -->

@can('like', $place)
<a href="{{ route('user.favourite.like', ['place' => $place]) }}" class="btn btn-primary">Like</a>
@endcan
@cannot('like', $place)
<a href="{{ route('user.favourite.dislike', ['place' => $place]) }}" class="btn btn-primary">UnLike</a>
@endcan

<a href="#create-blog" class="btn-solid-lg page-scroll p-3 mr-2 popup-with-move-anim">+ Create new blog</a>
<!-- Intro -->
<div id="blog" class="basic-1">

    <div class="container">
        @if (count($blogs))
        @foreach ($blogs as $blog)
        <div>
            @if (count($blog->blogImages))
            <img src="{{asset($blog->blogImages[0]->file_path)}}" />
            @endif
            <a href="{{route('user.blog.detail' , ['id' => $blog->id])}}">{{$blog->title}}</a>
            <p>{{$blog->content}}</p>
        </div>
        @endforeach
        @else
        <strong>Chưa có blog nào</strong>
        @endif
    </div>
</div>

@include('user.pages.components.blog.create_form')
@endsection
