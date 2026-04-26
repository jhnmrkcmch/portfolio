@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Internships')

@section('content')

<section class="landing-page d-flex align-items-center justify-content-center text-center" 
style="background-image: url('{{ asset('images/internship-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Internship
        </h1>
        <p class="text-light fs-2">Development | Collaboration | Communication</p>
    </div>
</section>

<section class="internship-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT: CONTENT -->
            <div class="col-lg-6 mb-4 mb-lg-0">

                <h2 class="internship-title">Prov 10:22 <br> Software Development</h2>

                <h5 class="mt-3 fw-bold text-dark">Web Development Intern</h5>
                <p class="text-muted"><i>February 2024 – May 2024</i></p>

                <!-- DESCRIPTION -->
                <ul class="internship-list">
                    <li>Translated design mockups into a fully functional and responsive website</li>
                    <li>Developed responsive UI using HTML, CSS, and JavaScript</li>
                    <li>Implemented dynamic CMS and content updates</li>
                    <li>Developed backend features using PHP and MySQL</li>
                    <li>Used Git for version control and collaboration</li>
                    <li>Debugged and tested applications for performance</li>
                </ul>

                <!-- TECH STACK -->
                <div class="mt-4">
                    <p class="fw-bold mb-2">Tech Stack:</p>
                    <span class="badge tech-badge">Laravel</span>
                    <span class="badge tech-badge">PHP</span>
                    <span class="badge tech-badge">MySQL</span>
                    <span class="badge tech-badge">JavaScript</span>
                    <span class="badge tech-badge">Bootstrap</span>
                    <span class="badge tech-badge">Git</span>
                </div>

                <!-- HIGHLIGHT -->
                <p class="highlight-text mt-4">
                    Full-Stack Development | CMS Integration | Version Control
                </p>

            </div>

            <!-- RIGHT: CARD -->
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="internship-card text-center">
                    <img src="{{ asset('images/prov1022-logo.png') }}" 
                         class="img-fluid mb-3 internship-logo" 
                         alt="Prov1022 Logo">

                    <h5 class="fw-bold mb-1">Prov1022</h5>
                    <p class="text-muted mb-2">Software Development</p>

                    <div class="divider"></div>

                    <p class="small text-muted mt-3">
                        Built admin panels and CMS features using Laravel and MySQL.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ministry-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT: CONTENT -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-light">

                <h2 class="internship-title text-light">Prosperland Home Realty</h2>

                <h5 class="mt-3 fw-bold text-light">IT Intern</h5>
                <p class="text-muted"><i>November 2025 – April 2026</i></p>

                <!-- DESCRIPTION -->
                <ul class="internship-list">
                    <li>Assisted in managing and updating website content using WordPress CMS.</li>
                    <li>Communicated with clients/users to gather requirements or resolve issues.</li>
                    <li>Improved workflow efficiency through organization and coordination. </li>
                    <li>Supported debugging and testing processes to ensure system performance.</li>     
                </ul>

                <!-- TECH STACK -->
                <div class="mt-4">
                    <p class="fw-bold mb-2">Tech Stack:</p>
                    <span class="badge tech-badge bg-white text-dark">CMS Tools</span>
                    <span class="badge tech-badge bg-white text-dark">Bootstrap</span>
                    <span class="badge tech-badge bg-white text-dark">JavaScript</span>
                    <span class="badge tech-badge bg-white text-dark">Manual Testing / Debugging</span>
                    <span class="badge tech-badge bg-white text-dark">MySQL</span>
                </div>

                <!-- HIGHLIGHT -->
                <p class="highlight-text mt-4">
                    Content Management | Website Maintenance | Testing & Support
                </p>

            </div>

            <!-- RIGHT: CARD -->
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="internship-card text-center">
                    <img src="{{ asset('images/plhr-logo.webp') }}" 
                         class="img-fluid mb-3 internship-logo" 
                         alt="Prov1022 Logo">

                    <h5 class="fw-bold mb-1">Prosperland Home Realty</h5>
            
                    <div class="divider"></div>

                    <p class="small text-muted mt-3">
                        Assisted in managing and updating website content using CMS tools. 
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection