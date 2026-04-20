@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Womens\'s Ministry')

@vite(['resources/css/events.css', 'resources/js/events.js'])

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/womensministry-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Men's Ministry
        </h1>
    </div>
</section>

<section class="block-section py-5">
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
        </div>
    </div>
</section>

<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">When Do We Meet?</h2>

        <p class="mx-auto text-black-text mb-4">
            Corporate monthly brunch will be held at 11am in the main sanctuary on the 
            second Saturday of every month. It consists of fellowship, bible study, and ministry time. <br> <br>
            We also have seasonal bible study home groups that will be meeting weekly for a designated 
            length of time (roughly 8-10 weeks) over a book, chosen curriculum, or a predetermined 
            topic of study. Be sure to check weekly service announcements for information on other 
            women’s ministry gatherings as they come 
        </p>
    </div>
</section>


<section class="elders-section py-5">
    <div class="container">

        <!-- Intro -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-3">Elders</div>

                <p class="section-description">
                    What is the role of an elder? Our Elders are those that are seasoned in
                    their faith and walk in wisdom and integrity. They are entrusted to give
                    spiritual guidance and oversight to the church body as a whole as the
                    Lord leads. They aim to hear where the Lord wants to take us as a church
                    body as they lean into the Lord through prayer and intercession.
                </p>
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

                    <div class="elder-name mt-3">Pat & Nikki Fossett</div>
                    <div class="elder-role">Elders</div>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="py-5 text-white" style="background:#1c1c1c;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Heading -->
                <div class="text-center mb-4">
                    <h2 class="fw-light">Connect</h2>
                    <p class="text">Want to serve or have any questions?</p>
                </div>

                <!-- Form -->
                <form>
                    <p class="small text">
                        Fields marked with an <span class="text-danger">*</span> are required
                    </p>

                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-input" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control custom-input" required>
                    </div>

                    <!-- Message -->
                    <div class="mb-4">
                        <label class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea rows="6" class="form-control custom-input" required></textarea>
                    </div>

                    <!-- reCAPTCHA placeholder -->
                    <div class="fake-captcha d-flex align-items-center gap-2 p-2">
                        <input type="checkbox" class="form-check-input">
                        <span>I’m not a robot</span>
                        <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" 
                             alt="captcha" width="30" class="ms-auto">
                    </div>


                    <!-- Button -->
                    <button type="submit" class="btn btn-outline-light px-4">
                        Send
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection