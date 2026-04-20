@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Childrens')

@vite(['resources/css/events.css', 'resources/js/events.js'])

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/childrens-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Children's Ministry
        </h1>
    </div>
</section>

<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">Mission</h2>

        <p class="mx-auto text-white-text mb-4">
            Our mission is to equip our volunteers with all the tools they will need to successfully 
            teach in the classrooms. Our goal is to create an atmosphere where our children feel loved, 
            safe, and treasured. Our hope is to see salvation among the next generation in the 
            city of Corpus Christi, Texas.
        </p>
    </div>
</section>

<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Vision</h2>

        <p class="mx-auto text-black-text mb-4">
            Our vision is to encourage and equip our children to be on fire and wholeheartedly 
            dedicated to God by engraving the written word on their hearts. We want to show our 
            children how to experience God for themselves and empower them to live as true sons 
            and daughters.
        </p>
    </div>
</section>

<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">What does this look like?</h2>

        <p class="mx-auto text-white-text mb-4">
            We make sure the curriculum we teach is biblically accurate and is in line with the 
            heartbeat of Rock City. We empower our teachers to have freedom in the classroom to 
            be spirit-led when teaching lessons. We have personal relationships with our volunteers 
            and walk life out with them. We allow the children to steward their gifts in the classroom 
            by practicing laying hands, praying, and prophesying over one another.
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

<section class="text-button-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">First Time Visitor?</h2>

        <p class="mx-auto text-button-black-text mb-4">
            Register your child now to save time at check-in!
        </p>

        <a href="#" class="btn btn-light px-4 py-2">
            Register
        </a>
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