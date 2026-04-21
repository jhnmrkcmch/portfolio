@php
    if (auth()->check() && in_array(auth()->user()->role, ['admin', 'editor'])) {
        $layout = 'layouts.adminLayout';
    } else {
        $layout = 'layouts.layout';
    }
@endphp

@extends($layout)
    
@section('title', 'Home')
@section('hide', false)
@section('content')

<div class="container">
    <div class="main-card">
        <!-- Hero Section -->
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/output-image.jpg') }}" class="profile-img" alt="Profile">
            </div>

            <div class="col-md-8">
                <p class="text-muted mb-1">Web Developer (Laravel)</p>
                <h1 class="fw-bold">John Mark Camacho</h1>
                <p class="text-muted">
                    Specializing in Laravel-based systems, admin dashboards, and content management solutions.
                </p>

                <a href="{{ asset('johnmarkcamacho.pdf') }}" download><button class="btn btn-primary btn-custom me-2">Download CV</button></a>
                <button class="btn btn-outline-secondary btn-custom">View My Work</button>
            </div>
        </div>

        <!-- What I Do -->
        <div class="mt-5">
            <h5 class="fw-bold mb-4">What I Do</h5>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <h6>💻 Laravel Web Development</h6>
                    <p class="text-muted">Building dynamic CMS-based websites using Laravel with clean architecture and structured backend logic.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6>⚙️ Backend Development (Laravel)</h6>
                    <p class="text-muted">
                        Developing secure backend systems, APIs, authentication, and database logic using Laravel
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6>🗄️ Version Control</h6>
                    <p class="text-muted">Utilized Git for version control to manage code history, collaborate effectively in team projects, and ensure smooth integration of changes across development workflows.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6>🛠️ CMS Development & Customization</h6>
                    <p class="text-muted">Creating and customizing CMS-based websites with Laravel to manage content, users, and system functionality.</p>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Banner -->
{{-- <div class="container my-5">
    @php
        $heroTitle = $sections->where('section', 'hero')->where('key', 'title')->first();
        $heroSubtitle = $sections->where('section', 'hero')->where('key', 'subtitle')->first();
    @endphp

    
    <div class="hero-text" data-aos="fade" data-aos-duration="2000">
        <h1>{{ $heroTitle->content ?? 'Default Title' }}</h1>
        <h3>{{ $heroSubtitle->content ?? 'Default Subtitle' }}</h3>
    </div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

        
        <div class="carousel-inner">
            
            @foreach($images as $key => $img)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $img->image_path) }}" class="d-block w-100">
                </div>
                
            @endforeach
        </div>
        
        <!-- Controls (optional but recommended) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

</div> --}}


<!-- Visit -->
<section class="visit">
    <div class="visit-grid" data-aos="fade-up" data-aos-duration="2000">
        <div class="image-wrapper mx-auto">
          <img src="{{ asset('images/profileimage.jpg') }}" class="img-fluid community-image" style="height: 480px; width: 320px;"/>
        </div>

        <div class="visit-content">
          <hr />

          <h2>Let’s Build Something Together</h2>

          <p>
            I build Laravel-based admin systems and CMS-driven websites that are scalable, secure, and easy to manage.
          </p>

          <p>
            From backend systems to dynamic websites, I focus on building clean, scalable, and user-friendly solutions.
          </p>

          <a href="#" class="buy-link-white">View My Projects</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section d-flex align-items-center text-center text-white">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="fw-bold mb-4">Projects preview.</h2>
        <a href="#" class="btn btn-dark rounded-0 px-4 py-1 fw-semibold">
            Contact
        </a>
    </div>
</section>

<!-- About Me -->
<section class="text-button-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3">About Me</h2>

        <p class="mx-auto text-button-text mb-4">
            My focus is on building secure backend systems, structured databases, and responsive frontend interfaces.
        </p>

        <a href="{{ route('about.about') }}" class="btn btn-dark px-4 py-2">
            Read More About Me
        </a>
    </div>
</section>

<!-- Livestream -->
<section class="livestream-section py-5">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="text-white fw-light mb-3">Custom Web Development</h2>
        <p class="text-secondary"><i>Modern, scalable, and built for real users. </i></p>
        <ul>
            <li class="text-secondary">Laravel-powered systems</li>
            <li class="text-secondary">Fully responsive across all devices</li>
            <li class="text-secondary">Flexible UI/UX (your design or mine)</li>
            <li class="text-secondary">CMS-enabled for full control</li>
        </ul>
        <a href="#" class="btn btn-light px-4 py-2">
            GitHub
        </a>
    </div>
</section>
<script>
window.addEventListener('scroll', function(){
    const section = document.querySelector('.cta-section');
    let offset = window.scrollY;
    section.style.backgroundPosition = `center ${offset * 0.3}px`;
});
</script>



@endsection