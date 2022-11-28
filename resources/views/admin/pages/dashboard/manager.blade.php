@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm">
                <img src="https://deviet.vn/wp-content/uploads/2019/04/vuong-quoc-anh.jpg" />
            </div>
            <div class="col-sm">
                <div class="p-4">
                    <div class="border border-secondary border-bottom-0">
                        @foreach ($places as $place)
                            <div class="p-2 border-bottom">{{$place->name}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection