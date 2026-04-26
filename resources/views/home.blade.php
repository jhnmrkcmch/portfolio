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



{{-- <section style="background:#ffffff; min-height:100vh; padding:40px;">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="2000">

        <!-- Main Card -->
        <div class="bg-dark rounded-4 shadow-sm"
             style="width:100%; max-width:1400px; min-height:80vh; padding:60px;">
        
            <div class="visit-grid" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-wrapper mx-auto">
                    <img src="{{ asset('images/profileimage.jpg') }}" class="img-fluid community-image" style="height: 480px; width: 320px;"/>
                </div>
            
                <div class="visit-content">
                    <hr />
                    <p class="mb-2 fs-5 text-light">Hello,</p>
                    <h1 class="fw-bold text-light responsive-title" style="font-size:64px;">
                      I am John Mark.
                    </h1>
                    <h3 class="mb-3 mb-lg-4 text-secondary" style="color:#acacac; font-weight:600;">
                      Web Developer
                    </h3>

                    <p class="text-muted">
                        Specializing in Laravel-based systems, admin dashboards, and content management solutions.
                    </p>
                
                    <br>
                    <a href="{{ asset('johnmarkcamacho-resume.pdf') }}" download><button class="btn btn-custom me-2 mb-2">Download CV</button></a>
                    <button class="btn btn-outline-secondary btn-custom">View My Work</button>

                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="visit">
    <div class="visit-grid" data-aos="fade-up" data-aos-duration="2000">
        <div class="image-wrapper mx-auto">
            <img src="{{ asset('images/profileimage.jpg') }}" class="img-fluid community-image" style="height: 480px; width: 320px;"/>
        </div>

        <div class="visit-content">
            <hr />

            <p class="mb-2 fs-5 text-light">Hello,</p>
            <h1 class="fw-bold text-light responsive-title" style="font-size:64px;">
                I am John Mark.
            </h1>

            <p>
                  Specializing in Laravel-based systems, admin dashboards, and content management solutions.
            </p>

            <p>
                From backend systems to dynamic websites, I focus on building clean, scalable, and user-friendly solutions.
            </p>

            <a href="{{ asset('johnmarkcamacho-resume.pdf') }}" download><button class="btn btn-custom me-2 mb-2">Download CV</button></a>
            
        </div>
    </div>
</section>


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

<!-- CTA -->
<section class="cta-section d-flex align-items-center text-center text-white" style="background-image: url('{{ asset('images/cta-bg.jpg') }}')">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="fw-bold mb-4">Projects preview.</h2>
        <a href="{{ route('projects') }}" class="btn btn-dark rounded-0 px-4 py-1 fw-semibold">
            View My Projects
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