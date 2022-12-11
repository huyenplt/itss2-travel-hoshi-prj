@php
    use App\Enums\Season;
@endphp
<div id="create-blog" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-12">
            <h3>Create New Blog</h3>
            <hr class="line-heading">
            <form action="{{route('user.blog.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="place_id" value="{{$place->id}}"/>
                <div class="form-group">
                    <label class="form-control-label" for="title">{{ __('Title') }}</label>
                    <input type="text" name="title" id="title" class="form-control mt-1" value="" required>
                </div>
                <div class="form-group my-2">
                    <label class="form-control-label mb-1" for="content">{{ __('Content') }}</label>
                    <div class="d-content px-3 py-2">
                        <div contentEditable="true" id="content" class="mb-2"></div>
                        <textarea name="content" class="d-none"></textarea>
                        <div class="mt-2 d-image"></div>
                    </div>
                </div>

                <div class="d-flex w-100 icon-list">
                    <input type="file" accept="image/png, image/jpeg" class="form-control d-none" id="image" name="file_path"/>
                    <div class="images me-3"><i class="fas fa-images"></i></div>
                    <div class="camera me-3"><i class="fas fa-video"></i></i></div>
                    <div class="location me-3"><i class="fas fa-map-marker-alt"></i></i></div>
                    <div class="emoji me-3"><i class="fas fa-smile"></i></i></i></i></div>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="season"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Season') }}</label>
                    <select class="form-control" name="season" id="season">
                        @foreach (Season::cases() as $season)
                            <option class="uppercase" value="{{ $season->value }}">{{ $season->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="price"><i class="w3-xxlarge fa fa-map mr-1"></i>{{ __('Location Price') }}</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="{{ __('Price...') }}" value="" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn-solid-reg mr-3" href="#your-link">CREATE</button>
                    <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                </div>
            </form>
        </div> <!-- end of col -->
    </div> <!-- end of row -->

    <emoji-picker class="d-none"></emoji-picker>

</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->
