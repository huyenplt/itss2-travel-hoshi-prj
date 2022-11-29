@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        @include('admin.pages.components.helper.alert')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://deviet.vn/wp-content/uploads/2019/04/vuong-quoc-anh.jpg" />
                </div>
                <div class="col-md-6 align-items-center">
                    <h5 class="font-weight-bold">{{$place->name}}</h5>
                    {{$place->content}}
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6 text-center d-flex justify-content-center">
                    <div type="" class="btn-custom prev-btn mr-3">
                        <i class="nc-icon nc-button-play"></i>
                    </div>
                    <div type="" class="btn-custom next-btn">
                        <i class="nc-icon nc-button-play"></i>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <button type="" class="btn btn-default">
                        <a href="{{route('admin.dashboard.place.delete', $place->id)}}">{{ __('Delete') }}</a>
                    </button>
                    <button type="" class="btn btn-default">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
