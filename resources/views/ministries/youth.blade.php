@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Youth')

@vite(['resources/css/events.css', 'resources/js/events.js'])

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/youth-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Youth
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

<section class="what-to-expect py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="display-6 fw-light mb-4">What To Expect</h2>

                <p class="lead">
                    <strong>Parents:</strong> Our focus is to set a foundation of identity,
                    create a culture of freedom that brings students into a healthy
                    church family. We will equip the youth to be radically in love
                    with Jesus, full of the Holy Spirit, and to be the hands and
                    feet of God on the earth. Expect interactive lessons, times
                    of ministry, and fun leisurely activities before message.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="join-hero d-flex align-items-center">
    <div class="overlay"></div>

    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6 text-white">

                <h1 class="display-1 fw-light mb-4">Join<br>Us!</h1>

                <p class="mb-2">
                    Junior High - Sunday morning after worship<br>
                    during our 11am service (approx. 11:30am)
                </p>

                <p class="mb-2">
                    High School - Sunday nights at 6:30pm
                </p>

                <p>
                    We always meet in Suite D next to Coffee Waves Flour Bluff
                </p>

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