<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PCHL</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/ride/heading/tittle_icon.png') }}">
    <link rel="stylesheet" href="{{ asset('rides_frontend/assets/styles/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d0a01f8990.js" crossorigin="anonymous"></script>
    <style>
        .hamburger_background {
            background-color: white;
            border-radius: 4px;
        }

        @media (max-width: 767px) {
            .conatiner_position {
                position: fixed;
                top: 0px;
                z-index: 1000;
                background: #26252573;
            }
        }

        .header_text {
            background: #fff;
            padding: 6px 15px;
            border-radius: 2rem;
            margin-bottom: 1rem !important;
        }

        .solid_navbar {
            background: #fff;
        }

        .padding_solid_navbar {
            padding: 0px 15px;
            border-radius: 2rem;
        }

        .navbar_bg {
            height: 600px;
            background-size: cover;
            background-position: center;
            /* You can adjust this to top, bottom, left, right, etc. */
            width: 100%;
            background-repeat: no-repeat;
        }

        .navbar_bg::before {
            background: url('{{ asset('header_ride.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/ride/header/header_background_img.png') }}') center/cover no-repeat !important;
            z-index: -2;
            height: 41.5em;
        }

        .navbar_bg::before,
        .navbar_bg::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        @media (max-width: 767px) {
            .conatiner_position {
                position: fixed;
                top: 0px;
                z-index: 1000;
                background: #26252573;
            }
        }

        .header_text {
            background: #fff;
            padding: 6px 15px;
            border-radius: 2rem;
            margin-bottom: 1rem !important;
        }

        .solid_navbar {
            background: #fff;
        }

        .padding_solid_navbar {
            padding: 0px 15px;
            border-radius: 2rem;
        }

        .footer_logo {
            display: flex;
            justify-content: center
        }
    </style>
