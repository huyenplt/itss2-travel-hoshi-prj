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
<div class="ex-basic-2 pt-5">
    <div class="container">
        @include('user.pages.components.helper.alert')
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    @if(Auth::user()->can('delete', $blog))
                    <div class="d-flex justify-content-end">
                        <a href="{{route('user.blog.remove' , ['blog' => $blog])}}" class="btn-solid-lg p-3 mr-2">
                            <i class="fas fa-trash mr-2"></i>
                            <span>Delete this blog</span>
                        </a>
                    </div>
                    @endif
                    <h3>{{ $blog->title }}</h3>
                    @if (count($blog->blogImages))
                    @foreach ($blog->blogImages as $blogImage)
                    <img class="pb-4" src="{{asset($blogImage->file_path)}}" />
                    @endforeach
                    @endif
                    <p>{{$blog->content}}</p>
                </div> <!-- end of text-container-->

                <div class="text-container rating d-flex align-items-center">
                    <h5 class="mr-2 mb-0">Rating: </h5>
                    @for ($i = 0; $i < round($rating); $i++)
                        <i class="fas fa-star mr-1 d-inline-block checked"></i>
                    @endfor
                    @for ($i = round($rating); $i < 5; $i++)
                        <i class="fas fa-star mr-1 d-inline-block"></i>
                    @endfor
                    <div class="rating__txt ml-2">{{ $rating }} average based on {{ count($blog->userBlogVotes) }} reviews.</div>

                </div> <!-- end of text-container-->
                <div class="text-container comments">
                    <h5>Comments: </h5>
                    @foreach ($comments as $comment)
                    <div class="comment d-flex">
                        <h6 class="comment__user">{{$comment->user->name}}: </h6>
                        <p class="comment__content ml-3">{{$comment->comment}}</p>
                        @if(Auth::user()->can('delete', $comment))
                        <a href="{{route('user.comment.delete', ['comment' => $comment])}}" class="comment-delete-btn ml-1" type="submit" data-toggle="tooltip" data-placement="top" title="Delete this comment"><i class="fas fa-times"></i></a>
                        @endif
                    </div>
                    @endforeach
                </div> <!-- end of text-container-->
                <div class="text-container">
                    <h5>What do you think about this blog? </h5>
                    <div class="blog-rating vote container-wrapper">
                        <div class="container d-flex align-items-center justify-content-begin my-4">
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
                    <form action="{{route('user.comment.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="blog_id" id="blog_id" value="{{$blog->id}}">
                        <div class="form-group">
                            <textarea name="comment" id="comment" class="w-100 p-3" style="height: 150px" placeholder="Your comment..."></textarea>
                        </div>

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn-solid-reg mr-3">POST</button>
                            <a class="btn-outline-reg back mt-0" href="{{ route('user.home') }}">BACK</a>
                        </div>
                    </form>
                </div> <!-- end of text-container-->
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->

@endsection

@section('js')
    <script src="{{asset('assets/js/user/blog_detail.js')}}"></script>
@endsection
