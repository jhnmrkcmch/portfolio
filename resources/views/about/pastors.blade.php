@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Pastors')


@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/pastors-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Our Pastors
        </h1>
    </div>
</section>


<section class="pastor-bio-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                <div class="image-arch mx-auto">
                    <img src="{{ asset('images/expect-img.jpg') }}" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h1>Jonathan Aranton</h1>
                <p>
                  David’s testimony reflects the power of God’s redemptive grace to change a person’s life.
                  A true “rags to riches” story, David went from a lifestyle of intense self-gratification
                  to one of genuine passion and care for the well-being of others.
                </p>

                <p class="fst-italic">
                  We invite you to listen to Pastor David’s testimony below...
                </p>

                <p>
                  David has his Associate’s Degree in Public Relations from Miami Dade Community College,
                  and his Bachelor of Arts Degree in Organizational Relations from Oral Roberts University.
                  David and his wife Amber also own two successful coffee shops in Corpus Christi and
                  Port Aransas and have two amazing young children, Cadence and Zion.
                </p>

                <!-- Audio Embed -->
                <div class="audio-wrapper mt-4">
                    <iframe
                        style="border-radius:12px"
                        src="https://open.spotify.com/embed/episode/40wwoDoIW2ZKgXuP8CMTUz"
                        width="100%"
                        height="152"
                        frameborder="0"
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="block-section py-5">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="fw-light mb-3">What to Expect</h2>
                <div class="title-line mb-4"></div>

                <p class="block-text">
                    Lighthouse Christian Community is a full-gospel Spirit-filled church in
                    Corpus Christi Texas that focuses on experiencing God’s
                    love and power in a profound way. It’s His presence and
                    love that changes lives, and that’s what we seek above
                    all else. Spirit-led worship, Wind-driven teaching, and a
                    unified family that loves well is what makes the Lighthouse
                    experience so life impacting. So, expect to feel His love
                    and life the minute you walk through the front doors.
                </p>
            </div>

            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                <div class="image-arch mx-auto">
                    <img src="{{ asset('images/expect-img.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="book-feature-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="book-title mb-4">
          Amber's Children's Book<br>
          <span class="book-subtitle">"The Lost Crown"</span>
        </div>

        <p>
          In our culture, most children are immersed with stories, fairytales,
          and movies that teach “problems can be solved with a wish upon a star,
          a fairy-god mother, or a spell being reversed”. But in real-life, our
          children face real struggles that no magic wand can fix. Whether facing
          the loss of a loved one, a divorce between parents, or a personal tragedy
          that leaves one feeling hopeless and alone, this book was written to help
          children start the path to healing.
        </p>

        <p>
          When disaster strikes her home, Grace the deer loses her crown of beauty.
          She shows us how to look for Jesus when bad things happen, to trust Him
          to make things right again, and to be thankful even in the times that we
          don’t see things getting better just yet.
        </p>

        <a href="#" class="buy-link">
          Buy Now
        </a>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 text-center">
        <img
          src="{{ asset('images/pastors-book-img.jpg') }}"
          alt="The Lost Crown Book"
          class="img-fluid book-image"
        >
      </div>

    </div>
  </div>
</section>


@endsection