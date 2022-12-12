@php
    use App\Enums\Season;
@endphp

@extends('user.layout.page')

@section('title')
<title>Homee</title>
@endsection

@section('header')
    @include('user.layout.header')
@endsection
<!-- end of header -->

@section('section')
<!-- Intro -->
<div id="intro" class="basic-1">
    <form class="container user-place-search" action="">
        <div class="form-row mb-2 p-1">
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$address ?? ''}}" placeholder="Where do you want to go?">
            </div>
            <div class="form-group col-md-2">
                <label for="season">Season</label>
                <select id="season" name="season" class="form-control">
                    <option value="0">Season...</option>
                    @foreach (Season::cases() as $season_select)
                        <option class="uppercase" {{ $season == $season_select->value ? 'selected' : '' }} value="{{ $season_select->value }}">{{ $season_select->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$price ?? ''}}">
            </div>
            <div class="form-group col-md-1 d-flex flex-column justify-content-end">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <div class="container place-list" id="tag_container">
        @include('user.pages.components.place.list')
    </div> <!-- end of container -->

</div> <!-- end of basic-1 -->
<!-- end of intro -->

@include('user.pages.components.home.blog')
@endsection
