@extends('user.layout.page')

@section('title')
    <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
    <title>Placesss</title>
@endsection

@section('section')
    <a href="#create-blog" class="btn-solid-lg page-scroll p-3 mr-2 popup-with-move-anim">+   Create new blog</a>
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <h1>{{$place->name}}rrrr</h1>
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
