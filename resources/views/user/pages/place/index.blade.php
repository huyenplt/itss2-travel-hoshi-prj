@extends('user.layout.app')

@section('title')
    <title>Place</title>
@endsection

@section('content')
    @include('user.pages.components.helper.alert')

    <!-- Header -->
    @include('user.layout.header')
    <!-- end of header -->
    
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <h1>{{$address}}</h1>
        <div class="container">
            @foreach ($places as $place)
                <a>{{$place->name}}</a>
            @endforeach
        </div>
    </div>
@endsection
