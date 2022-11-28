@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @foreach ($places as $place)
            {{$place->name}}
            @endforeach
        </div>
    </div>
@endsection