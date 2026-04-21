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
<section class="block-section py-5" id="skills">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-light mb-3">How I Work</h2>
                <div class="title-line mb-4"></div>

                <ul>
                    <li>Clear communication throughout the project</li>
                    <li>Clean, maintainable code</li>
                    <li>Performance and usability focused</li>
                    <li>On-time delivery</li>
                </ul>


                <br>
                <h2 class="fw-light mb-3">Skills</h2>
                <div class="title-line mb-4"></div>

                <ul>
                    <li>Backend: Laravel, PHP</li>
                    <li>Frontend: HTML, CSS, JavaScript, Bootstrap</li>
                    <li>Database: MySQL</li>
                    <li>Other: Git, Responsive Design</li>
                </ul>
            </div>

            <div class="image-wrapper mx-auto">
                <img src="{{ asset('images/profileimage.jpg') }}" class="img-fluid community-image" style="height: 480px;"/>
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

<!-- Discover More -->
<section class="discover-section py-5" data-aos="fade-up" data-aos-duration="2000">
    <div class="container text-center">
        <h2 class="discover-title mb-5">What I Do</h2>

        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card shadow-sm">
                    <div class="discover-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-code-icon lucide-square-code"><path d="m10 9-3 3 3 3"/><path d="m14 15 3-3-3-3"/><rect x="3" y="3" width="18" height="18" rx="2"/></svg>              
                        <h5>Laravel Development</h5>
                        <p>Build secure and scalable web applications.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card shadow-sm">
                    <div class="discover-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-chart-column-increasing-icon lucide-file-chart-column-increasing"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M8 18v-2"/><path d="M12 18v-4"/><path d="M16 18v-6"/></svg>
                    
                        <h5>Custom Systems</h5>
                        <p>Admin panels, dashboards, and business tools.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card  shadow-sm">
                    <div class="discover-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-smartphone-icon lucide-monitor-smartphone"><path d="M18 8V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h8"/><path d="M10 19v-3.96 3.15"/><path d="M7 19h5"/><rect width="6" height="10" x="16" y="12" rx="2"/></svg>

                    
                        <h5>Responsive Design</h5>
                        <p>Optimized for mobile, tablet, and desktop.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card shadow-sm">
                    <div class="discover-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-cog-icon lucide-file-cog"><path d="M15 8a1 1 0 0 1-1-1V2a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8z"/><path d="M20 8v12a2 2 0 0 1-2 2h-4.182"/><path d="m3.305 19.53.923-.382"/><path d="M4 10.592V4a2 2 0 0 1 2-2h8"/><path d="m4.228 16.852-.924-.383"/><path d="m5.852 15.228-.383-.923"/><path d="m5.852 20.772-.383.924"/><path d="m8.148 15.228.383-.923"/><path d="m8.53 21.696-.382-.924"/><path d="m9.773 16.852.922-.383"/><path d="m9.773 19.148.922.383"/><circle cx="7" cy="18" r="3"/></svg>
                        <h5>CMS Solutions</h5>
                        <p>Manage website content easily with custom systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection