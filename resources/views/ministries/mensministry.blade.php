@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Mens\'s Ministry')

@vite(['resources/css/events.css', 'resources/js/events.js'])

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/mensministry-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Men's Ministry
        </h1>
    </div>
</section>


<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">Vision</h2>

        <p class="mx-auto text-white-text mb-4">
            Our vision is to equip our volunteers with all the tools they will need to successfully 
            teach in the classrooms. Our goal is to create an atmosphere where our children feel loved, 
            safe, and treasured. Our hope is to see salvation among the next generation in the 
            city of Corpus Christi, Texas.
        </p>
    </div>
</section>

<section>
    <div class="upcoming-events">
        <div class="container text-center py-5">
            <h2 class="fw-light mb-3 text-dark">Upcoming Events</h2>
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

@endsection