@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Education')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/education-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Education
        </h1>
    </div>
</section>



<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Vision</h2>

        <p class="mx-auto text-black-text mb-4 text-center">
            My vision is to become a skilled web developer who builds meaningful 
            and user-friendly applications. I aim to create solutions that not only solve 
            real-world problems but also make a positive impact on people and communities.
        </p>
</section>

<section class="education-section py-5">
    <div class="container" data-aos="fade-up" data-aos-duration="1500">

        <h2 class="fw-bold text-center mb-5">Educational Background</h2>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-4">
                <div class="education-card h-100">
                    <h5>🎓 Bachelor of Science in Information Technology</h5>
                    <p class="text-muted mb-1">
                        Pamantasan ng Lungsod ng Muntinlupa
                    </p>
                    <small class="text-muted">2024 – 2026</small>

                    <p class="mt-3">
                        Focused on web development, system design, and building real-world applications through hands-on projects.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4">
                <div class="education-card h-100">
                    <h5>🎓 Associate in Computer Technology</h5>
                    <p class="text-muted mb-1">
                        Pamantasan ng Lungsod ng Muntinlupa
                    </p>
                    <small class="text-muted">2022 – 2024</small>

                    <p class="mt-3">
                        Built a strong foundation in programming, database management, and application development.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-4">
                <div class="education-card h-100">
                    <h5>🎓 Senior High School – ICT Strand</h5>
                    <p class="text-muted mb-1">
                        Tunasan National High School
                    </p>
                    <small class="text-muted">2020 – 2022</small>

                    <p class="mt-3">
                        Gained introductory knowledge in programming, web development, and computer systems.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection