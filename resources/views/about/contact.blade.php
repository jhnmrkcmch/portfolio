@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Contact Us')


@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/location-bg.jpg') }}');">

    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Contact Us
        </h1>
    </div>
</section>

<section class="contact-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <img 
          src="{{ asset('images/contact-img-1.jpg') }}" 
          alt="Contact Image" 
          class="img-fluid contact-image"
        >
      </div>

      <!-- Content -->
      <div class="col-lg-7">
        <h1 class="contact-title">Contact Us</h1>

        <div class="contact-box">
          <div class="row">

            <!-- Form -->
            <div class="col-md-7">
              <form>
                <div class="form-group mb-4">
                  <label class="contact-label">Full Name</label>
                  <input type="text" class="form-control contact-input">
                </div>

                <div class="form-group mb-4">
                  <label class="contact-label">E-mail</label>
                  <input type="email" class="form-control contact-input">
                </div>

                <div class="form-group mb-4">
                  <label class="contact-label">Message</label>
                  <textarea rows="3" class="form-control contact-input"></textarea>
                </div>

                <button type="submit" class="btn contact-btn">
                  Contact Us
                </button>
              </form>
            </div>

            <!-- Info -->
            <div class="col-md-5 contact-info">
              <div class="mb-4">
                <h6>Contact</h6>
                <p>hi@fashion.com</p>
              </div>

              <div class="mb-4">
                <h6>Based in</h6>
                <p>San Francisco,<br>California</p>
              </div>

              <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection