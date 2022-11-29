@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://deviet.vn/wp-content/uploads/2019/04/vuong-quoc-anh.jpg" />
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    description heredescription heredescrdescription heredescription heredescrdescription heredescription heredescrdescription heredescription heredescrdescription heredescription heredescription heredescription heredescription here
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
                    <button type="" class="btn btn-default">{{ __('Delete') }}</button>
                    <button type="" class="btn btn-default">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
