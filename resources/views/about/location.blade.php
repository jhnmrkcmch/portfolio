@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Location & Services')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/location-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Location & Services
        </h1>
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


<section class="service-section py-5 text-white">
    <div class="container text-center">

        <!-- Title -->
        <h2 class="service-title mb-3">Service Times &amp; Location</h2>

        <!-- Address -->
        <p class="service-address mb-5">
            10309 South Padre Island Drive, Corpus Christi, TX
        </p>

        <!-- Service Times -->
        <div class="row justify-content-center g-5">

            <!-- Sunday Service -->
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-clock service-icon mb-3"></i>
                    <h5 class="service-name">Sunday Service</h5>
                    <p class="service-time">9:00 am &amp; 11:00 am</p>
                </div>
            </div>

            <!-- Wednesday Service -->
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-clock service-icon mb-3"></i>
                    <h5 class="service-name">First Wednesday of The Month</h5>
                    <p class="service-time">7:00 PM</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="text-button-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3">Plan A Visit</h2>

        <p class="mx-auto text-button-text mb-4">
            We would love to meet you and make you feel at home here at Lighthouse Church. 
            Take a moment to fill out the form by clicking the button below. This allows us 
            to know you a little more, and will help us serve you better. Have children? 
            Register them today and save time at check-in! All in one simple form.
        </p>

        <a href="#" class="btn btn-dark px-4 py-2">
            Plan a Visit
        </a>
    </div>
</section>
@endsection