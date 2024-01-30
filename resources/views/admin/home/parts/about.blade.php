<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">About PCHL</h5>
            <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page = 'home' }}">
                <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'about' }}">
                <div class="row mb-3">
                    <label for="inputPassword" class="col-12">Description</label>
                    <div class="col-12">
                        <textarea class="form-control" name="type[about_pchl_description]" required style="height: 100px">{{ $data['about_pchl_description'] ?? null }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-12">Background Image</label>
                    <div class="col-12">
                        <input class="form-control" name="img[about_pchl_background_img]"
                            accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                    </div>
                    <div class="col-12 mt-2">
                        <img width="150px" src="{{ asset('frontend/'.$page.'/'.$page_subtype.'/about_pchl_background_img.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
