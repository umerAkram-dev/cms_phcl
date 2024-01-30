@extends('admin.layouts.app')
@section('css_after')
<style>
    .border_right{
        border-right:2px solid #dee2e6;
    }
</style>
@endsection
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                @include('admin.home.parts.header')

                @include('admin.home.parts.about')

                {{-- Our Services --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="card-body border_right">
                                    <h5 class="card-title">Our Services 1</h5>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Service Box
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="service_box_img_1" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/Group 9422.png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_service_heading_1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_services_1_description" style="height: 100px"></textarea>
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
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Service Box
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="service_box_img_2" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/Group 9422 (1).png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_service_heading_2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_services_2_description" style="height: 100px"></textarea>
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
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Service Box
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="service_box_img_3" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/Group 9422 (2).png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_service_heading_3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_services_3_description" style="height: 100px"></textarea>
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
                {{-- Our Services End --}}
                {{-- Galley --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gallery</h5>
                            <form>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-12">Description</label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="gallery_description" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-12">Background Image</label>
                                    <div class="col-12">
                                        <input class="form-control" name="gallery_img" type="file" id="formFile">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <img width="150px" src="{{ asset("assets/images/Photo's.png") }}" alt="">
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
                {{-- Galley End --}}
                {{-- Our Traction --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-4 ">
                                <div class="card-body border_right">
                                    <h5 class="card-title">Our Traction 1</h5>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Our Traction
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="our_traction_img_1" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/image 1 (1).png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_traction_heading_1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_traction_1_description" style="height: 100px"></textarea>
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
                                    <h5 class="card-title">Our Traction 2</h5>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Our Traction
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="our_traction_img_2" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/image 3.png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_traction_heading_2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_traction_2_description" style="height: 100px"></textarea>
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
                                    <h5 class="card-title">Our Traction 3</h5>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Our Traction
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="our_traction_img_3" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/image 4.png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_traction_heading_3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_traction_3_description" style="height: 100px"></textarea>
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
                                <div class="card-body">
                                    <h5 class="card-title">Our Traction 4</h5>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-12">Our Traction
                                                Image</label>
                                            <div class="col-12">
                                                <input class="form-control" name="our_traction_img_4" type="file"
                                                    id="formFile">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img width="100px" src="{{ asset('assets/images/image 5.png') }}" alt="">
                                             </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-12">Heading</label>
                                            <div class="col-12">
                                                <input type="our_traction_heading_4" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-12">Description</label>
                                            <div class="col-12">
                                                <textarea class="form-control" name="our_traction_4_description" style="height: 100px"></textarea>
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
                {{-- Our Traction End --}}
                {{-- Our Team --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Our Team</h5>
                            <form>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Top Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="our_team_description" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4 ">
                                        <div class="card-body border_right">
                                            <h5 class="card-title">Our Teammate 1</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Our Teammate
                                                        Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="our_teammate_img_1"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/image 7.png') }}" alt="">
                                                     </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Heading</label>
                                                    <div class="col-12">
                                                        <input type="our_teammate_heading_1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="our_teammate_1_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">Submit
                                                            Form</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-4 ">
                                        <div class="card-body border_right">
                                            <h5 class="card-title">Our Teammate 2</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Our Teammate
                                                        Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="our_teammate_img_2"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/image 7.png') }}" alt="">
                                                     </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Heading</label>
                                                    <div class="col-12">
                                                        <input type="our_teammate_heading_2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="our_teammate_2_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">Submit
                                                            Form</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-body">
                                            <h5 class="card-title">Our Teammate 3</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Our Teammate
                                                        Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="our_teammate_img_3"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/image 7.png') }}" alt="">
                                                     </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Heading</label>
                                                    <div class="col-12">
                                                        <input type="our_teammate_heading_3" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="our_teammate_3_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">Submit
                                                            Form</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Our Team End --}}
                {{-- Testimonies --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            <h5 class="card-title">Testimonies</h5>
                            <form>
                                <div class="row mb-3">
                                    <label class="col-12">Heading</label>
                                    <div class="col-12">
                                        <input type="testimonies_heading" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <div class="m-4">
                                <div class="row">
                                    <div class="col-4 ">
                                        <div class="card-body border_right">
                                            <h5 class="card-title">Client 1</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="our_client_1_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Client
                                                        Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="our_client_img_1"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/user-photo.png') }}" alt="">
                                                     </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Name</label>
                                                    <div class="col-12">
                                                        <input type="our_client_name_1" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <div class="row mb-3">
                                                            <label for="inputNumber" class="col-12">Role</label>
                                                            <div class="col-12">
                                                                <input class="form-control" name="our_client_1_role"
                                                                    type="text">
                                                            </div>
                                                        </div>
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
                                            <h5 class="card-title">Client 2</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="our_client_2_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Client
                                                        Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="our_client_img_2"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/user-photo.png') }}" alt="">
                                                     </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Name</label>
                                                    <div class="col-12">
                                                        <input type="our_client_name_2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <div class="row mb-3">
                                                            <label for="inputNumber" class="col-12">Role</label>
                                                            <div class="col-12">
                                                                <input class="form-control" name="our_client_1_role"
                                                                    type="text">
                                                            </div>
                                                        </div>
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
                                            <h5 class="card-title">Client 3</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="our_client_3_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Client
                                                        Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="our_client_img_3"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/user-photo.png') }}" alt="">
                                                     </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-12">Name</label>
                                                    <div class="col-12">
                                                        <input type="our_client_name_3" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <div class="row mb-3">
                                                            <label for="inputNumber" class="col-12">Role</label>
                                                            <div class="col-12">
                                                                <input class="form-control" name="our_client_3_role"
                                                                    type="text">
                                                            </div>
                                                        </div>
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
                    </div>
                </div>
                {{-- Testimonies End --}}
                {{-- Donations --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Donations</h5>
                            <form>
                                <div class="row mb-3">
                                    <label class="col-12">Donation Amount</label>
                                    <div class="col-12">
                                        <input type="text" name="donation_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-12">Image</label>
                                    <div class="col-12">
                                        <input class="form-control" name="donation_img" type="file" id="formFile">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <img width="150px" src="{{ asset('assets/images/Group 9.png') }}" alt="">
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
                {{-- Donations End --}}
                {{-- Latest News And Resources --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Latest News And Resources</h5>
                            <form>
                                <div class="row mb-3">
                                    <label class="col-12">Description</label>
                                    <div class="col-12">
                                        <input type="news_resources_description" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <div class="m-4">
                                <div class="row">
                                    <div class="col-4 ">
                                        <div class="card-body border_right">
                                            <h5 class="card-title">Latest News And Resources 1</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="news_resources_1_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="news_resources_1"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/IMage 1 (2).png') }}" alt="">
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
                                            <h5 class="card-title">Latest News And Resources 2</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="news_resources_2_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="news_resources_2"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/IMage 2.png') }}" alt="">
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
                                            <h5 class="card-title">Latest News And Resources 3</h5>
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-12">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="news_resources_3_description" style="height: 100px"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-12">Image</label>
                                                    <div class="col-12">
                                                        <input class="form-control" name="news_resources_3"
                                                            type="file" id="formFile">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <img width="100px" src="{{ asset('assets/images/IMage 3 (1).png') }}" alt="">
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
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
{{-- this is some input feilds --}}

{{--
<div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
    <div class="col-sm-10">
        <input class="form-control" type="file" id="formFile">
    </div>
</div>
<div class="row mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
    <div class="col-sm-10">
        <textarea class="form-control" style="height: 100px"></textarea>
    </div>
</div>
<fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios"
                id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
                First radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios"
                id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
                Second radio
            </label>
        </div>
    </div>
</fieldset>
<div class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
    <div class="col-sm-10">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
                Example checkbox
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
            <label class="form-check-label" for="gridCheck2">
                Example checkbox 2
            </label>
        </div>

    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Disabled</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="Read only / Disabled"
            disabled>
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Select</label>
    <div class="col-sm-10">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Multi Select</label>
    <div class="col-sm-10">
        <select class="form-select" multiple aria-label="multiple select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
</div> --}}
