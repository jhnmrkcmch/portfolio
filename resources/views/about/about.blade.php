@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'About')

@section('content')
<!-- Block 1 -->
<section class="landing-page d-flex align-items-center justify-content-center text-center" 
    style="background-image: url('{{ asset('images/aboutus-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            About Us
        </h1>
    </div>
</section>

<!-- Block 2 -->
<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Get Fired Up!</h2>

        <p class="mx-auto text-black-text mb-4">
            This is the best time to be alive, and we want to see you fired up, full of love, and 
            passionate for Jesus! We know searching for a new home-church can be a challenge 
            for various reasons; but, we also know that when the Holy Spirit leads you to the right 
            church family, our lives are enriched and changed forever. Growing a garden, building a 
            house, raising up a family, and empowering community are just some of the terms we use 
            to define who we are and what we do.
        </p>
    </div>
</section>

<!-- Block 4 -->
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

<!-- block 6 -->
<section class="expect-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                <div class="image-arch mx-auto">
                    <img src="{{ asset('images/expect-img.jpg') }}" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-light mb-3">What to Expect</h2>
                <div class="title-line mb-4"></div>

                <p class="expect-text">
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
        </div>
    </div>
</section>

<!-- block 7 -->
<section class="text-button-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">We Look Forward To Seeing You!</h2>

        <p class="mx-auto text-button-black-text mb-4">
            Take a moment to fill out the form by clicking the button below. This allows us to
            know you a little more, and will help us serve you better. Have children? Register
            them today and save time at check-in! All in one simple form.
        </p>

        <a href="#" class="btn btn-light px-4 py-2">
            Plan a Visit
        </a>
    </div>
</section>

<!-- Discover More -->
<section class="discover-section py-5" data-aos="fade-up" data-aos-duration="2000">
    <div class="container text-center">
        <h2 class="discover-title mb-5">Discover More</h2>

        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="discover-card">
                    <a href="{{ route('about.beliefs') }}">
                        <img src="{{ asset('images/about-discover-beliefs.jpg') }}" class="img-fluid" alt="Beliefs">
                    </a>
                    <p class="discover-label mt-3">Beliefs</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="discover-card">
                    <a href="{{ route('about.vision') }}">
                        <img src="{{ asset('images/about-discover-vision.jpg') }}" class="img-fluid" alt="Beliefs">
                    </a>                    
                    <p class="discover-label mt-3">Vision</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="discover-card">
                    <a href="{{ route('about.pastors') }}">
                        <img src="{{ asset('images/about-discover-pastors.jpg') }}" class="img-fluid" alt="Beliefs">
                    </a>                    
                    <p class="discover-label mt-3">Pastors</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="discover-card">
                    <a href="{{ route('about.team') }}">
                        <img src="{{ asset('images/about-discover-team.jpg') }}" class="img-fluid" alt="Beliefs">
                    </a>                    
                    <p class="discover-label mt-3">Team Leaders</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection