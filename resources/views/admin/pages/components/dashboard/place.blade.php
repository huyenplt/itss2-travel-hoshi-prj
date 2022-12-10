<div class="card-body">
    <h4 class="title">{{ __($place->name) }}</h4>
    @if (count($placeImages))
        <img src="{{asset($placeImages[0]->file_path)}}" />
    @else
        <div class="text-warning">Không có hình ảnh nào</div>
    @endif
    <p class="pt-2 detail">{{$place->content}}</p>
    <div class="text-center">
        <a href="{{route('admin.dashboard.detail', $place->id)}}">
            <button type="" class="btn btn-default mt-4">{{ __('Localtion Detail') }}</button>
        </a>
    </div>
</div>