</head>
<body>
    <section>
        <div class="navbar_bg">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container conatiner_position">
                    <a class="navbar-brand" href="/"><img
                            src="{{ asset('frontend/header/header/logo_header.png') }}" alt=""></a>
                    <button class="navbar-toggler hamburger_background" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <div class="">
                                <div class="d-lg-flex d-md-flex justify-content-end padding_solid_navbar solid_navbar">
                                    <li class="nav-item">
                                        <a class="nav-link nav_links {{ Request::is('/') ? 'nav_links_blue ' : '' }}"
                                            href="{{ route('landing') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav_links {{ Request::is('aboutus') ? 'nav_links_blue ' : '' }}"
                                            href="{{ route('aboutus') }}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav_links {{ Request::is('donation') ? 'nav_links_blue ' : '' }}"
                                            href="{{ route('donation') }}">Donations</a>
                                    </li>
                                    <li class="nav-item dropdown"> <!-- Dropdown menu -->
                                        <a class="nav-link nav_links dropdown-toggle {{ Request::is('programhighlights/cooking_classes') || Request::is('programhighlights/lifestyle_changes') || Request::is('programhighlights/treatments') ? 'nav_links_blue ' : '' }}"
                                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Programs
                                        </a>
                                        <div class="dropdown-menu solid_navbar" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item {{ request()->is('programhighlights/cooking_classes') ? 'active' : '' }}"
                                                href="{{ route('programhighlights', 'cooking_classes') }}">Cooking
                                                Classes</a>
                                            <a class="dropdown-item {{ request()->is('programhighlights/lifestyle_changes') ? 'active' : '' }}"
                                                href="{{ route('programhighlights', 'lifestyle_changes') }}">Lifestyle
                                                Changes</a>
                                            <a class="dropdown-item {{ request()->is('programhighlights/treatments') ? 'active' : '' }}"
                                                href="{{ route('programhighlights', 'treatments') }}">Treatments</a>
                                            <!-- Add more dropdown items as needed -->
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav_links" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container" style="position: sticky;top: 100%; ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="">
                            <div class="">
                                <div>

                                    <h6 class="head-2 page-header">
                                        {{$data['header_heading']??null}}
                                    </h6>

                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand nav_link mt-3" href="#"><img
                        src="{{ asset('frontend/ride/heading/logo_header.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <div class="">

                        <div class="d-flex justify-content-around justify-content-lg-end justify-content-md-end">
                            <p class="nav-link nav_links mb-0 mt-3 header_text">{{ $data['header_text'] ?? null }}</p>
                        </div>
                        <div class="d-lg-flex d-md-flex justify-content-end padding_solid_navbar solid_navbar">
                            <li class="nav-item">
                                <a class="nav-link nav_links {{ Request::is('/') ? 'nav_links_blue ' : '' }}"
                                    href="{{ route('landing') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_links {{ Request::is('aboutus') ? 'nav_links_blue ' : '' }}"
                                    href="{{ route('aboutus') }}">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_links {{ Request::is('donation') ? 'nav_links_blue ' : '' }}"
                                    href="{{ route('donation') }}">Donations</a>
                            </li>
                            <li class="nav-item dropdown"> <!-- Dropdown menu -->
                                <a class="nav-link nav_links dropdown-toggle {{ Request::is('programhighlights/cooking_classes') || Request::is('programhighlights/lifestyle_changes') || Request::is('programhighlights/treatments') ? 'nav_links_blue ' : '' }}"
                                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Programs
                                </a>
                                <div class="dropdown-menu solid_navbar" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item {{ request()->is('programhighlights/cooking_classes') ? 'active' : '' }}"
                                        href="{{ route('programhighlights', 'cooking_classes') }}">Cooking Classes</a>
                                    <a class="dropdown-item {{ request()->is('programhighlights/lifestyle_changes') ? 'active' : '' }}"
                                        href="{{ route('programhighlights', 'lifestyle_changes') }}">Lifestyle
                                        Changes</a>
                                    <a class="dropdown-item {{ request()->is('programhighlights/treatments') ? 'active' : '' }}"
                                        href="{{ route('programhighlights', 'treatments') }}">Treatments</a>
                                    <!-- Add more dropdown items as needed -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_links" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </div>
                    </div>
                    </li>
                </ul>
            </nav>
            <div class="page-heading">
                <h6 class="head-2 page-header">
                    Your Trusted Travel Partner, <br>
                    Ride in Comfort
                </h6>
            </div>
        </div>
    </header> --}}

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
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Budget
                                Friendly</li>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Insurance
                                Included</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card package-card">
                        <img src="./assets/images/Rectangle 15.png" alt="" class="package-img">
                        <h6 class="package-title head-4 packages-sub-header">Business</h6>
                        <ul>
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Extra Baggage
                            </li>
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
                            <li><img src="./assets/images/Ellipse 6.png" alt="" class="me-4">Exta large
                                Room</li>
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
                        <img src="./assets/images/disease-prevention.png" alt="Disease Prevention"
                            class="service-img">
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
                            <img src="./assets/images/float-package-logo-black.png" alt="logo-back"
                                class="float-logo">
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
                            <li><img src="./assets/images/tick.png" alt="" class="me-4">Weekend Inclusive
                            </li>
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

    @php

        $social_media_logos = ['youtube', 'facebook', 'whatapp'];
    @endphp
    <footor>
        <div class="footor-link">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg-6 col-md-6">
                        <div class="pchl-text">
                            <h6 class="head-3"> <span class="hyper-img"><img
                                        src="{{ asset('frontend/ride_footer/header/logo_footer.png') }}"
                                        alt=""></span>
                            </h6>
                        </div>
                        <p>{{ $data['footer_description'] ?? null }}</p>
                        <div class="social-icons pb-lg-0 pb-md-0 pb-3">
                            <a href="#" class="social-link"><img src="./assets/images/youtube.png"
                                    alt=""></a>
                            <a href="#" class="social-link"><img src="./assets/images/facebook.png"
                                    alt=""></a>
                            <a href="#" class="social-link"><img src="./assets/images/whatapp.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="text-lg-end text-md-end text-sm-center">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <h6 class="head-5 text-lg-end text-md-end text-sm-center">Contact Info</h6>
                                    </li>
                                    @for ($i = 1; $i < 4; $i++)
                                        <li><a hre#f="#"> {{ $data['contact_info_' . $i] ?? null }}</a></li>
                                    @endfor

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="text-white">
                <div class="row text-center text-white">
                    <p class="pt-3">Powered by PivotPoint - Copyright © Swift Ride Pro 2024</p>
                </div>
            </div>
        </div>
    </footor>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
