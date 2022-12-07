@extends('user.layout.index')

@section('title')
    <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
    <title>Home</title>
@endsection

@section('content')
    @include('user.pages.components.helper.alert')
    {{dd($data)}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blog-modal">
        Create blog
    </button>

    @include('user.pages.components.home.blog')
@endsection

@section('js')
    <script src="{{asset('assets/js/user/home.js')}}"></script>
@endsection
