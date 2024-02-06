@extends('layouts.app')
@section('css_after')
    <style>
        .navbar_bg::before,
        .navbar_bg::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .navbar_bg::before {
            background: url('{{ asset('header_bg.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/home/header/header_background_img.png') }}') center/cover no-repeat;
            z-index: -2;
            height: 41.5em;
        }

        .laptop-container {
            position: relative;
            width: 100%;
            /* Adjust the width as needed */
        }

        .laptop-image {
            position: relative;
            overflow: hidden;
        }

        .laptop-image img {
            width: 100%;
            height: auto;
        }

        .video-container {
            position: absolute;
            top: 15%;
            left: 12%;
            width: 76%;
            height: 68%;
        }
    </style>
@endsection
@section('content')
    <!-- Navbar Section  -->
    @php
        $page = 'home';
    @endphp
    <section>
        <div class="navbar_bg">
            <nav class="navbar navbar-expand-lg bg-transparent">
                @include('layouts.partials.navbar')
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="">
                            <div class="rehabilitation_box">
                                <div>
                                    <h3 class="rehabilitation_box_h3">
                                        {{ $data['header_heading'] ?? null }}
                                    </h3>
                                </div>
                                <div>
                                    <p class="rehabilitation_box_p">{{ $data['header_description'] ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About PHCL  -->

    <section>
        <div class="about_phcl">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div>
                            <h3 class="about_phcl_h3">About PCHL</h3>
                            <p class="about_phcl_p">{{ $data['about_pchl_description'] ?? null }}</p>
                            <h5 class="about_phcl_read_more pt-2 pb-lg-0 pb-md-0 pb-3">Read More About Us <img
                                    src="./assets/images/Arrow 3.png" class="ps-2" alt=""></h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text-center">
                            <div class="laptop-container">
                                <div class="laptop-image">
                                    <!-- Image of the laptop -->
                                    <img src="https://static-cse.canva.com/_next/static/assets/device_w1200xh710_c2cb44b42aa70cf3768d9793233c65cb62701c17d2d35a0e15b21c61d789f574.png"
                                        alt="Laptop">

                                    <!-- YouTube video iframe embedded inside the laptop screen -->
                                    <div class="video-container">
                                        <iframe width="100%" height="100%"
                                            src="https://www.youtube.com/embed/KqisOvcs9z0?rel=0&modestbranding=1&enablejsapi=1&autoplay=0&controls=1&mute=1&loop=0&cc_load_policy=0&origin=https%3A%2F%2Fwww.canva.com"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services  -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="services_bg pb-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="pt-3 ps-lg-5 ps-md-4 ps-3">Our Services</h3>
                            </div>
                            <div class="carousel_images_space">
                                <img src="./assets/images/Round Alt Arrow Left-i.png" alt="">
                                <img src="./assets/images/Round Alt Arrow Right.png" alt="">
                            </div>
                        </div>
                        <div class="row pt-lg-5 px-lg-5 px-md-4 px-3">
                            <div class="row px-lg-5 pt-lg-4">
                                @for ($i = 1; $i < 4; $i++)
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="services_box">
                                            <div>
                                                <img width="80px"
                                                    src="{{ asset('frontend/' . $page . '/our_service_' . $i . '/service_box_img_' . $i . '.png') }}"
                                                    alt="">
                                                <h3 class="cooking_classes_h3 mb-3 mt-3">
                                                    {{ $data['our_service_heading_' . $i] ?? null }}</h3>
                                                <p class="cooking_classes_p mb-0">
                                                    {{ $data['our_services_' . $i . '_description'] ?? null }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section  -->

    <section>
        <div class="gallery_top_bottom_space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3">Gallery</h3>
                            <p class="cooking_classes_p pb-lg-5 pb-3">{{ $data['gallery_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('frontend/' . $page . '/gallery/gallery_img.png') }}"
                            class="img-fluid images_height" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Traction Section  -->

    <section>
        <div class="gallery_top_bottom_space">
            <div class="traction_bg pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="cooking_classes_h3 py-lg-5 py-md-4 py-3">Our Traction</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="services_box">
                                    <div class="text-center">
                                        <img src="{{ asset('frontend/' . $page . '/our_traction_' . $i . '/our_traction_img_' . $i . '.png') }}"
                                            alt="">
                                        <h3 class="traction_h3 mb-3 mt-3">
                                            {{ $data['our_traction_heading_' . $i . ''] ?? null }}</h3>
                                        <p class="traction_count mb-0">
                                            {{ $data['our_traction_' . $i . '_description'] ?? null }}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{-- <div class="col-lg-3 col-md-3 col-12">
                            <div class="services_box">
                                <div class="text-center">
                                    <img src="./assets/images/image 3.png" alt="">
                                    <h3 class="traction_h3 mb-3 mt-3">Happy Clients</h3>
                                    <p class="traction_count mb-0">7500</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="services_box">
                                <div class="text-center">
                                    <img src="./assets/images/image 4.png" alt="">
                                    <h3 class="traction_h3 mb-3 mt-3">Visitors</h3>
                                    <p class="traction_count mb-0">20500</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="services_box">
                                <div class="text-center">
                                    <img src="./assets/images/image 5.png" alt="">
                                    <h3 class="traction_h3 mb-3 mt-3">Awards Won</h3>
                                    <p class="traction_count mb-0">3000</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet Our Teem Section  -->
    <section>
        <div class="gallery_top_bottom_space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3">Meet our Team</h3>
                            <p class="cooking_classes_p pb-lg-5 pb-3">{{ $data['our_team_description'] ?? null }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for ($i = 1; $i < 4; $i++)
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="text-center">
                                <img src="{{ asset('frontend/' . $page . '/our_teammate_' . $i . '/our_teammate_img_' . $i . '.png') }}"
                                    alt="">
                            </div>
                            <div class="team_box">
                                <div class="d-flex align-items-start h-100">
                                    <div>
                                        <img src="./assets/images/Group 9416.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="team_member_name mt-3">
                                            {{ $data['our_teammate_heading_' . $i . ''] ?? null }}</h3>
                                        <p class="cooking_classes_p mb-3">
                                            {{ $data['our_teammate_' . $i . '_description'] ?? null }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                    {{-- <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-center">
                            <img src="./assets/images/image 7.png" alt="">
                        </div>
                        <div class="team_box">
                            <div class="d-flex align-items-start h-100">
                                <div>
                                    <img src="./assets/images/Group 9416.png" alt="">
                                </div>
                                <div>
                                    <h3 class="team_member_name mt-3">Dr. Michael Santoso</h3>
                                    <p class="cooking_classes_p mb-3">Head of Lorem Ispum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-center">
                            <img src="./assets/images/image 7.png" alt="">
                        </div>
                        <div class="team_box">
                            <div class="d-flex align-items-start h-100">
                                <div>
                                    <img src="./assets/images/Group 9416.png" alt="">
                                </div>
                                <div>
                                    <h3 class="team_member_name mt-3">Dr. Michael Santoso</h3>
                                    <p class="cooking_classes_p mb-3">Head of Lorem Ispum</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section  -->

    <section>
        <div class="gallery_top_bottom_space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3 pt-lg-5 pb-0">Testimonies</h3>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 pb-lg-5">
                    <div class="col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                        <h6 class="waht_people_say">{{ $data['testimonies_heading'] ?? null }}</h6>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="comment">
                            <div class="rating d-flex align-items-end">
                                <img src="./assets/images/“.png" class="pe-2" alt="">
                                <i class="fa-solid fa-star pe-2"></i>
                                <i class="fa-solid fa-star pe-2"></i>
                                <i class="fa-solid fa-star pe-2"></i>
                                <i class="fa-solid fa-star pe-2"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="ps-lg-5 testimonial_review pt-4 pb-2">
                                {{ $data['our_client_1_description'] ?? null }}
                            </p>
                        </div>
                        <div class="row ps-lg-5">
                            <div class="col-lg-2 col-md-2">
                                <img src="{{asset('frontend/home/our_client_1/our_client_img_1.png')}}" alt=""
                                    class="user-pic mb-lg-0 mb-md-3 mb-3">
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <h6 class="user_name_testimonial">{{ $data['our_client_name_1'] ?? null }}</h6>
                                <p class="testimonial_review_designation">{{ $data['our_client_1_role'] ?? null }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-lg-5">
                    @for ($i = 2; $i < 4; $i++)
                        <div class="col-lg-5 col-md-6 col-12 {{ $i == 3 ? 'ps-lg-5 padding_top_testimonial' : '' }}">
                            <div class="comment">
                                <div class="rating d-flex align-items-end">
                                    <img src="./assets/images/“.png" class="pe-2" alt="">
                                    <i class="fa-solid fa-star pe-2"></i>
                                    <i class="fa-solid fa-star pe-2"></i>
                                    <i class="fa-solid fa-star pe-2"></i>
                                    <i class="fa-solid fa-star pe-2"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="ps-lg-5 testimonial_review pt-4 pb-2">
                                    {{ $data['our_client_1_description'] ?? null }}
                                    {{ $data['our_client_' . $i . '_description'] ?? null }}
                                </p>
                            </div>
                            <div class="row ps-lg-5">
                                <div class="col-lg-2 col-md-2">
                                    <img src="{{ asset('frontend/home/our_client_' . $i . '/our_client_img_' . $i . '.png') }}"
                                        alt="" class="user-pic mb-lg-0 mb-md-3 mb-3">
                                </div>
                                <div class="col-lg-10 col-md-10">
                                    <h6 class="user_name_testimonial">{{ $data['our_client_name_' . $i . ''] ?? null }}
                                    </h6>
                                    <p class="testimonial_review_designation">
                                        {{ $data['our_client_' . $i . '_role'] ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!-- Donations Section  -->

    <section>
        <div>
            <div class="text-center pt-lg-5 mt-lg-4">
                <img src="{{asset('frontend/home/donation/donation_img.png')}}" alt="">
                <h3 class="cooking_classes_h3 py-lg-5 py-md-4 py-3">Your donations help countless <br> lives </h3>
            </div>
        </div>
    </section>

    <!-- Progress bar Section  -->
    {{-- @dd($data) --}}
    <section>
        <div class="container">
            <div class="row pb-4">
                <div class="col-12">
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="18"
                        aria-valuemin="0" aria-valuemax="100" style="height: 33px;">
                        <div class="progress-bar progress_gray_bg" style="width: 18%">18%</div>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6 col-md-6 col-12 pe-lg-0">
                    <div class="first_half_bar text-center py-2">
                        <span class="">
                            ${{ $data['donation_amount'] ?? null }}
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 ps-lg-0">
                    <div class="second_half_bar text-center py-2">
                        <span class="">
                            ${{ $data['donation_amount_2'] ?? null }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12">
                    <div class="donate_bar text-center">
                        <span class="">Donate</span>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12">
                    <div class="text-center">
                        <p class="registration_p">Charitable Registration: <span
                                class="registration_span">119278216RR0001</span> </p>
                        <p class="registration_p_assebility pb-5"><span class="registration_span">Privacy policy</span>
                            |<span class="registration_span px-1"> Accessibility </span> | <span
                                class="registration_span"> Contact Us </span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Carousel Section  -->

    <section>
        <div class="caraousel_bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3 pt-5">Latest News and Resources</h3>
                            <p class="cooking_classes_p pb-3">Lorem ipsum dolor sit amet consectetur. Urna lacinia lacus
                                <br> odio consectetur. Nisi eleifend a quam leo s
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cCarousel" class="pb-5">
                <div id="carousel-vp">
                    <div id="cCarousel-inner">
                        <article class="cCarousel-item start">
                            <img src="./assets/images/IMage 1 (2).png" alt="Moon">
                            <div class="infos text-center py-4">
                                <p class="cooking_classes_p mb-0">Lorem ipsum dolor sit amet <br> consectetur. Lectus
                                    pellentesque <br> sit non lectus pulvinar. Risus <br> pellentesque.</p>
                                <button type="button" class="learn_more_btn my-4">Learn More</button>
                            </div>
                        </article>
                        <article class="cCarousel-item middle">
                            <img src="./assets/images/IMage 2.png" alt="Moon">
                            <div class="infos text-center py-4">
                                <p class="cooking_classes_p mb-0">Lorem ipsum dolor sit amet <br> consectetur. Lectus
                                    pellentesque <br> sit non lectus pulvinar. Risus <br> pellentesque.</p>
                                <button type="button" class="learn_more_btn my-4">Learn More</button>
                            </div>
                        </article>
                        <article class="cCarousel-item start">
                            <img src="./assets/images/IMage 3 (1).png" alt="Moon">
                            <div class="infos text-center py-4">
                                <p class="cooking_classes_p mb-0">Lorem ipsum dolor sit amet <br> consectetur. Lectus
                                    pellentesque <br> sit non lectus pulvinar. Risus <br> pellentesque.</p>
                                <button type="button" class="learn_more_btn my-4">Learn More</button>
                            </div>
                        </article>
                    </div>
                </div>
                <div>
                    <div class="text-center pt-4">
                        <img src="./assets/images/Round Alt Arrow Left.png" class="cursor_pointer" id="prev"
                            alt="">
                        <img src="./assets/images/Round Alt Arrow Right.png" class="cursor_pointer" id="next"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
