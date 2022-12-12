@extends('user.layout.page')

@section('title')
<link rel="stylesheet" href="{{ asset('assets/css/user/place_custom.css') }}" />
<script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
<title>Blog</title>
@endsection

@section('section')

<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> {{ $blog->place->name }} </h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Privacy Content -->
<div class="ex-basic-2">
    <div class="container">
    @include('user.pages.components.helper.alert')
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <div>
                        
                    </div>
                    <h3>{{ $blog->title }}</h3>
                    @if (count($blog->blogImages))
                        @foreach ($blog->blogImages as $blogImage)
                            <img src="{{asset($blogImage->file_path)}}" />
                        @endforeach
                    @endif
                    <p>{{$blog->content}}</p>
                </div> <!-- end of text-container-->

                <div class="blog-rating container-wrapper">
                    <div class="container d-flex align-items-center justify-content-center">
                        <div class="row justify-content-center">
                            <!-- star rating -->
                            <div class="rating-wrapper">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="{{$i}}-star-rating" {{$userBlogVote && $userBlogVote->vote == $i ? 'checked' : ''}} name="star-rating" value="{{$i}}">
                                    <label for="{{$i}}-star-rating" class="star-rating">
                                        <i class="fas fa-star d-inline-block"></i>
                                    </label>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
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
                    <form action="{{route('user.comment.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="blog_id" name="blog_id" value="{{$blog->id}}">
                        <div class="form-group">
                            <input name="comment" type="text" data-validation="required" class="w-100 p-3" style="height: 150px" placeholder="Your comment..." />
                        </div>

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn-solid-reg mr-3" href="#your-link">POST</button>
                            <a class="btn-outline-reg back mt-0" href="{{ route('user.home') }}">BACK</a>
                        </div>
                    </form>
                </div> <!-- end of text-container-->
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>

@endsection

@section('js')
    <script src="{{asset('assets/js/user/blog_detail.js')}}"></script>
@endsection
