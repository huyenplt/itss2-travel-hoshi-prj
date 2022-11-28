@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col card-title">All places {{ old('name', auth()->user()->name) }}</h4>
                                <form class="col-lg-4 col-md-3 col-sm-5" method="" action="" autocomplete="off">
                                    <div class="form-group dashboard-search d-flex align-items-center">
                                        <i class="w3-xxlarge nc-icon nc-zoom-split dashboard-search__icon"></i>
                                        <input type="text" name="" id="" class="form-control dashboard-search__input" placeholder="{{ __('Search') }}" autofocus>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Address</th>
                                </thead>
                                <tbody>
                                    @foreach ($addresses as $address)
                                    <tr data-action="{{route('admin.dashboard.manager', ['address' => urlencode($address->address)])}}">
                                        <td style="width:100%">{{ $address->address }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $addresses->links('admin.pages.components.helper.paginate') !!}
@endsection
