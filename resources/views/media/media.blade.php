@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Media')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Media
        </h1>
    </div>
</section>


<section class="py-5">
    <div class="container">

        <!-- Section Title -->
        <h2 class="text-center fw-light mb-5">Read</h2>

        <!-- Cards -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/media-img-1.jpg') }}" class="img-fluid rounded mb-3" alt="It's Always been His Call">

                        <h5 class="fw-normal">It’s Always been His Call</h5>
                        <p class="small text-muted">
                            The true meaning of calling in the Christian faith is often misunderstood and deserves
                            careful exploration. Many mistakenly believe that…
                        </p>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/media-img-2.jpg') }}" class="img-fluid rounded mb-3" alt="The Purpose of Favor">
    
                        <h5 class="fw-normal">The Purpose of Favor</h5>
                        <p class="small text-muted">
                            In our journey of faith, recognizing and understanding the “Favor of the Lord” is
                            crucial for living not only a fulfilling life…
                        </p>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/media-img-3.jpg') }}" class="img-fluid rounded mb-3" alt="Defining Favor">

                        <h5 class="fw-normal">Defining Favor</h5>
                        <p class="small text-muted">
                            In the journey of faith, understanding the “Favor of the Lord” is essential to living
                            a fulfilling life. This blog explores the…
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