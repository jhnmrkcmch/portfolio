@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'School of Ministry')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center" 
style="background-image: url('{{ asset('images/schoolofministry-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            School of Ministry
        </h1>
        <p class="text-light fs-2">Presence | Design | Relationship</p>
    </div>
</section>

<section class="block-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-bold mb-3">Vision</h2>
                <p class="block-text ms-5">
                    Raise up holistic leaders to build holistic churches.
                </p>

                <h2 class="fw-bold mb-3">Values</h2>
                <p class="block-text ms-5">
                    Grow strong roots in Christ by experiencing God’s Presence,
                    understanding God’s Design, and pursuing authentic relationships.
                </p>

                <h2 class="fw-bold mb-3">Mission</h2>
                <p class="block-text ms-5">
                    Deliver vision and value aligned seminars, and effective and
                    accessible courses.
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


<section class="ministry-section d-flex align-items-center">
    <div class="container text-center text-white">

        <!-- Title -->
        <h1 class="fw-light mb-4">What is Ministry</h1>

        <!-- Description -->
        <p class="lead mx-auto mb-5" style="max-width: 720px;">
            Ministry is the transfer of life that forms a heart
            connection to the source of life, Jesus
        </p>

        <!-- Spacer -->
        <div class="my-5"></div>

        <!-- Quote -->
        <blockquote class="fst-italic fs-4 mt-5">
            “If you knew the gift of God and who I am, You<br>
            would ask me for living water”
        </blockquote>
        <p class="mt-2">– Jesus</p>

    </div>
</section>


<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark"><b>Why Holistic?</b></h2>

        <p class="mx-auto text-white-text mb-4 text-start">
            Holistic believers are controlled by the love of Christ, move in the 
            gifts of the Spirit and are Holy Spirit-led in all they do.
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Holistic churches value and integrate the five-fold ministry of apostles, 
            prophets, teachers, pastors, and evangelists.
        </p>
    </div>
</section>

<section class="text-white-section">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">   
        <blockquote class="fst-italic fs-3 mt-5 fw-light"><b>
            “If you knew the gift of God and who I am, You<br>
            would ask me for living water”</b>
        </blockquote>
        <p class="mt-2">– Jesus</p>
    </div>
</section>

<section class="text-button-black-section">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Firestorm Course Catalog 2025</h2>
        <a href="#" class="btn btn-light px-4">
            Download
        </a>
    </div>
</section>

<section class="text-button-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">Register Today!</h2>
        <a href="#" class="btn btn-dark px-4">
            Click Here!
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