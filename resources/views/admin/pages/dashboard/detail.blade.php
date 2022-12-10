@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        @include('admin.pages.components.helper.alert')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    @if (count($placeImages))
                        <img id="place-image" src="{{asset($placeImages[0]->file_path)}}" />
                    @else
                        Không có hình ảnh nào
                    @endif
                </div>
                <div class="thumbnails d-none">
                    @foreach ($placeImages as $placeImage)
                        <img src="{{asset($placeImage->file_path)}}">
                    @endforeach
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
                    <button type="" class="btn">
                        <a href="{{route('admin.dashboard.place.delete', $place->id)}}">{{ __('Delete') }}</a>
                    </button>
                    <button type="" class="btn btn-default">
                        <a href="{{route('admin.dashboard.place.edit', $place->id)}}">
                            {{ __('Edit') }}
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
