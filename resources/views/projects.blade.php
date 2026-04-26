@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Projects')

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

<section class="projects-section py-5">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">My Projects</h2>
            <p class="text-muted">A collection of systems and applications I’ve built</p>
        </div>

        <div class="row g-4">

            <!-- PROJECT 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100">
                    <img src="{{ asset('images/projects-mobo.png') }}" class="img-fluid project-img" alt="Project">

                    <div class="p-3">
                        <h5 class="fw-bold">MOBO PH Website</h5>
                        <p class="text-muted small">
                            A CRUD-based admin system for managing users, content, and data efficiently.
                        </p>

                        <!-- TECH -->
                        <div class="mb-3">
                            <span class="badge tech-badge">Laravel</span>
                            <span class="badge tech-badge">PHP</span>
                            <span class="badge tech-badge">MySQL</span>
                        </div>

                        <!-- BUTTONS -->
                        <div class="d-flex gap-2">
                            <a href="https://github.com/jhnmrkcmch/mobo" class="btn btn-sm btn-dark w-50">GitHub</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-50">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJECT 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100">
                    <img src="{{ asset('images/projects-lcc.png') }}" class="img-fluid project-img" alt="Project">

                    <div class="p-3">
                        <h5 class="fw-bold">CMS Website</h5>
                        <p class="text-muted small">
                            Built a content management system for updating pages, blogs, and media dynamically.
                        </p>

                        <div class="mb-3">
                            <span class="badge tech-badge">Laravel</span>
                            <span class="badge tech-badge">Bootstrap</span>
                            <span class="badge tech-badge">JavaScript</span>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="https://github.com/arnoldsubastil/lighthouseWebsite/tree/testing-branch" class="btn btn-sm btn-dark w-50">GitHub</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-50">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJECT 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100">
                    <img src="{{ asset('images/projects-portfolio.png') }}" class="img-fluid project-img" alt="Project">

                    <div class="p-3">
                        <h5 class="fw-bold">Personal Portfolio Website</h5>
                        <p class="text-muted small">
                            A system to manage student records with full CRUD functionality and authentication.
                        </p>

                        <div class="mb-3">
                            <span class="badge tech-badge">PHP</span>
                            <span class="badge tech-badge">MySQL</span>
                            <span class="badge tech-badge">Bootstrap</span>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="https://github.com/jhnmrkcmch/portfolio" class="btn btn-sm btn-dark w-50">GitHub</a>
                            <a href="https://johnmarkcamacho.onrender.com/" class="btn btn-sm btn-outline-dark w-50">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection