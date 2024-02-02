@extends('layouts.app')
@section('css_after')
<style>
    .navbar_bg {
        background-image: url('{{ asset('frontend/ride/header/header_background_img.png') }}') !important;
    }
</style>
@endsection
@section('content')
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                @include('layouts.partials.navbar')
            </nav>
            <div class="page-heading">
                <h6 class="head-2 page-header">
                    Your Trusted Travel Partner, <br>
                    Ride in Comfort
                </h6>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="row g-0 p-0">
            <div class="col-lg-6 col-md-12 col-12 d-flex align-items-center">
                <div class="container">
                    <div class="about">
                        <h6 class="head-2 about-header">About Swift Ride Pro</h6>
                        <p class="about-text">
                            PLorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac. Feugiat amet
                            pharetra semper ut facilisi
                            sit adipiscing eget. Enim et facilisis Lorem ipsum dolor sit amet consectetur. At velit ut
                            arcu massa nisi lorem ac.
                            Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et facilisis Lorem ipsum
                            dolor sit amet consectetur.
                            At velit ut arcu massa nisi lorem ac. Feugiat amet pharetra semper ut
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="banner-img">
                    <div class="">
                        <img src="./assets/images/Banner Image 1.png" alt="banner-image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service pb-lg-5 pb-md-2 pb-0">
        <div class="container service-cont ps-lg-5 pe-lg-5">
            <div class="overlay-img">
                <img src="./assets/images/Navigation-pana.png" alt="overlay">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card service-card p-md-4 p-3 ml-5">
                        <img src="./assets/images/Group 9422.png" alt="Affordable Rides" class="service-img">
                        <h6 class="mt-2 mt-sm-0 head-4 service-header pt-3 pb-2">Affordable Rides</h6>
                        <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor
                            incididunt ut
                            labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card service-card p-md-4 p-3">
                        <img src="./assets/images/Group 9422 (1).png" alt="Multiple Rides" class="service-img">
                        <h6 class="mt-2 mt-sm-0 head-4 service-header pt-3 pb-2">Multiple Rides</h6>
                        <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor
                            incididunt ut
                            labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card service-card p-md-4 p-3">
                        <img src="./assets/images/Group 9422 (2).png" alt="Reliable" class="service-img">
                        <h6 class="mt-2 mt-sm-0 head-4 service-header pt-3 pb-2">Reliable</h6>
                        <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor
                            incididunt ut
                            labore</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ps-lg-5 pe-lg-5 mt-lg-5 mt-md-4 mt-2">
            <div class="row pt-4">
                <div class="col-lg-4 col-md-4 text-sm-center">
                    <div class="mobile-interface-img">
                        <img src="./assets/images/Clip path group 1.png" alt="mobile interface 1"
                            class="float-lg-end float-md-end">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-sm-center">
                    <div class="mobile-interface-img-2">
                        <img src="./assets/images/Clip path group 2.png" alt="mobile interface 2"
                            class="float-lg-end float-md-end">
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 text-sm-center">
                    <div class="mobile-interface-img-3">
                        <img src="./assets/images/Clip path group 3.png" alt="mobile interface 3"
                            class="float-lg-end float-md-end">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-4 d-flex justify-content-md-center align-items-center">
                    <h6 class="number head-4">1</h6>
                    <h6 class="head-4 point">Enter Your Destination</h6>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-md-center align-items-center">
                    <h6 class="number head-4">2</h6>
                    <h6 class="head-4 point">Select Your Ride Class</h6>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-md-center align-items-center">
                    <h6 class="number head-4">3</h6>
                    <h6 class="head-4 point">Review Your Ride</h6>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row pe-lg-5 ps-lg-5 pt-3">
                <p class="point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut
                    labore
                    et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea
                    commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla
                    pariatur.
                    Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est
                    laborum.</p>
            </div>
        </div>
    </section>

    <section class="packages">
        <div class="container">
            <div class="row pb-sm-0 mb-sm-0">
                <div class="packages-header text-center">
                    <h6 class="head-3 packages-header">Our Packages</h6>
                    <img src="./assets/images/Vector.png" alt="vector overlay" class="vector-img">
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-5 mt-2">
                <div class="col-lg-4 col-md-4">
                    <div class="card package-card">
                        <img src="./assets/images/Rectangle 24.png" alt="" class="package-img">
                        <h6 class="package-title head-4 packages-sub-header">Economy</h6>
                        <ul>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Budget Friendly</li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Insurance Included
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card package-card">
                        <img src="./assets/images/Rectangle 15.png" alt="" class="package-img">
                        <h6 class="package-title head-4 packages-sub-header">Business</h6>
                        <ul>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Extra Baggage</li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Onboard
                                Entertainment</li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Upto 5 people
                                Capacity</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card package-card">
                        <img src="./assets/images/Rectangle 27.png" alt="" class="package-img">
                        <h6 class="package-title head-4 packages-sub-header">VIP</h6>
                        <ul>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Exta large Room
                            </li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Onboard
                                Entertainment</li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Appointment
                                Booking</li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Personnel
                                Concierge</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="driver-experenice pb-5">
        <div class="container driver-experience-cont ps-lg-5 pe-lg-5">
            <div class="driver-experience-overlay">
                <img src="./assets/images/driver-experience-overlay.png" alt="overlay">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card service-card p-4 ml-5">
                        <img src="./assets/images/natural-remedies.png" alt="Natural Remedies" class="service-img">
                        <h6 class="mt-2 head-4 service-header pt-3 pb-2">Natural Remedies</h6>
                        <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor
                            incididunt ut
                            labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card service-card p-4">
                        <img src="./assets/images/disease-prevention.png" alt="Disease Prevention" class="service-img">
                        <h6 class="mt-2 head-4 service-header pt-3 pb-2">Disease Prevention</h6>
                        <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor
                            incididunt ut
                            labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card service-card p-4">
                        <img src="./assets/images/seminars.png" alt="Seminars" class="service-img">
                        <h6 class="mt-2 head-4 service-header pt-3 pb-2">Seminars</h6>
                        <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                            tempor
                            incididunt ut
                            labore</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ps-lg-5 pe-lg-5 mt-lg-5 mt-md-5 mt-sm-2">
            <div class="row pt-lg-4 pt-md-4 pt-0">
                <div class="col-lg-4 col-md-4">
                    <div class="driver-interface-img-1">
                        <img src="./assets/images/register.png" alt="register" class="float-start">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="driver-interface-img">
                        <img src="./assets/images/pickup-dropoff.png" alt="pickup-dropoff">
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4">
                    <div class="driver-interface-img-1">
                        <img src="./assets/images/get-rated.png" alt="get-rated" class="float-end">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="page-header1 packages-header text-center">
                    <h3 class="head-2 easy-use">Easy to use</h3>
                    <img src="./assets/images/Vector2.png" alt="vector overlay" class="vector-img vector-img1">
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-5 mt-sm-0">
                <div class="col-lg-3 col-md-6 col-12 mt-md-3">
                    <div class="card driver-card">
                        <img src="./assets/images/driver-information.png" alt="driver-information">
                        <h4 class="mt-2 head-5 driver-exp-header pt-3 pb-2">Drivers Information</h4>
                        <p class="driver-exp-text">Follow a hashtag growth total posts, videos and images.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-md-3">
                    <div class="card driver-card">
                        <img src="./assets/images/license-information.png" alt="license-information">
                        <h4 class="mt-2 head-5 driver-exp-header pt-3 pb-2">Drivers License Information</h4>
                        <p class="driver-exp-text">Identify the most influential people posting with your hashtag.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-md-3">
                    <div class="card driver-card">
                        <img src="./assets/images/insurance.png" alt="insurance">
                        <h4 class="mt-2 head-5 driver-exp-header pt-3 pb-2">Insurance & Road Tax</h4>
                        <p class="driver-exp-text">See the most influential posts on hashtag you
                            are following on.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-md-3">
                    <div class="card driver-card ">
                        <img src="./assets/images/vehicle-photos.png" alt="vehicle-photos">
                        <h4 class="mt-2 head-5 driver-exp-header pt-3 pb-2">Vehicle Photos</h4>
                        <p class="driver-exp-text">Visualize where people are posting using your
                            hashtag made.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-lg-5 mt-md-5 mt-sm-auto">
            <div class="row pe-lg-5 ps-lg-5 pe-md-5 ps-md-5  pt-5">
                <p class="point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut
                    labore
                    et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea
                    commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla
                    pariatur.
                    Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est
                    laborum.</p>
            </div>
        </div>
    </section>

    <section class="float-packages">
        <div class="container">
            <h6 class="text-center head-1 main-heading">Float Packages</h6>
            <div class="row mt-lg-5 mt-md-5 mt-sm-1">
                <div class="col-lg-4 col-md-4">
                    <div class="card float-card text-center">
                        <h6 class="float-package-title head-4" style="color: #034f75">Basic</h6>
                        <h6 class="head" style="color: #034f75"><span>&#163;</span>7</h6>
                        <h6 style="color: #81A7BA;">Once off</h6>
                        <ul class="text-start">
                            <li style="color: #034f75;"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">3 Days
                            </li>
                            <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">Weekends
                                only</li>
                        </ul>
                        <div class="float-logo m-auto">
                            <img src="./assets/images/float-package-logo-black.png" alt="logo-back" class="float-logo">
                        </div>
                        <h6 class="mb-5 head-3 swift">Swift Ride Pro</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="card float-card-advance text-center text-white">
                        <h6 class="float-package-title-advance head-4">Advance</h6>
                        <h6 class="head"><span>&#163;</span>9</h6>
                        <h6 style="color: #81A7BA;">User/Month</h6>
                        <ul class="text-start">
                            <li><img src="./assets/images/tick.png" alt="" class="me-4">7 Days</li>
                            <li><img src="./assets/images/tick.png" alt="" class="me-4">Weekend Inclusive</li>
                        </ul>
                        <div class="float-logo m-auto">
                            <img src="./assets/images/float-package-logo-white.png" alt="logo-white">
                        </div>
                        <h6 class="mb-5 head-3 swift">Swift Ride Pro</h6>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 text-center">
                    <div class="card float-card text-center">
                        <h6 class="float-package-title head-4" style="color: #034f75">Premium</h6>
                        <h6 class="head" style="color: #034f75"><span>&#163;</span>12</h6>
                        <h6 style="color: #81A7BA;">User/Month</h6>
                        <ul class="text-start">
                            <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">14 Days
                            </li>
                            <li style="color: #034f75"><img src="./assets/images/tick.png" alt=""
                                    class="me-4">Weekend
                                Inclusive</li>
                        </ul>
                        <div class="float-logo m-auto">
                            <img src="./assets/images/float-package-logo-black.png" alt="logo-back">
                        </div>
                        <h6 class="mb-5 head-3 swift">Swift Ride Pro</h6>
                    </div>
                </div>
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
