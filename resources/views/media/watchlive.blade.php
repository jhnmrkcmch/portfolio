@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Watch Live')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center" 
style="background-image: url('{{ asset('images/schoolofministry-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Watch Live
        </h1>
    </div>
</section>


<section class="py-5">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-light">Livestream</h1>
            <p class="mb-0">Sunday’s 9:00 am & 11:00 am</p>
            <p>The First Wednesday of the Month 7:00 pm</p>
        </div>

        <!-- CONTENT -->
        <div class="row g-5">

            <!-- VIDEO COLUMN -->
            <div class="col-lg-8">

                <p class="small text-muted text-center mb-3">
                    Scheduling is a Premium & Ultimate feature. Please update to unlock this feature
                </p>

                <!-- Video Embed -->
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                    <iframe 
                        src="https://www.youtube.com/embed/AdrBIkrR8mA"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4">

                <h6 class="fw-semibold mb-3">
                    Welcome to the livestream!
                </h6>
                <hr>

                <div class="d-grid gap-3">
                    <a href="#" class="btn btn-outline-dark text-start">
                        New Here? <span class="float-end">&rsaquo;</span>
                    </a>
                    <a href="#" class="btn btn-outline-dark text-start">
                        Need Prayer? <span class="float-end">&rsaquo;</span>
                    </a>
                    <a href="#" class="btn btn-outline-dark text-start">
                        Online Giving <span class="float-end">&rsaquo;</span>
                    </a>
                    <a href="#" class="btn btn-outline-dark text-start">
                        View All Messages <span class="float-end">&rsaquo;</span>
                    </a>
                    <a href="#" class="btn btn-outline-dark text-start">
                        Live Chat <span class="float-end">&rsaquo;</span>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection