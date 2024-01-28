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
                            <div class="rehabilitation_box">
                                <div>
                                    <h3 class="rehabilitation_box_h3">
                                        Where rehabilitation, health and performance meet.
                                    </h3>
                                </div>
                                <div>
                                    <p class="rehabilitation_box_p">Lorem ipsum dolor sit amet consectetur. At velit ut
                                        arcu massa nisi lorem ac. Feugiat amet pharetra semper ut facilisi sit
                                        adipiscing eget. Enim et facilisis </p>
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
                            <p class="about_phcl_p">PLorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi
                                lorem ac. Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et
                                facilisis Lorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac.
                                Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et facilisis Lorem
                                ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac. Feugiat amet
                                pharetra semper ut </p>
                            <h5 class="about_phcl_read_more pt-2 pb-lg-0 pb-md-0 pb-3">Read More About Us <img
                                    src="./assets/images/Arrow 3.png" class="ps-2" alt=""></h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text-center">
                            <img src="./assets/images/Group 4.png" class="img-fluid about_phcl_img" alt="">
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
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="services_box">
                                        <div>
                                            <img src="./assets/images/Group 9422.png" alt="">
                                            <h3 class="cooking_classes_h3 mb-3 mt-3">Cooking Classes</h3>
                                            <p class="cooking_classes_p mb-0">Lorem ipsum dolor sit amet consectetur.
                                                Aenean in auctor vivamus sollicitudin venenatis at risus elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="services_box">
                                        <div>
                                            <img src="./assets/images/Group 9422 (1).png" alt="">
                                            <h3 class="cooking_classes_h3 mb-3 mt-3">Lifestyle Changes</h3>
                                            <p class="cooking_classes_p mb-0">Lorem ipsum dolor sit amet consectetur.
                                                Aenean in auctor vivamus sollicitudin venenatis at risus elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="services_box">
                                        <div>
                                            <img src="./assets/images/Group 9422 (2).png" alt="">
                                            <h3 class="cooking_classes_h3 mb-3 mt-3">Treatments</h3>
                                            <p class="cooking_classes_p mb-0">Lorem ipsum dolor sit amet consectetur.
                                                Aenean in auctor vivamus sollicitudin venenatis at risus elit.</p>
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

    <!-- Gallery Section  -->

    <section>
        <div class="gallery_top_bottom_space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="cooking_classes_h3">Gallery</h3>
                            <p class="cooking_classes_p pb-lg-5 pb-3">Lorem ipsum dolor sit amet consectetur. Urna
                                lacinia lacus <br> odio consectetur. Nisi eleifend a quam leo s</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="./assets/images/Photo's.png" class="img-fluid images_height" alt="">
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
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="services_box">
                                <div class="text-center">
                                    <img src="./assets/images/image 1 (1).png" alt="">
                                    <h3 class="traction_h3 mb-3 mt-3">Projects</h3>
                                    <p class="traction_count mb-0">2500</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
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
                        </div>
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
                            <p class="cooking_classes_p pb-lg-5 pb-3">Lorem ipsum dolor sit amet consectetur. Urna
                                lacinia lacus <br> odio consectetur. Nisi eleifend a quam leo s</p>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                    </div>
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
                                <img src="./assets/images/user-photo.png" alt="" class="user-pic mb-lg-0 mb-md-3 mb-3">
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <h6 class="user_name_testimonial">Jaquon Hart</h6>
                                <p class="testimonial_review_designation">Digital Marketing Executive, Hypebeast</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-lg-5">
                    <div class="col-lg-5 col-md-6 col-12">
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
                                <img src="./assets/images/user-photo.png" alt="" class="user-pic mb-lg-0 mb-md-3 mb-3">
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <h6 class="user_name_testimonial">Jaquon Hart</h6>
                                <p class="testimonial_review_designation">Digital Marketing Executive, Hypebeast</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 ps-lg-5 padding_top_testimonial">
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
                                <img src="./assets/images/user-photo.png" alt="" class="user-pic mb-lg-0 mb-md-3 mb-3">
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <h6 class="user_name_testimonial">Jaquon Hart</h6>
                                <p class="testimonial_review_designation">Digital Marketing Executive, Hypebeast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donations Section  -->

    <section>
        <div>
            <div class="text-center pt-lg-5 mt-lg-4">
                <img src="./assets/images/Group 9.png" alt="">
                <h3 class="cooking_classes_h3 py-lg-5 py-md-4 py-3">Your donations help countless <br> lives </h3>
            </div>
        </div>
    </section>

    <!-- Progress bar Section  -->

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
                            $27.00
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 ps-lg-0">
                    <div class="second_half_bar text-center py-2">
                        <span class="">
                            $150.00
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
                                <br> odio consectetur. Nisi eleifend a quam leo s</p>
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
                        <img src="./assets/images/Round Alt Arrow Left.png" class="cursor_pointer" id="prev" alt="">
                        <img src="./assets/images/Round Alt Arrow Right.png" class="cursor_pointer" id="next" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
