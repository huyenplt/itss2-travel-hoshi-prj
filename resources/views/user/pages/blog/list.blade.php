@extends('user.layout.page')

@section('title')
    <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
    <title>Place</title>
@endsection

@section('section')

<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> {{ $place->countLikes() }} hihi </h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

@can('like', $place)
<a href="{{ route('user.favourite.like', ['place' => $place]) }}" class="btn btn-primary">Like</a>
@endcan
@cannot('like', $place)
<a href="{{ route('user.favourite.dislike', ['place' => $place]) }}" class="btn btn-primary">UnLike</a>
@endcan


    <a href="#create-blog" class="btn-solid-lg page-scroll p-3 mr-2 popup-with-move-anim">+   Create new blog</a>
    <!-- Intro -->
    <div id="blog" class="basic-1">
        <h1>{{$place->name}}</h1>
        @foreach ($place->placeImages as $placeImage)
            <img class="place-img" src="{{asset($placeImage->file_path)}}" />
        @endforeach
        <div>{{$place->content}}</div>
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
