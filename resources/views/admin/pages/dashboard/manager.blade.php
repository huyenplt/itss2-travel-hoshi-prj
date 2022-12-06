@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="card col-md-6 place-info">

            </div>
            <div class="col-md-6">
                <div class="form-group pt-5">
                    <div class="row">
                        <div class="col-6 search">
                            <input type="text" id="search" class="form-control" placeholder="{{ __('Search location') }}">
                            <i class="bi bi-search icon-search"></i>
                    </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-default"><a href="{{route('admin.dashboard.place.create', ['address' => urlencode($address)])}}">{{ __('Add Location') }}</a></button>
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
                            <tr data-url="{{route('admin.dashboard.place', $place->id)}}">
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

@section('js')
    <script src="{{asset('assets/js/admin/dashboard/manager.js')}}"></script>
@endsection
