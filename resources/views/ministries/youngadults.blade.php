@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Young Adults')

@vite(['resources/css/events.css', 'resources/js/events.js'])

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Young Adults
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


<section class="join-info py-5">
    <div class="container text-center text-white">

        <!-- Heading -->
        <h2 class="fw-light mb-5">
            We're excited for you to join us!
        </h2>

        <!-- Info -->
        <div class="row justify-content-center gy-1">

            <!-- When -->
            <div class="col-md-5">
                <i class="bi bi-calendar3 fs-1 mb-3"></i>
                <h5 class="fw-normal">When</h5>
                <p class="mb-0">
                    The First and Third Friday of the month @ 7:00 pm
                </p>
            </div>

            <!-- Where -->
            <div class="col-md-5">
                <i class="bi bi-map fs-1 mb-3"></i>
                <h5 class="fw-normal">Where</h5>
                <p class="mb-0">
                    10309 South Padre Island Drive, Suite D | Corpus Christi, TX
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-5 text-white" style="background:#f5f5f5;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Heading -->
                <div class="text-center mb-4 text-dark">
                    <h2 class="fw-dark">Connect</h2>
                    <p class="text">Have any questions?</p>
                </div>

                <!-- Form -->
                <form>
                    <p class="small text text-dark">
                        Fields marked with an <span class="text-danger">*</span> are required
                    </p>

                    <!-- Name -->
                    <div class="mb-3 text-dark">
                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control ya-custom text-dark" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3 text-dark">
                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="email" class="form-control ya-custom" required>
                    </div>

                    <div class="mb-3 text-dark">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control ya-custom" required>
                    </div>

                    <div class="mb-3 text-dark">
                        <label class="form-label">questions <span class="text-danger">*</span></label>
                        <input type="email" class="form-control ya-custom" required>
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
@endsection