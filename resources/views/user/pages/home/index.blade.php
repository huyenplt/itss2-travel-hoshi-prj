@extends('user.layout.app')

@section('title')
    <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
    <title>Home</title>
@endsection

@section('content')
    @include('user.pages.components.helper.alert')

    <!-- Header -->
    @include('user.layout.header')
    <!-- end of header -->
    
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <form action="">
            <input type="text" name="query" value="{{$query ?? ''}}">
            <button type="submit">Search</button>
        </form>
        <div class="container">
            @foreach ($places as $place)
                <a href="{{route('user.place.index', ['address' => urlencode($place->address)])}}">{{$place->address}}</a>
            @endforeach
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    @include('user.pages.components.home.blog')
@endsection
