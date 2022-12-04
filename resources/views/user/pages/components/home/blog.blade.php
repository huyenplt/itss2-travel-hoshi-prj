<div class="modal fade" id="blog-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3" id="exampleModalLabel">Create blog</h5>
                <p>{{__(Auth::user()->name)}}</p>
                <form action="{{route('user.blog.store')}}" method="post">
                    @csrf
                    <div class="d-content" class="mb-2">
                        <div contentEditable="true" id="content" class="mb-2">
                        </div>
                        <textarea name="content" class="d-none"></textarea>
                        <div class="mt-2 d-image"></div>
                    </div>
                    <div class="d-flex w-100">
                        <input type="file" accept="image/png, image/jpeg" class="form-control d-none" id="image" name="file_path"/>
                        <div class="images me-3"><i class="bi bi-images"></i></div>
                        <div class="camera me-3"><i class="bi bi-camera-video-fill"></i></div>
                        <div class="location me-3"><i class="bi bi-geo-alt-fill"></i></div>
                        <div class="emoji me-3"><i class="bi bi-emoji-laughing"></i></div>
                        <div class="w-100 text-end"><button >Create</button></div>
                    </div>
                </form>
            </div>
        </div>
        <emoji-picker class="d-none"></emoji-picker>
    </div>
</div>