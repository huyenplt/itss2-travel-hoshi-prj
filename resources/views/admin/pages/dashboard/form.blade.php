@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content place-form">
        <div class="container-fluid">
            <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-0">{{ __('Add Location') }}</h3>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- @method('patch') -->
                            <!-- <h6 class="heading-small text-muted mb-1">{{ __('Location information') }}</h6> -->

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">
                                        <i class="w3-xxlarge fa fa-photo mr-1"></i>{{ __('Location Photo') }}
                                    </label>
                                    <input type="file" class="form-control" name="image" required/>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Name...') }}" value="" required>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="address"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Address') }}</label>
                                    <input type="text" name="address" id="address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Address...') }}" value="" required>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Description') }}</label>
                                    <textarea name="description" id="description" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" style="height: 200px" placeholder="{{ __('Description...') }}" value="" required></textarea>
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
