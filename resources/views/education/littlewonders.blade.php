@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Education')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Little Wonders
        </h1>
    </div>
</section>

<section class="yt-video-section-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7">
        <div class="video-wrapper">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/LyL4hRGUokY"
              title="Small Groups | Ligthouse Christian Community"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">The Vision</h2>

        <p class="mx-auto text-black-text mb-4 text-start">
            Our Mother's Day Out focuses on fostering a love for Jesus, the Father 
            and the Holy Spirit as well as developmental skills - including social, 
            emotional, physical and cognitive.
        </p>
        <p class="mx-auto text-black-text mb-4 text-start">
            They will be with children of their same age, get plenty of time outside, 
            have roles and responsibilities within the classroom and attend Bible 
            Discovery & Wonder Time (Music/Movement, Spanish, Science, Art, Special 
            Visits from Community Helpers and MORE New Experiences).
        </p>
        <p class="mx-auto text-black-text mb-4 text-start">
            We desire every Little Wonder to grow and prosper!
        </p>
    </div>
</section>

<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">The Scoop</h2>

        <p class="mx-auto text-white-text mb-4 text-start">
            Little Wonders is a 2-day a week learning experience for children ages 6 
            months to 4 years old.
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Classes meet Tuesday and Thursday from 9am-2pm.
            August 19, 2025 through May 21, 2026.
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Four classes are currently available:
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Infants - Starting at 6m <br>
            Ones - Starting at 12m <br>
            Twos - Starting at 24m <br>
            Threes - 3 year olds turning 4 <br>
            Fours - 4 year olds turning 5
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Ones - Starting at 12m
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Teacher to Child Ratio:
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Infants: 2:6 <br>
            Ones - 2:8 children <br>
            Twos - 2:12 children <br>
            Threes - 2:14 children <br>
            Fours - 2:14 children
        </p>
        <p class="mx-auto text-white-text mb-4 text-start">
            Please contact us for more information.
        </p>
    </div>
</section>

<section class="text-button-section py-4">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">Registration</h2>

        <p class="mx-auto text-button-text mb-4 text-start">
            Program Fees:
        </p>
        
        <p class="mx-auto text-button-text mb-4 text-start">
            Registration Fee: $100 (per year) <br>
            Supply Fee: $150 (per year) <br>
            Tuition: $175 per month per child (due at the FIRST of the month)
        </p>

        <p class="mx-auto text-button-text mb-4 text-start">
            All registration fees are non-refundable, non-transferable and per child.
        </p>

        <a href="#" class="btn btn-dark px-4 py-2">
            Register Here
        </a>
    </div>
</section>

<section class="text-button-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Get Involved</h2>

        <p class="mx-auto text-button-black-text mb-4">
            If you are interested in becoming a teacher, assistant teacher, or substitute 
            teacher, please email Lauren Haines by clicking the button below
        </p>

        <a href="#" class="btn btn-light px-4 py-2">
            Email Lauren
        </a>
    </div>
</section>
@endsection