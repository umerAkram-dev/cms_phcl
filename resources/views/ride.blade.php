@extends('layouts.app')
@section('css_after')
    <style>
        .navbar_bg {
            background-image: url('{{ asset('frontend/ride/header/header_background_img.png') }}') !important;
        }
    </style>
@endsection
@section('content')
    {{-- @dd($data) --}}
    <header class="header">
        <div class="container navbar_bg">
            <nav class="navbar navbar-expand-lg">
                @include('layouts.partials.navbar')
            </nav>
            <div class="page-heading">
                <h6 class="head-2 page-header">{{ $data['header_heading'] ?? null }}</h6>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="row g-0 p-0">
            <div class="col-lg-6 col-md-12 col-12 d-flex align-items-center">
                <div class="container">
                    <div class="about">
                        <h6 class="head-2 about-header">About Swift Ride Pro</h6>
                        <p class="about-text">{{ $data['about_ride_description'] ?? null }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="banner-img">
                    <div class="">
                        <img src="{{ asset('frontend/ride/about/about_ride_background_img.png') }}" alt="banner-image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service pb-lg-5 pb-md-2 pb-0">
        <div class="container service-cont ps-lg-5 pe-lg-5">
            <div class="overlay-img">
                <img src="{{ asset('frontend/ride/about/about_ride_img_2.png') }}" alt="overlay">
            </div>
            <div class="row">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card service-card p-md-4 p-3 ml-5">
                            <img src="./assets/images/Group 9422.png" alt="Affordable Rides" class="service-img">
                            <h6 class="mt-2 mt-sm-0 head-4 service-header pt-3 pb-2">{{ $data['ride_heading_1'] ?? null }}
                            </h6>
                            <p class="service-text">{{ $data['ride_1_description'] ?? null }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container ps-lg-5 pe-lg-5 mt-lg-5 mt-md-4 mt-2">
            <div class="row pt-4">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4 text-sm-center">
                        <div class="mobile-interface-img{{ $i == 1 ? '' : '-' . $i }}">
                            <img src="./assets/images/Clip path group 1.png" alt="mobile interface 1"
                                class="float-lg-end float-md-end">
                        </div>
                    </div>
                @endfor
            </div>
            <div class="row mt-5">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4 d-flex justify-content-md-center align-items-center">
                        <h6 class="number head-4">{{ $i }}</h6>
                        <h6 class="head-4 point">{{ $data['service_heading_' . $i . ''] ?? null }}</h6>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container mt-3">
            <div class="row pe-lg-5 ps-lg-5 pt-3">{{ $data['service_description'] ?? null }}</p>
            </div>
        </div>
    </section>

    <section class="packages">
        <div class="container">
            <div class="row pb-sm-0 mb-sm-0">
                <div class="packages-header text-center">
                    <h6 class="head-3 packages-header">Our Packages</h6>
                    <img src='{{ asset('frontend/ride/package/gallery_img.png') }}' alt="vector overlay"
                        class="vector-img">
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-5 mt-2">

                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card package-card">
                            <img src="{{ asset('frontend/ride/package_' . $i . '/our_package_img_' . $i . '.png') }}"
                                alt="" class="package-img">
                            <h6 class="package-title head-4 packages-sub-header">
                                {{ $data['our_package_heading_' . $i . ''] ?? null }}</h6>
                            <ul>
                                <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Budget Friendly
                                </li>
                                <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Insurance
                                    Included
                                </li>
                            </ul>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="driver-experenice pb-5">
        <div class="container driver-experience-cont ps-lg-5 pe-lg-5">
            <div class="driver-experience-overlay">
                <img src="{{ asset('frontend/ride/driver_experenice/driver_experenice.png') }}" alt="overlay">
            </div>
            <div class="row">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card service-card p-4 ml-5">
                            <img src="{{ asset('frontend/ride/driver_experenice_1/driver_experenice_img_1.png') }}"
                                alt="Natural Remedies" class="service-img">
                            <h6 class="mt-2 head-4 service-header pt-3 pb-2">
                                {{ $data['driver_experenice_heading_' . $i . ''] ?? null }}</h6>
                            <p class="service-text">{{ $data['driver_experenice_' . $i . '_description'] ?? null }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container ps-lg-5 pe-lg-5 mt-lg-5 mt-md-5 mt-sm-2">
            <div class="row pt-lg-4 pt-md-4 pt-0">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="driver-interface-img{{ $i == 2 ? '' : '-1' }}">
                            <img src="{{ asset('frontend/ride/driver_experenice/driver_experenice_bottom_img' . $i . '.png') }}"
                                alt="register" class="float-start">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="page-header1 packages-header text-center">
                    <h3 class="head-2 easy-use">Easy to use</h3>
                    <img src="{{ asset('frontend/ride/driver_information/driver_information.png') }}" alt="vector overlay"
                        class="vector-img vector-img1">
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-5 mt-sm-0">
                @for ($i = 1; $i < 5; $i++)
                    <div class="col-lg-3 col-md-6 col-12 mt-md-3">
                        <div class="card driver-card">
                            <img src="{{ asset('frontend/ride/driver_information/driver_information_img_' . $i . '.png') }}"
                                alt="driver-information">
                            <h4 class="mt-2 head-5 driver-exp-header pt-3 pb-2">
                                {{ $data['driver_information_' . $i . ''] ?? null }}</h4>
                            <p class="driver-exp-text"> {{ $data['driver_information_' . $i . '_description'] ?? null }}</p>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
        <div class="container mt-lg-5 mt-md-5 mt-sm-auto">
            <div class="row pe-lg-5 ps-lg-5 pe-md-5 ps-md-5  pt-5">
                <p class="point-text"> {{ $data['driver_information_bottom_description'] ?? null }}.</p>
            </div>
        </div>
    </section>

    <section class="float-packages">
        <div class="container">
            <h6 class="text-center head-1 main-heading">Float Packages</h6>
            <div class="row mt-lg-5 mt-md-5 mt-sm-1">

                @for ($i = 1; $i < 4; $i++)
                    <div class="col-lg-4 col-md-4">
                        <div class="card float-card{{ $i == 2 ? '-advance text-center text-white' : ' text-center' }}">
                            <h6 class="float-package-title{{ $i == 2 ? '-advance' : '' }} head-4"
                                {{ $i == 2 ? '' : 'style="color: #034f75"' }}> {{ $data['plan_name_' . $i . ''] ?? null }}
                            </h6>
                            <h6 class="head" {{ $i == 2 ? '' : 'style="color: #034f75"' }}>
                                <span>&#163;</span>{{ $data['pricing_' . $i . ''] ?? null }}</h6>
                            <h6 style="color: #81A7BA;">{{ $data['pricing_description_' . $i . ''] ?? null }}</h6>
                            <ul class="text-start">
                                <li style="color: #034f75;"><img src="./assets/images/tick.png" alt=""
                                        class="me-4">{{ $data['features_1'] ?? null }}
                                </li>
                                <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                        class="me-4">{{ $data['features_2'] ?? null }}</li>
                            </ul>
                            <div class="float-logo m-auto">
                                <img src="{{ asset('frontend/ride/pricing_plan_' . $i . '/pricing_plan' . $i . '.png') }}"
                                    alt="logo-back" class="float-logo">
                            </div>
                            <h6 class="mb-5 head-3 swift">{{ $data['features_1'] ?? null }}</h6>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row mb-3">
                <div class="testimonies-text text-center">
                    <h6 class="head-1 main-heading">Testimonies</h6>
                </div>
            </div>
            <div class="row pt-5 pb-lg-5">
                <div class="col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <h6 class="waht_people_say">What People Say About Us,<br> Hear it from them</h6>
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
                            “With Ehya, we’re able to easily track our performance in full detail. It’s become an
                            essential
                            tool for us to grow and
                            engage with our audience.”
                        </p>
                    </div>
                    <div class="row ps-lg-5">
                        <div class="col-lg-2 col-md-2">
                            <img src="./assets/images/user-photo.png" alt=""
                                class="user-pic mb-lg-0 mb-md-3 mb-3">
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <h6 class="user_name_testimonial">Jaquon Hart</h6>
                            <p class="testimonial_review_designation">Digital Marketing Executive, Hypebeast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured mt-5">
        <h6 class="text-center pt-lg-5 pt-md-5 pt-sm-3 mb-lg-5 mb-md-5 mb-sm-2 head-1 main-heading featured-by-title">
            Featured By</h6>
        <div class="featured-by">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="width_footer">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <img src="./assets/images/azsic-logo.png" alt="" class="azsic-logo">
                            </div>
                            <div class="">
                                <img src="./assets/images/azsic-logo.png" alt="" class="azsic-logo">
                            </div>
                            <div class="">
                                <img src="./assets/images/azsic-logo.png" alt="" class="azsic-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection