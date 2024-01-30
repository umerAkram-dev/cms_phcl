<div class="col-lg-12">
    <div class="card">
        <div class="row">
            <div class="col-4">
                <div class="card-body border_right">
                    <h5 class="card-title">Our Services 1</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'home' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_service_1' }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Service Box
                                Image</label>
                            <div class="col-12">
                                <input class="form-control" name="img[service_box_img_1]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="100px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/service_box_img_1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12">Heading</label>
                            <div class="col-12">
                                <input type="text" name="type[our_service_heading_1]" class="form-control"
                                    value="{{ $data['our_service_heading_1'] ?? null }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-12">Description</label>
                            <div class="col-12">
                                <textarea class="form-control" name="type[our_service_1_description]" required style="height: 100px">{{ $data['our_service_1_description'] ?? null }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card-body border_right">
                    <h5 class="card-title">Our Services 2</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'home' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_service_2' }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Service Box
                                Image</label>
                            <div class="col-12">
                                <input class="form-control" name="img[service_box_img_2]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="100px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/service_box_img_2.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12">Heading</label>
                            <div class="col-12">
                                <input type="text" name="type[our_service_heading_2]" class="form-control"
                                    value="{{ $data['our_service_heading_2'] ?? null }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-12">Description</label>
                            <div class="col-12">
                                <textarea class="form-control" name="type[our_services_2_description]" required style="height: 100px">{{ $data['our_services_2_description'] ?? null }}</textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body border_right">
                    <h5 class="card-title">Our Services 3</h5>
                    <form action="{{ route('admin.update_content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="page" value="{{ $page = 'home' }}">
                        <input type="hidden" name="page_subtype" value="{{ $page_subtype = 'our_service_3' }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-12">Service Box
                                Image</label>
                            <div class="col-12">
                                <input class="form-control" name="img[service_box_img_3]"
                                    accept="image/png, image/jpeg, image/jpg, image/svg," type="file">
                            </div>
                            <div class="col-12 mt-2">
                                <img width="100px"
                                    src="{{ asset('frontend/' . $page . '/' . $page_subtype . '/service_box_img_3.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12">Heading</label>
                            <div class="col-12">
                                <input type="text" name="type[our_service_heading_3]" class="form-control"
                                    value="{{ $data['our_service_heading_3'] ?? null }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-12">Description</label>
                            <div class="col-12">
                                <textarea class="form-control" name="type[our_services_3_description]" required style="height: 100px">{{ $data['our_services_3_description'] ?? null }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
