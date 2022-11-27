@extends('user.layout.index')

@section('title')
    <title>Places</title>
@endsection

@section('content')
<h2>All places</h2>
@foreach ($places as $place)
    <p>
        {{ $place->name }} 
        <form action="{{route('admin.place.delete', $place->id)}}" method="post">
            @csrf
            <button type="submit">Delete place</button>
        </form>
    </p>
@endforeach
<a href="{{route('admin.place.create')}}"><button type="submit">Create place</button></a>

@endsection
