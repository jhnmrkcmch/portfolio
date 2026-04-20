@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Ministries')

@vite(['resources/css/ministries.css', 'resources/js/ministries.js'])

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/mensministry-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Ministries
        </h1>
    </div>
</section>
<section class="ministry-team-section py-5">
    <div class="container">
        <div class="text-center col-lg-8 ministry-team-custom-text">
            <h2 class="mb-2">Team Leaders</h2>
            <p class="mb-5">It's our heart that you stay connected with other members and ministries at the church. 
                This allows for you to be in community and do life with amazing people. Not only are 
                there great things happening in these ministries, but great friendships are also made 
                here. Interested in helping in any of these ministries? Don't hesitate to email a team 
                leader of any ministry with any questions you may have!
            </p>
        </div>


        <div class="row justify-content-center g-4">

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-children.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">children</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-youth.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Youth</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-women.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Women</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-prayer.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Prayer & Intercession</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-support.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Support Group</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-hospitality.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Hospitality</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-usher.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Ushers</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-worship.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Worship</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="ministry-team-member">
                    <img src="{{ asset('images/ministries-media.jpg') }}" class="img-fluid">
                    <h4 class="mt-3">Creative Media</h4>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="block-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-light mb-3">Interested in small groups?</h2>
            
                <a href="#" class="buy-link">
                    I'm Interested!
                </a>
            </div>

            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                <div class="image-arch mx-auto">
                    <img src="{{ asset('images/expect-img.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="elders-section py-5 custom-view">
    <div class="container">

        <!-- Intro -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-3">Meet Our Connections Team Leader</div>
            </div>
        </div>

        <div class="row justify-content-center text-center">

            <!-- Elder -->
            <div class="col-md-4 mb-5 d-flex justify-content-center">
                <div class="elder-card text-center">

                    <div class="elder-image-wrapper mx-auto">
                        <img src="{{ asset('images/ministries-connection-pastor.jpg') }}"
                            alt="Pat & Nikki Fossett"
                            class="elder-image img-fluid">
                    </div>

                    <div class="elder-name mt-3">Jordan Deal</div>
                    <div class="elder-role">connection pastor</div>

                </div>
            </div>

        </div>

    </div>
</section>
@endsection