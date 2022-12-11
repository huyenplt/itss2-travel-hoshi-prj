@extends('user.layout.app')

@php
    use App\Enums\Season;
@endphp

@section('title')
    <title>Home</title>
@endsection

@section('content')
    @include('user.pages.components.helper.alert')

    <!-- Header -->
    @include('user.layout.header')
    <!-- end of header -->
    
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <form action="">
            <input type="text" name="address" value="{{$address ?? ''}}" placeholder="Nhập tỉnh hoặc địa điểm du lịch">
            <select class="form-control" name="season" id="season">
                <option value="0">Nothing</option>  
                @foreach (Season::cases() as $season_select)
                    <option class="uppercase" {{$season == $season_select->value ? 'selected' : '' }} value="{{ $season_select->value }}">{{ $season_select->name }}</option>
                @endforeach
            </select>
            <input type="number" min="0" name="price" placeholder="Nhập giá" value="{{$price ?? ''}}" />VNĐ<br/>
            <button type="submit">Search</button>
        </form>
        <div class="container">
            @foreach ($places as $place)
                @if (count($place->placeImages))
                    <img src="{{asset($place->placeImages[0]->file_path)}}" /> 
                @else
                    Không có ảnh
                @endif
                <a href="{{asset(route('user.place.index', ['place' => urlencode($place->name)]))}}">{{$place->name}}</a><br/>
            @endforeach
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    {!! $places->links('user.pages.components.helper.paginate') !!}
@endsection
