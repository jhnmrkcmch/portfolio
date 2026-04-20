@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Prayer and Intercession')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Prayer and Intercession
        </h1>
    </div>
</section>

<section class="py-5 bg-dark">
    <div class="container">
        <div class="content my-5">
            <h2 class="text-light fw-light text-center">
                To grow a culture of prayer that is <br> sustained, healthy and vibrant.
            </h2>
        </div>
    </div>
</section>


<section class="block-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-bold mb-3">Vision</h2>
                <p>
                    To know the heart, purposes and intent of God, and to release 
                    it on earth through prayer, intercession, decrees and proclamations.
                </p>

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


<section class="py-5 prayer-section text-white">
    <div class="container text-center">

        <!-- Title -->
        <h2 class="fw-light mb-5 fs-1"><b>Prayer Schedule</b></h2>

        <!-- Schedule Row -->
        <div class="row justify-content-center gy-5 mt-5">

            <!-- Incense Prayer -->
            <div class="col-md-5">
                <div class="prayer-icon mb-3">≋≋≋</div>
                <h6 class="text-uppercase fs-3">Incense Prayer</h6>
                <p class="small mt-3 fs-5">
                    <strong>Main Sanctuary</strong><br>
                    Wednesdays<br>
                    12:00 pm – 1:00 pm
                </p>
            </div>

            <!-- Pre-Service Prayer -->
            <div class="col-md-6">
                <div class="prayer-icon mb-3">≋≋≋</div>
                <h6 class="text-uppercase fs-3">Pre-Service Prayer</h6>
                <p class="small mt-3 fs-5">
                    <strong>Prayer Room</strong><br>
                    Every Sunday Morning<br>
                    8:00 am
                </p>

                <p class="small mt-4 fs-5">
                    <strong>Prayer Room</strong><br>
                    First Wednesday of the Month<br>
                    6:00 pm
                </p>
            </div>

        </div>

    </div>
</section>


<section class="py-5 prayer-rss">
    <div class="container text-center text-light my-5">
        <h2 class="fw-light"><b>Prayer Resources</b></h2>
        <p class="small mb-4">
            Download the PDFs below for our free guides and resources.
        </p>

        <!-- Resource Links -->
        <div class="d-flex justify-content-center gap-4 flex-wrap">
            <a href="#" class="resource-link">What is Fasting?</a>
            <a href="#" class="resource-link">Metabolic Fasting</a>
        </div>
    </div>
</section>

<section class="py-5 text-white" style="background:#f5f5f5;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Heading -->
                <div class="text-center mb-4 text-dark">
                    <h2 class="fw-dark">How Can We Pray For You?</h2>
                    <p class="text">Submit a request and our team of intercessors will pray for you immediately</p>
                </div>

                <!-- Form -->
                <form>
                    <p class="small text text-dark">
                        Fields marked with an <span class="text-danger">*</span> are required
                    </p>

                    <!-- Name -->
                    <div class="mb-3 text-dark">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control ya-custom text-dark" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3 text-dark">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control ya-custom" required>
                    </div>

                    <div class="mb-4 text-dark">
                        <label class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea rows="6" class="form-control ya-custom" required></textarea>
                    </div>

                    <!-- reCAPTCHA placeholder -->
                    <div class="fake-captcha d-flex align-items-center gap-2 p-2">
                        <input type="checkbox" class="form-check-input">
                        <span>I’m not a robot</span>
                        <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" 
                             alt="captcha" width="30" class="ms-auto">
                    </div>


                    <!-- Button -->
                    <button type="submit" class="btn btn-dark px-5">
                        Send
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>

<section class="elders-section py-5 custom-prayer">
    <div class="container">

        <!-- Intro -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-3 text-light">Meet our Co-Op Principal</div>
            </div>
        </div>

        <!-- Elders Grid -->
        <div class="row justify-content-center text-center">

            <!-- Elder -->
            <div class="col-md-4 mb-5 d-flex justify-content-center">
                <div class="elder-card text-center">

                    <div class="elder-image-wrapper mx-auto">
                        <img src="{{ asset('images/expect-img.jpg') }}"
                             alt="Pat & Nikki Fossett"
                             class="elder-image img-fluid">
                    </div>

                    <div class="elder-name mt-3 text-light">Pat & Nikki Fossett</div>
                    <div class="elder-role text-light">Associate Pastor / Elder / Prayer Team Leader</div>

                </div>
            </div>

        </div>

    </div>
</section>
@endsection