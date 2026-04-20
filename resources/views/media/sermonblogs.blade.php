@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Blogs')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Blogs
        </h1>
        <p class="text-light fs-3">Sermon Blogs & Creative Writings</p>
    </div>
</section>


<section class="book-feature-section-dark py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Text Column -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-light">
                <div class="book-title mb-4 text-light">
                    Amber's Children's Book<br>
                    <span class="book-subtitle">"The Lost Crown"</span>
                    <div class="title-line-light mb-4"></div>
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


<section class="py-5">
    <div class="container">

        <!-- Section Title -->
        <h2 class="text-center fw-light mb-5">Latest Messages</h2>

        <!-- Content Row -->
        <div class="row align-items-center justify-content-center">

            <!-- Image -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <a href="/blog/its-always-been-his-call"
                   class="d-block text-decoration-none">

                    <img src="{{ asset('images/media-img-1.jpg') }}"
                         class="img-fluid rounded w-100"
                         alt="It’s Always been His Call">
                </a>
            </div>

            <!-- Text Content -->
            <div class="col-lg-5">
                <a href="/blog/its-always-been-his-call"
                   class="text-decoration-none text-dark">

                    <h4 class="fw-normal mb-3">
                        It’s Always been His Call
                    </h4>

                    <p class="text-muted small">
                        The true meaning of calling in the Christian faith is often
                        misunderstood and deserves careful exploration. Many
                        mistakenly believe that…
                    </p>

                </a>
            </div>

        </div>

    </div>
</section>


<section class="py-5">
    <div class="container">
        <!-- Cards -->
        <div class="row g-5 justify-content-center">

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

    </div>
</section>





<section class="py-5 bg-dark">
    <div class="container">

        <!-- Section Title -->
        <h2 class="text-center fw-light mb-5 text-light">Devotional Blogs & Creative Writings</h2>

        <!-- Content Row -->
        <div class="row align-items-center justify-content-center">

            <!-- Image -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <a href="/blog/its-always-been-his-call"
                   class="d-block text-decoration-none">

                    <img src="{{ asset('images/media-img-1.jpg') }}"
                         class="img-fluid rounded w-100"
                         alt="It’s Always been His Call">
                </a>
            </div>

            <!-- Text Content -->
            <div class="col-lg-5">
                <a href="/blog/its-always-been-his-call"
                   class="text-decoration-none text-dark">

                    <h4 class="fw-normal mb-3 text-light">
                        It’s Always been His Call
                    </h4>

                    <p class="text-light small">
                        The true meaning of calling in the Christian faith is often
                        misunderstood and deserves careful exploration. Many
                        mistakenly believe that…
                    </p>

                </a>
            </div>

        </div>

    </div>
</section>


<section class="py-5 bg-dark">
    <div class="container">
        <!-- Cards -->
         
        <div class="row g-5 justify-content-center">

            <!-- Card 1 -->
            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-light d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-light">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>


<section class="py-5">
    <div class="container">
        <!-- Cards -->
        <div class="row g-5 mb-5 justify-content-center">
            <h2 class="text-center fw-light mb-5 text-dark">Archive</h2>

            <!-- Card 1 -->
            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- Card 2 -->
            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- Card 2 -->
            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- Card 2 -->
            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- Card 2 -->
            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach ($cards as $card)
            <div class="col-md-6 col-lg-4">
                <a href="/post/its-always-been-his-call"
                class="text-decoration-none text-dark d-block h-100">
                    <div class="h-100">
                        <img src="{{ asset('images/' . $card['image']) }}" class="img-fluid rounded mb-3" alt="{{ $card['title'] }}">
                        <h5 class="fw-normal">{{ $card['title'] }}</h5>
                        <p class="small text-muted">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

    </div>
</section>

@endsection