@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Messages')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Messages
        </h1>
    </div>
</section>

<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-5 text-dark"><b>Watch The Latest Messages</b></h2>

        <p class="mx-auto text-white-text mt-4">
            This is a premium feature. Please upgrade to unlock this feature.
        </p>
    </div>
</section>

@endsection