<nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm">
    @yield('navbar')
    <div class="container">
<!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
        </a>

<!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<!-- Menu Items -->
        <div class="collapse navbar-collapse justify-content-evenly" id="navbarNav">
            <ul class="navbar-nav">
<!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('home') }}"
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
<!-- About -->
                <li class="nav-item dropdown {{ request()->routeIs('about*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('about.about') }}"
                       role="button">
                        About
                    </a>

                    <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="{{ route('about.about') }}">About Me</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.location') }}">Projects</a></li>
                    </ul>
                </li>
<!-- Education -->
                <li class="nav-item dropdown {{ request()->routeIs('education*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('education.saltlight') }}"
                       role="button">
                        Education
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('education.littlewonders') }}">Education</a></li>
                        <li><a class="dropdown-item" href="{{ route('education.saltlight') }}">Certificates</a></li>
                        <li><a class="dropdown-item" href="{{ route('education.schoolofministry') }}">Interships</a></li>
                    </ul>
                </li>
<!-- Social Media -->
                <li class="nav-item dropdown {{ request()->routeIs('socialmedia*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('socialmedia') }}"
                       role="button">
                        Platforms
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.facebook.com/LCCAlabang" target="_blank">Facebook</a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com/lccalabang/?hl=en" target="_blank">Gmail</a></li>
                        <li><a class="dropdown-item" href="https://www.youtube.com/c/LighthouseChristianCommunity" target="_blank">Linked In</a></li>
                        <li><a class="dropdown-item" href="https://www.tiktok.com/@lighthouseyyc" target="_blank">GitHub</a></li>
                </li>
            </ul>
        </div>
        <a class="navbar-brand btn btn-light" href="{{ route('login') }}">
            Contact
        </a>
    </div>
</nav>