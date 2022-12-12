@extends('user.layout.app')

@section('title')
@yield('title')
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

@yield('header')

@yield('section')

@endsection
