@extends('layouts.app')
@section('content')
       <!-- Navbar Section  -->
       <section>
        <div class="navbar_bg">
            <nav class="navbar navbar-expand-lg bg-transparent">
                @include('layouts.partials.navbar')
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="">
                            <div class="">
                                <div>
                                    <h3 class="rehabilitation_box_h3_about">
                                        Contact
                                    </h3>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12"></div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Contact Us Form  -->

    <section>
        <div>
            <div class="container">
                <div class="mt-5">
                    <img src="./assets/images/Group 1000002027 (1).png" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="contact_width">
                        <div class="row pt-4">
                            <div class="col-12 mb-lg-5 pb-lg-3">
                                <div class="contact_page_box mb-5">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label for="username" class="contact_input_label pb-2">Name</label>
                                            <input type="text" id="username" name="username" class="contact_us_input">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label for="email" class="contact_input_label pb-2">Email</label>
                                            <input type="email" id="email" name="email" class="contact_us_input">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label for="phone" class="contact_input_label pb-2">Phone No.</label>
                                            <input type="number" id="phone" name="phone" class="contact_us_input">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <div class="mt-lg-5 mt-md-3 mt-3">
                                                <label for="Subject" class="contact_input_label pb-2">Subject</label>
                                                <input type="text" id="subject" name="subject" class="contact_us_input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class=""><label for="contact_us_textarea"></label>
                                                <textarea id="contact_us_textarea" class="contact_us_textarea"
                                                    name="contact_us_textarea" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center">
                                            <button class="submit_contact_form_btn">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
