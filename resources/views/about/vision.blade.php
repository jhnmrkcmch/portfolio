@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Vision & Mission')


@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/vision-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Vision & Mission
        </h1>
    </div>
</section>

<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">The Vision</h2>

        <p class="mx-auto text-black-text mb-4">
            Rock City Church is on a mission to advance the kingdom of God by transforming both 
                the natural and spiritual climates of our city, region, and the nations of the world.
        </p>
    </div>
</section>

<section class="block-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-light mb-3">What to Expect</h2>
                <div class="title-line mb-4"></div>

                <p class="block-text">
                    Lighthouse Christian Community is a full-gospel Spirit-filled church in
                    Corpus Christi Texas that focuses on experiencing God’s
                    love and power in a profound way. It’s His presence and
                    love that changes lives, and that’s what we seek above
                    all else. Spirit-led worship, Wind-driven teaching, and a
                    unified family that loves well is what makes the Lighthouse
                    experience so life impacting. So, expect to feel His love
                    and life the minute you walk through the front doors.
                </p>
            </div>

            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                <div class="image-arch mx-auto">
                    <img src="{{ asset('images/expect-img.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="core-values-section py-5">
    <div class="container text-center">

        <!-- Title -->
        <h2 class="core-title mb-5">Core Values</h2>

        <!-- Values -->
        <div class="row justify-content-center">

            <div class="col-6 col-md-3 mb-4">
                <div class="core-item">
                    <div class="core-letter">R</div>
                    <p class="core-text">Reflect Christ</p>
                </div>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <div class="core-item">
                    <div class="core-letter">E</div>
                    <p class="core-text">Equip the family</p>
                </div>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <div class="core-item">
                    <div class="core-letter">A</div>
                    <p class="core-text">Advance the Kingdom</p>
                </div>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <div class="core-item">
                    <div class="core-letter">L</div>
                    <p class="core-text">Love our community</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection