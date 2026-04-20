@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Podcasts')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Podcasts
        </h1>
        <p class="text-light fs-2">Listen anywhere, anytime.</p>
    </div>
</section>


<section class="py-5 bg-white">
    <div class="container text-center">

        <!-- Title -->
        <h2 class="fw-light mb-5">Available On</h2>

        <!-- Buttons Row -->
        <div class="row justify-content-center align-items-center g-4">

            <!-- Apple Podcasts -->
            <div class="col-auto">
                <a href="#" class="text-decoration-none">
                    <div class="d-flex align-items-center px-4 py-3 border rounded-pill">
                        <img src="{{ asset('images/applepodcasts.png') }}"
                             alt="Apple Podcasts"
                             width="28"
                             class="me-3">
                        <div class="text-start">
                            <small class="text-muted d-block">Listen on</small>
                            <strong class="text-dark">Apple Podcasts</strong>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Google Podcasts -->
            <div class="col-auto">
                <a href="#" class="text-decoration-none">
                    <div class="d-flex align-items-center px-4 py-3 border rounded-pill">
                        <img src="{{ asset('images/googlepodcasts.png') }}"
                             alt="Google Podcasts"
                             width="28"
                             class="me-3">
                        <div class="text-start">
                            <small class="text-muted d-block">Listen on</small>
                            <strong class="text-dark">Google Podcasts</strong>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Spotify -->
            <div class="col-auto">
                <a href="#" class="text-decoration-none">
                    <div class="d-flex align-items-center px-4 py-3 rounded-pill bg-dark">
                        <img src="{{ asset('images/spotifypodcasts.png') }}"
                             alt="Spotify"
                             width="28"
                             class="me-3">
                        <strong class="text-white">Listen on Spotify</strong>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

@endsection