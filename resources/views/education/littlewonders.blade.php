@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Education')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
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

<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-4 text-dark">Education Background</h2>

        <h4 class="mx-auto text-white-text text-start">
            🎓 Bachelor of Science in Information Technology
        </h4>
        <p class="mx-auto text-white-text mb-4 text-start">
            Pamantasan ng Lungsod ng Muntinlupa | 2024 – 2026 <br>
            <i>
                Focused on web development, system design, and building real-world applications through hands-on projects.
            </i>
        </p>

        <h4 class="mx-auto text-white-text text-start">
            🎓 Associate in Computer Technology
        </h4>
        <p class="mx-auto text-white-text mb-4 text-start">
            Pamantasan ng Lungsod ng Muntinlupa | 2022 – 2024 <br>
            <i>
                Built a strong foundation in programming, database management, and application development.
            </i>
        </p>

        <h4 class="mx-auto text-white-text text-start">
            🎓 Senior High School – ICT Strand
        </h4>
        <p class="mx-auto text-white-text text-start">
            Tunasan National High School | 2020 – 2022 <br>
            <i>
                Gained introductory knowledge in programming, web development, and computer systems.
            </i>
        </p>

    </div>
</section>

@endsection