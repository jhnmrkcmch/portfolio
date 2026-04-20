@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'New Here?')


@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Become a Member
        </h1>
    </div>
</section>


<section class="culture-section">
    <div class="container">
        <div class="row">

            <!-- Text -->
            <div class="col-lg-8 culture-text">      

                <h2>
                    <img src="{{ asset('images/expect-img.jpg') }}" alt="Culture">
                </h2>
                <h2>Step 1: Culture</h2>

                <p>
                    There are millions of different churches all over the world and every church
                    has its own unique culture. Rock City is no different… We have our own culture,
                    language, and definitions. Our culture is vibrant, multicultural, familial,
                    biblically based, Kingdom driven, and Spirit-led in every way possible.
                </p>

                <p>
                    We have new people coming into Rock City every single week and from every
                    walk of life. Our first step for everyone who is feeling led into Rock City
                    is to come to our monthly “CULTURE” class that takes place on the first Sunday
                    of every month immediately following our second service.
                </p>
        
                <p>
                    This is a brief, 1 hour meet-and-greet, where you can get to know some of our
                    leaders, have refreshments, as well as hear more about the heart and language
                    of Rock City Church.
                </p>

                <p>
                    This is just the first step on our journey together and we look forward to
                    taking it with you. Anyone can attend our monthly “Culture” class.
                    Registration does help us prepare better.
                </p>
        </div>

        <!-- Button -->
        <div class="culture-button">
            <a href="#" class="btn btn-dark">
                Register For Culture 101
            </a>
        </div>
    </div>
</section>

<section class="culture-section dark">
    <div class="container">
        <div class="row">

            <!-- Text -->
            <div class="col-lg-8 culture-text-dark">      

                <h2>
                    <img src="{{ asset('images/expect-img.jpg') }}" alt="Culture">
                </h2>
                <h2>Step 2: Serve</h2>

                <p>
                    There are millions of different churches all over the world and every church
                    has its own unique culture. Rock City is no different… We have our own culture,
                    language, and definitions. Our culture is vibrant, multicultural, familial,
                    biblically based, Kingdom driven, and Spirit-led in every way possible.
                </p>

                <p>
                    We have new people coming into Rock City every single week and from every
                    walk of life. Our first step for everyone who is feeling led into Rock City
                    is to come to our monthly “CULTURE” class that takes place on the first Sunday
                    of every month immediately following our second service.
                </p>
        
                <p>
                    This is a brief, 1 hour meet-and-greet, where you can get to know some of our
                    leaders, have refreshments, as well as hear more about the heart and language
                    of Rock City Church.
                </p>

                <p>
                    This is just the first step on our journey together and we look forward to
                    taking it with you. Anyone can attend our monthly “Culture” class.
                    Registration does help us prepare better.
                </p>
        </div>

        <!-- Button -->
        <div class="culture-button">
            <a href="#" class="btn btn-light">
                Register For Culture 101
            </a>
        </div>
    </div>
</section>


<section class="culture-section-step3">
    <div class="container">
        <div class="row">

            <!-- Text -->
            <div class="col-lg-8 culture-text-step3">      
                <h2>Step 3: All In</h2>

                <p>
                    Going <b><i>“All In”</i></b> is the final step for those that have completed their first two steps. 
                    If one has come this far and has been feeling led by the Spirit to make Rock City their 
                    home, then it is probably time to consider becoming an official <b><i>“Member”</i></b> of Rock City 
                    Church. Membership is not something that we believe should be taken lightly. We don’t 
                    like to think of this as some sort of club membership, though it does have it’s benefits, 
                    but rather as a choice to become a <b><i>“Member”</i></b> of a family. Another way one could look at 
                    it is kind of like a <b><i>“Member”</i></b> of a body. In order for a body to function the way it should 
                    you need all of its <b><i>“Member”</i></b> in place. We are a family and we are a part of the Body of 
                    Christ. In order for us to be a healthy family and <b><i>body...</i></b> we need each other. 
                </p>

                <p>
                    Going <b><i>“All In”</i></b> looks like you committing to Rock City and Rock City committing to you. 
                    Our <b><i>“All In”</i></b> membership class takes place quarterly and is announced on our website as 
                    well as in services leading up to the class. All those who have been making their way 
                    through our first 2 steps will be automatically invited to the next <b><i>“All In”</i></b> membership 
                    class in the calendar year. We look forward to having the opportunity to go <b><i>“All In”</i></b> 
                    together and we can not wait to get to know each other more. 


                </p>
                
                <div class="img">
                    <img src="{{ asset('images/vision-bg.jpg') }}">
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="py-5 text-dark" style="background:#333;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Heading -->
                <div class="text-center mb-4 text-light">
                    <h2 class="fw-dark">Connect</h2>
                    <p class="text">Have any questions?</p>
                </div>

                <!-- Form -->
                <form>
                    <p class="small text text-light">
                        Fields marked with an <span class="text-danger">*</span> are required
                    </p>

                    <!-- Name -->
                    <div class="mb-3 text-light">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control ya-custom text-dark" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3 text-light">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control ya-custom" required>
                    </div>

                    <div class="mb-4 text-light">
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
                    <button type="submit" class="btn btn-light px-5">
                        Send
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection