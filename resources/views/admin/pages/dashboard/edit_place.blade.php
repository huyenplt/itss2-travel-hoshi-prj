@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Location', 'navName' => 'Location', 'activeButton' => 'laravel'])

@section('content')

@php
    use App\Enums\Season;
@endphp

    <div class="content place-form">
        <div class="container-fluid">
            <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-0">{{__('Edit Location')}}</h3>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.dashboard.place.update', $place) }}" autocomplete="off"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">
                                        <i class="w3-xxlarge fa fa-photo mr-1"></i>{{ __('Location Photo') }}
                                    </label>
                                    <input type="file" multiple accept="image/png, image/jpeg" class="form-control" id="image" name="file_path[]"/>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="name"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Name...') }}" value="{{$place->name}}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="address"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Address') }}</label>
                                    <input type="text" name="address" id="address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Address...') }}" value="{{$place->address}}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="content"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Description') }}</label>
                                    <textarea name="content" id="content" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" style="height: 200px" placeholder="{{ __('Description...') }}" value="" required>{{$place->content}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="season"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Season') }}</label>
                                    <select class="form-control" name="season" id="season">
                                        @foreach (Season::cases() as $season)
                                            <option class="uppercase" {{$season->value == $place->season ? 'selected' : ''}} value="{{ $season->value }}">{{ $season->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="cost"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Cost') }}</label>
                                    <input type="text" name="cost" id="cost" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Cost...') }}" value="{{$place->cost}}" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-default mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
