<div class="container">
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/Group 6.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <div class="">
                <div
                    class="d-flex justify-content-around justify-content-lg-end justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><img src="{{ asset('assets/images/Icon.png') }}"
                                class="icon_images" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><img src="{{ asset('assets/images/Icon (1).png') }}"
                                class="icon_images" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><img src="{{ asset('assets/images/Icon (2).png') }}"
                                class="icon_images" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><img src="{{ asset('assets/images/Icon (3).png') }}"
                                class="icon_images" alt=""></a>
                    </li>
                </div>
                <div class="d-lg-flex d-md-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link nav_links nav_links_blue" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_links" href="{{ route('aboutus') }}">CLASSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_links" href="{{ route('donation') }}">LIFESTYLE CHANGES</a>
                    </li>
                    <a class="nav-link nav_links" href="{{ route('programhighlights') }}">NATURAL REMIDIES</a>
                    </li>
                    <a class="nav-link nav_links" href="{{ route('contact') }}">Contact</a>
                    </li>
                </div>
            </div>
        </ul>
    </div>
</div>
