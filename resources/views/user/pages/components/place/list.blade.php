
{!! app('request')->input('query')? null : $places->links('user.pages.components.helper.paginate') !!}
@foreach ($places as $place)
    <div class="place-item">
        <a href="{{route('user.place.index', ['address' => urlencode($place->address)])}}" class="image-container place-item__img">
            <img class="img-fluid" src="{{ count($place->placeImages) ? asset($place->placeImages[0]->file_path) : '' }} " alt="no file">
        </a>
        <div class="place-item-content">
            <div class="d-flex">
                <a href="{{route('user.place.index', ['place' => urlencode($place->name)])}}"><h5 class="place-item-content__title mr-3">{{ $place->name }}</h5></a>
                <div class="place-item-content__like">
                    <i class="fas fa-heart"></i>
                    <span>{{ $place->countLikes() }}</span>
                </div>
            </div>
            <div class="place-item-content__address mb-2">
                <i class="fas fa-map-marker-alt"></i>
                <span>{{ $place->address }}</span>
            </div>
            <p class="place-item-content__desc">{{ $place->content }}</p>
        </div>
    </div>
@endforeach
{!! app('request')->input('query')? null : $places->links('user.pages.components.helper.paginate') !!}
