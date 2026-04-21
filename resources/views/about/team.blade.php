@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title','Teams')
@section('content')

<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/beliefs-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Our Team
        </h1>
    </div>
</section>


<section class="elders-section py-5">
  <div class="container">

    <!-- Intro -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <div class="section-title mb-3">Elders</div>

        <p class="section-description">
          What is the role of an elder? Our Elders are those that are seasoned in
          their faith and walk in wisdom and integrity. They are entrusted to give
          spiritual guidance and oversight to the church body as a whole as the
          Lord leads. They aim to hear where the Lord wants to take us as a church
          body as they lean into the Lord through prayer and intercession.
        </p>
      </div>
    </div>

    <!-- Elders Grid -->
    <div class="row text-center">   
      <!-- Elder 1 -->
        @if(isset($cards) && $cards->count())
        <div class="row d-flex justify-content-center">
            @foreach($elders as $card)
                <div class="col-md-4 mb-5">
                    <div class="elder-card">

                        @if(!empty($card->image))
                            <div class="elder-image-wrapper">
                                <img src="{{ asset('storage/' . $card->image) }}" class="elder-image">
                            </div>
                        @endif
                        
                        <div class="elder-name">
                            {{ $card->title ?? 'Default Title' }}
                        </div>

                        <div class="elder-role">
                            {{ $card->description ?? 'Default Description' }}
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
@else
    <p>No cards found</p>
@endif
</section>

<section class="team-section">
    <div class="container">
        <h2 class="text-center mb-5">Team Leaders</h2>
        @if(isset($cards) && $cards->count())
        <div class="row d-flex justify-content-center">
            @foreach($leaders as $card)
                <div class="col-md-4 mb-5">
                    <div class="elder-card">

                        @if(!empty($card->image))
                            <div class="elder-image-wrapper">
                                <img src="{{ asset('storage/' . $card->image) }}" class="elder-image">
                            </div>
                        @endif
                        
                        <div class="elder-name">
                            {{ $card->title ?? 'Default Title' }}
                        </div>

                        <div class="elder-role">
                            {{ $card->description ?? 'Default Description' }}
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        @else
            <p>No cards found</p>
        @endif
    </div>
</section>

@endsection