@extends('layouts.app')
@section('content')
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
                                    Program Highlights
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

<!-- About PHCL  -->

<section>
    <div class="about_phcl_page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <img src="./assets/images/Group 1000002027.png" class="mb-lg-4 mb-md-3 mb-3" alt="">
                        <h3 class="highlights_phcl_h3 pb-3">Cooking Classes</h3>
                        <p class="about_phcl_p">PLorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi
                            lorem ac. Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et
                            facilisis Lorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac.
                            Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et facilisis Lorem
                            ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac. Feugiat amet
                            pharetra semper ut </p>
                        <p class="about_phcl_p">PLorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi
                            lorem ac. Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et
                            facilisis Lorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac.
                            Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et facilisis Lorem
                            ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac. Feugiat amet
                            pharetra semper ut </p>
                        <p class="about_phcl_p">PLorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi
                            lorem ac. Feugiat amet pharetra semper ut facilisi sit adipiscing eget. Enim et
                            facilisis Lorem ipsum dolor sit amet consectetur. At velit ut arcu massa nisi lorem ac.
                            Feugiat amet pharetra semper ut facilisi sit adipiscing eget. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Donate Page Cards  -->

<section>
    <div class="container mb-lg-5 pb-lg-3">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h3 class="highlights_phcl_h3 pt-lg-5 pt-md-4 py-3">Advantages</h3>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="./assets/images/Group 30.png" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">Operations</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="./assets/images/Group 30 (1).png" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">Construction</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="./assets/images/Group 30 (2).png" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">Outreaches</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="donation_box_page mt-lg-5 mt-md-3 mt-3 mx-lg-2">
                    <div>
                        <img src="./assets/images/Group 30 (3).png" class="mt-2" alt="">
                        <h3 class="donation_page_mission_class pt-4">Food Aid</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
