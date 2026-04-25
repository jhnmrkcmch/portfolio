@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Watch Live')

@section('content')

<!-- STYLE -->
<style>
    #certificateDisplay {
        transition: opacity 0.3s ease;
        max-height: 100%;
        object-fit: contain;
    }

    .cert-btn.active {
        background-color: #000;
        color: #fff;
    }
</style>
<!-- HERO -->
<section class="landing-page d-flex align-items-center justify-content-center text-center" 
style="background-image: url('{{ asset('images/cert-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Certificates
        </h1>
    </div>
</section>

<!-- MAIN -->
<section class="py-5">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-light">My Certificates</h1>
            <p class="mb-0">A collection of certifications that reflect</p>
            <p>my commitment to continuous learning and improving my technical skills.</p>
        </div>

        <!-- CONTENT -->
        <div class="row g-5">
            <div class="col-lg-4">

                <h6 class="fw-semibold mb-3">
                    Learning & Certifications:
                </h6>
                <hr>

                <div class="d-grid gap-3">

                    <a href="#" class="btn btn-outline-dark text-start cert-btn active"
                       data-img="{{ asset('images/lcc-admin-cards.png') }}">
                        CMS <span class="float-end">&rsaquo;</span>
                    </a>

                    <a href="#" class="btn btn-outline-dark text-start cert-btn"
                       data-img="{{ asset('images/projects-portfolio.png') }}">
                        Responsive Websites <span class="float-end">&rsaquo;</span>
                    </a>

                    <a href="#" class="btn btn-outline-dark text-start cert-btn"
                       data-img="{{ asset('images/lcc-admin-user.png') }}">
                        JavaScript <span class="float-end">&rsaquo;</span>
                    </a>

                    <a href="#" class="btn btn-outline-dark text-start cert-btn"
                       data-img="{{ asset('images/intern-prov10-cert.jpg') }}">
                        Internship <span class="float-end">&rsaquo;</span>
                    </a>

                    <a href="#" class="btn btn-outline-dark text-start cert-btn"
                       data-img="{{ asset('images/projects-mobo.png') }}">
                        Jquery <span class="float-end">&rsaquo;</span>
                    </a>

                </div>

            </div>

            <!-- LEFT: CERTIFICATE DISPLAY -->
            <div class="col-lg-8">

                <p class="small text-muted text-center mb-3">
                    Click a certificate on the left to preview it here
                </p>

                <!-- IMAGE DISPLAY -->
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow d-flex align-items-center justify-content-center bg-light">
                    <img id="certificateDisplay" 
                        src="{{ asset('images/lcc-admin-carousel.png') }}" 
                        class="img-fluid"
                        alt="Certificate">
                </div>

            </div>

            <!-- RIGHT: BUTTONS -->
            
        </div>

    </div>
</section>

<!-- SCRIPT -->
<script>
    const display = document.getElementById('certificateDisplay');

    document.querySelectorAll('.cert-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // Change image
            let imgSrc = this.getAttribute('data-img');
            display.style.opacity = 0;

            setTimeout(() => {
                display.src = imgSrc;
                display.style.opacity = 1;
            }, 150);

            // Active button highlight
            document.querySelectorAll('.cert-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>



@endsection