@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Media')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/projects-bg.png') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Projects
        </h1>
    </div>
</section>


<section class="py-5">
    <div class="container">

        <!-- Section Title -->
        <h2 class="text-center fw-light mb-5">Projects</h2>

        <!-- Cards -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/projects-lcc.png') }}" class="img-fluid rounded mb-3" alt="It's Always been His Call">

                        <h5 class="fw-normal">Lighthouse Christian Community</h5>
                        <p class="small text-muted">
                            A responsive website for a local church featuring event management, 
                                media content, and community engagement tools.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/projects-mobo.png') }}" class="img-fluid rounded mb-3" alt="The Purpose of Favor">
    
                        <h5 class="fw-normal">MOBOPH</h5>
                        <p class="small text-muted">
                            An IT services website showcasing solutions for businesses, including 
                            service offerings, client engagement features, and a modern UI.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <a href=""
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/projects-portfolio.png') }}" class="img-fluid rounded mb-3" alt="Defining Favor">

                        <h5 class="fw-normal">Portfolio</h5>
                        <p class="small text-muted">
                            A modern developer portfolio built to showcase my work, technical 
                            skills, and creative approach to building web applications.
                        </p>
                    </div>
                </a>
            </div>

        </div>

        <!-- View All Button -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-dark px-4">
                View All
            </a>
        </div>

    </div>
</section>

@endsection