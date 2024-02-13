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
</style>
<div class="container conatiner_position">
    <a class="navbar-brand" href="/"><img src="{{ asset('frontend/header/header/logo_header.png') }}"
            alt=""></a>
    <button class="navbar-toggler hamburger_background" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @php
        $data = [];
        $contents = \App\Content::where('page', 'header')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
    @endphp
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <div class="">

                <div class="d-flex justify-content-around justify-content-lg-end justify-content-md-end">
                    <p class="nav-link nav_links">{{ $data['header_text'] ?? null }}</p>
                </div>
                <div class="d-lg-flex d-md-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link nav_links nav_links_blue" href="{{ route('landing') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_links" href="{{ route('aboutus') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_links" href="{{ route('donation') }}">Donations</a>
                    </li>

                    <a class="nav-link nav_links" href="{{ route('programhighlights', 'cooking_classes') }}">Programs</a>
                    </li>
                    <a class="nav-link nav_links" href="{{ route('contact') }}">Contact</a>
                    </li>
                </div>
            </div>
        </ul>
    </div>
</div>
