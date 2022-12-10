@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Location', 'navName' => 'Location', 'activeButton' => 'laravel'])

@section('content')
@php
    use App\Enums\Season;
@endphp
    <div class="content place-form">
        <div class="container-fluid">
            @include('admin.pages.components.helper.alert')
            <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-0">{{__('Add Location')}}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.dashboard.place.store') }}" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row pl-lg-4">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">
                                            <i class="w3-xxlarge fa fa-photo mr-1"></i>{{ __('Location Photo') }}
                                        </label>
                                        <div class="block-img">
                                            <img id="show-img" src="" />
                                        </div>
                                        <div class="text-center justify-content-center d-flex hide" id="load-images">
                                            <div type="" class="btn-custom prev-btn mr-3">
                                                <i class="nc-icon nc-button-play"></i>
                                            </div>
                                            <div type="" class="btn-custom next-btn">
                                                <i class="nc-icon nc-button-play"></i>
                                            </div>
                                        </div>
                                        <input type="button" value="{{__('Choose image')}}" id="choose-image" />
                                        <input type="button" value="{{__('Remove image')}}" id="remove-image" class="hide"/>
                                        <input type="file" multiple accept="image/png, image/jpeg" class="form-control hide" id="image" name="file_path[]"/>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Name') }}</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Name...') }}" value="" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="address"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Address') }}</label>
                                        <input type="text" name="address" id="address" class="form-control" value="{{$address}}" placeholder="{{ __('Address...') }}" value="" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="content"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Description') }}</label>
                                        <textarea name="content" id="content" class="form-control" style="height: 200px" placeholder="{{ __('Description...') }}" value="" required></textarea>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label class="form-control-label" for="season"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Season') }}</label>
                                        <select class="form-control" name="season" id="season">
                                            @foreach (Season::cases() as $season)
                                                <option class="uppercase" value="{{ $season->value }}">{{ $season->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="cost"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Cost') }}</label>
                                        <input type="text" name="cost" id="cost" class="form-control" placeholder="{{ __('Cost...') }}" value="" required>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/admin/dashboard/create_place.css')}}" />
@endsection

@section('js')
    <script src="{{asset('assets/js/admin/dashboard/create_place.js')}}"></script>
    <script>
        $(function() {

        })
    </script>
@endsection
