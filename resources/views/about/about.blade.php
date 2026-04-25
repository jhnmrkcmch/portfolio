@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'About')

@section('content')

<style>
    .card {
    border-radius: 12px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

h2 {
    margin-bottom: 15px;
}
</style>

<!-- Block 1 -->
<section class="landing-page d-flex align-items-center justify-content-center text-center" 
    style="background-image: url('{{ asset('images/about-me.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            About Me
        </h1>
    </div>
</section>

<!-- Block 2 -->
<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Who I Am</h2>

        <p class="mx-auto text-black-text mb-4">
            I specialize in developing web applications using Laravel, with a focus 
            on backend systems, clean architecture, and user-friendly interfaces. 
            I enjoy turning complex ideas into simple, functional solutions.
        </p>
    </div>
</section>



<!-- Block 4 -->
<section id="skills" class="py-5" style="background:#f8f9fa;">

    <div class="container">
        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="fw-bold" style="font-size:42px;">What I Do</h2>
            <p class="text-muted fs-5">
              My skills, expertise, and technical capabilities
            </p>
        </div>
        <!-- SKILL CARDS -->
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-md-6 col-lg-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100 skill-card">
                    <h5 class="fw-bold mb-3">💻 Laravel Web Development</h5>
                    <p class="text-muted mb-0">
                      Building dynamic CMS-based websites using Laravel with clean architecture and structured backend logic.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100 skill-card">
                    <h5 class="fw-bold mb-3">⚙️ Backend Development</h5>
                    <p class="text-muted mb-0">
                      Developing secure backend systems, APIs, authentication, and database logic using Laravel.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100 skill-card">
                    <h5 class="fw-bold mb-3">🗄️ Version Control</h5>
                    <p class="text-muted mb-0">
                      Using Git to manage code history, collaborate with teams, and ensure smooth integration across workflows.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 skill-card">
                        <h5 class="fw-bold mb-3">🛠️ CMS Development</h5>
                        <p class="text-muted mb-0">
                          Creating and customizing CMS platforms with Laravel to manage content, users, and system functionality.
                        </p>
                    </div>
            </div>

        </div>
        

        <!-- DIVIDER -->
        <div class="text-center mb-4">
            <span class="text-uppercase text-muted small">Technologies I Use</span>
            <div style="width:80px; height:3px; background:#333; margin:10px auto; border-radius:5px;"></div>
        </div>

        <!-- TECH STACK -->
        <div class="d-flex flex-wrap justify-content-center gap-3" data-aos="fade-up" data-aos-duration="2000">
            <span class="tech-badge">Laravel</span>
            <span class="tech-badge">CMS Development</span>
            <span class="tech-badge">Role-Based Access Control (RBAC)</span>
            <span class="tech-badge">Responsive Web Design</span>
            <span class="tech-badge">REST APIs</span>
            <span class="tech-badge">MySQL</span>
            <span class="tech-badge">Git & GitHub</span>
        </div>

    </div>
</section>
<section class="py-5" style="background:#f8f9fa;">

    <div class="container" data-aos="fade-up" data-aos-duration="2000">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Development Workflow</h2>
            <p class="text-muted">How I build scalable web applications</p>
        </div>

        <div class="row g-4 text-center">

            <!-- STEP 1 -->
            <div class="col-md-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <h5 class="fw-bold">01</h5>
                    <p class="fw-bold">Planning & System Design</p>
                    <p class="text-muted">
                        Analyze requirements, design database structure, and plan system features 
                        including CMS, user roles, and admin workflows.
                    </p>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="col-md-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <h5 class="fw-bold">02</h5>
                    <p class="fw-bold">Backend Development</p>
                    <p class="text-muted">
                        Develop core functionalities using Laravel, including authentication, 
                        role-based access control, APIs, and content management systems.
                    </p>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="col-md-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <h5 class="fw-bold">03</h5>
                    <p class="fw-bold">Testing & Debugging</p>
                    <p class="text-muted">
                        Test system logic, fix errors, debug database issues, and ensure smooth 
                        user experience across all features and workflows.
                    </p>
                </div>
            </div>

            <!-- STEP 4 -->
            <div class="col-md-3">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <h5 class="fw-bold">04</h5>
                    <p class="fw-bold">Optimization & Deployment</p>
                    <p class="text-muted">
                        Optimize performance, clean codebase, and prepare projects for deployment 
                        (local or hosting) with responsive and production-ready setup.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- block 7 -->
<section class="text-button-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <div class="mb-5">
            <h2 class="text-light">What I’ve Built</h2>
            <p class="text-light">I’ve developed systems such as inventory management platforms, CMS websites, 
                and admin dashboards that help manage data and improve workflows.</p>
        </div>
    </div>
</section>
@endsection