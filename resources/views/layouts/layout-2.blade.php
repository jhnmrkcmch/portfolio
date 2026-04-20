<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Lighthouse Christian Community</title>
    <link rel="icon" href="{{ asset('images/toplogo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/layout.js'])
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Rock City Church" height="42">
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav align-items-center gap-lg-4">
                <li class="nav-item"><a class="nav-link" href="{{ route('give') }}">Give</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('events') }}">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Check-In</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('ministries.viewall') }}">Groups</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about.about') }}">About</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.contact') }}">Contact</a></li>
                    </ul>
                </li>

                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                @endguest

                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link btn btn-link" type="submit">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
                
            </ul>
        </div>

    </div>
</nav>

    <div class="content">
        @yield('content')
    </div>

<footer class="bg-black text-white pt-5 pb-3">
    <div class="container">
        <div class="row">

            <!-- Logo / About -->
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="50" height="50" class="rounded-circle me-2">
                    <h5 class="mb-0 fw-semibold">Lighthouse</h5>
                </div>
                <p class="text-muted small">
                    Be part of this meaningful season with us. Don’t miss the services!.
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-2 mb-4">
                <h6 class="fw-semibold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-muted text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about.about') }}" class="text-muted text-decoration-none">About</a></li>
                    <li><a href="{{ route('about.location') }}" class="text-muted text-decoration-none">Services</a></li>
                    <li><a href="{{ route('about.contact') }}" class="text-muted text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-semibold">Support</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-muted text-decoration-none">Help Center</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-semibold">Follow Us</h6>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/LCCAlabang" target="_blank" rel="noopener noreferrer" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/lccalabang/?hl=en" target="_blank" rel="noopener noreferrer" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                    <a href="https://x.com/LCCAlabang" target="_blank" rel="noopener noreferrer" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center small text-muted">
            © {{ date('Y') }} Lighthouse Christian Community. All rights reserved.
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</body>
</html>