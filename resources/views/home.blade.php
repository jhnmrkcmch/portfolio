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
<!-- Banner -->
<div class="container my-5">
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

</div>

<!-- Block 1 -->
<section class="section-block-1">
    <div class="container mt-5 py-5 custom-block-1" data-aos="fade-up" data-aos-duration="2000">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2 class="fw-bold display-6">Core Values</h2>
                <p class="lead">
                  Lighthouse Church is on a mission to advance the kingdom of God by transforming both the natural and spiritual climates of our city, region, and the nations of the world. Corpus Christi translates to “Body of Christ” and it is our desire to see our city live up to its namesake.
                </p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <p class="fs-4">
                    Reflect Christ
                    Equip the family
                    Advance the Kingdom
                    Love our community
                </p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <p class="fst-italic fs-5">Lighthouse Christian Community</p>
            </div>
        </div>
    </div>
</section>

<!-- Visit -->
<section class="visit">
    <div class="visit-grid" data-aos="fade-up" data-aos-duration="2000">
        <div class="visit-image">
          <img src="{{ asset('images/visit.png') }}" />
        </div>

        <div class="visit-content">
          <hr />

          <h2>Visit Us Sundays<br />and Wednesdays</h2>

          <p class="times">
           Join our Worship Services every Sunday at 9.30AM, and 2.00PM
          </p>

          <p class="address">
            10309 SPID, Corpus Christi, TX
          </p>

          <a href="#" class="learn-more">Learn More</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section d-flex align-items-center text-center text-white">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="fw-bold mb-4">I'm New.</h2>
        <a href="#" class="btn btn-dark rounded-0 px-4 py-1 fw-semibold">
            Get Started
        </a>
    </div>
</section>

<!-- Community -->
<section class="community-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="display-5 fw-light text-white mb-3">
            Find Your Community
        </h1>
        <p class="text-secondary mx-auto mb-4 community-text">
            It's our heart that you stay connected with other members at the church.
            This allows for you to be in community and do life with amazing people.
            Not only are there great things happening in these groups, but great
            friendships are also made here. Send a request to join a small group today!
        </p>
        <a href="#" class="btn btn-light px-4 py-2 mb-5">
            Learn More
        </a>
        <div class="image-wrapper mx-auto">
            <img src="{{ asset('images/community-img.jpg') }}" alt="Community" class="img-fluid community-image">
        </div>
    </div>
</section>

<!-- Ways To Give -->
<section class="text-button-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3">Ways To Give</h2>

        <p class="mx-auto text-button-text mb-4">
            Lighthouse christian community believes giving is worshipping
            the Lord and giving back a portion of what He has
            given us.
        </p>

        <a href="#" class="btn btn-dark px-4 py-2">
            Give Now
        </a>
    </div>
</section>

<!-- Livestream -->
<section class="livestream-section py-5">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="text-white fw-light mb-3">Livestream</h2>

        <p class="text-secondary mb-4">
            Sundays 9:00 am & 11:00 am & The First<br>
            Wednesday of the Month at 7:00 pm
        </p>

        <a href="#" class="btn btn-light px-4 py-2">
            Watch Live
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