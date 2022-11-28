@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="card col-md-6 place-info">
                <div class="card-body">
                    <h5 class="title">{{ __('Ha Noi') }}</h5>
                    <img src="https://deviet.vn/wp-content/uploads/2019/04/vuong-quoc-anh.jpg" />
                    <p class="pt-2">description heredescription heredescrdescription heredescription heredescrdescription heredescription heredescrdescription heredescription heredescrdescription heredescription heredescription heredescription heredescription here</p>
                    <div class="text-center">
                        <a href="{{route('admin.dashboard.detail')}}">
                            <button type="" class="btn btn-default mt-4">{{ __('Localtion Detail') }}</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-5">
                    <div class="row">
                        <div class="col-8">
                            <input type="text" name="" id="" class="form-control" placeholder="{{ __('Name Location') }}" value="" required>
                        </div>
                        <div class="mr-1">
                            <button type="submit" class="btn btn-default">{{ __('Search') }}</button>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-default">{{ __('Add Location') }}</button>
                        </div>
                    </div>
                </div>

                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped border border-secondary">
                        <thead>
                            <th>Address</th>
                        </thead>
                        <tbody>
                            @foreach ($places as $place)
                            <tr>
                                <td style="width:100%">{{ $place->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
