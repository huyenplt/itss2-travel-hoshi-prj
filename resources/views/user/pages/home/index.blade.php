@php
    use App\Enums\Season;
@endphp

@extends('user.layout.app')

@section('title')
<script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
<title>Home</title>
@endsection

@section('content')
<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->

<!-- Navbar -->
@include('user.layout.navbar')
<!-- end of navbar -->

<!-- Header -->
@include('user.layout.header')
<!-- end of header -->

@include('user.pages.components.helper.alert')

<!-- Intro -->
<div id="intro" class="basic-1">
    <form class="container user-place-search" action="">
        <div class="form-row mb-2 p-1">
            <div class="form-group col-md-6">
                <label for="inputCity">Address</label>
                <input type="text" class="form-control user-place-search-key" id="inputCity" name="query" value="{{$query ?? ''}}" placeholder="Where do you want to go?">
            </div>
            <div class="form-group col-md-2">
                <label for="season">Season</label>
                <select id="season" name="season" class="form-control">
                    <option selected>Season...</option>
                    @foreach (Season::cases() as $season)
                        <option class="uppercase" value="{{ $season->value }}">{{ $season->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group col-md-1 d-flex flex-column justify-content-end">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <div class="container place-list" id="tag_container">
        @include('user.pages.components.place.list')
    </div> <!-- end of container -->

    {!! app('request')->input('query')? null : $places->links('user.pages.components.helper.paginate') !!}

</div> <!-- end of basic-1 -->
<!-- end of intro -->

@include('user.pages.components.home.blog')
@endsection
