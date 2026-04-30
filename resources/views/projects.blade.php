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
                            <span class="badge tech-badge">Bootstrap</span>
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
                            <span class="badge tech-badge">CMS</span>
                            <span class="badge tech-badge">MySQL</span>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="https://github.com/..." class="btn btn-sm btn-dark w-50">GitHub</a>
                            <button 
                                class="btn btn-sm btn-outline-dark w-50 preview-trigger" 
                                data-bs-toggle="modal" 
                                data-bs-target="#projectPreviewModal"
                                data-title="Lighthouse Christian Community Admin Preview"
                                data-images="{{ asset('images/lcc-admin-cards.png') }},{{ asset('images/lcc-admin-carousel.png') }},{{ asset('images/lcc-admin-user.png') }}">
                                Preview
                            </button>
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
                            <span class="badge tech-badge">Laravel</span>
                            <span class="badge tech-badge">PHP</span>
                            <span class="badge tech-badge">MySQL</span>
                            <span class="badge tech-badge">Bootstrap</span>
                            <span class="badge tech-badge">CMS</span>
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

<div class="modal fade" id="projectPreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="modalProjectTitle">Project Preview</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="carouselItems">
                        <!-- Images will be injected here by JS -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const previewModal = document.getElementById('projectPreviewModal');
    
    previewModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const title = button.getAttribute('data-title');
        const images = button.getAttribute('data-images').split(',');

        // Update Title
        document.getElementById('modalProjectTitle').textContent = title;

        // Build Carousel Items
        const carouselInner = document.getElementById('carouselItems');
        carouselInner.innerHTML = ''; // Clear previous images

        images.forEach((imgSrc, index) => {
            const activeClass = index === 0 ? 'active' : '';
            carouselInner.innerHTML += `
                <div class="carousel-item ${activeClass}">
                    <img src="${imgSrc.trim()}" class="d-block w-100" style="object-fit: contain; max-height: 80vh;" alt="Preview">
                </div>
            `;
        });
    });
});
</script>
@endsection