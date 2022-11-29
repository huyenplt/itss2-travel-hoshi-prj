<div class="card-body">
    <h5 class="title">{{ __($place->name) }}</h5>
    <img src="https://deviet.vn/wp-content/uploads/2019/04/vuong-quoc-anh.jpg" />
    <p class="pt-2 detail">{{$place->content}}</p>
    <div class="text-center">
        <a href="{{route('admin.dashboard.detail', $place->id)}}">
            <button type="" class="btn btn-default mt-4">{{ __('Localtion Detail') }}</button>
        </a>
    </div>
</div>