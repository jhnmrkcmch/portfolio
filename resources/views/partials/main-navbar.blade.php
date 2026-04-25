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
                        <li><a class="dropdown-item" href="{{ route('about.about') . '#skills' }}">Skills / What I Do</a></li>
                    </ul>
                </li>
                
<!-- projects -->
                <li class="nav-item">
                    <a href="{{ route('projects') }}"
                        class="nav-link {{ request()->routeIs('projects*') ? 'active' : '' }}">
                        Projects
                    </a>                  
                </li>
<!-- background -->
                <li class="nav-item dropdown {{ request()->routeIs('background*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('background.education') }}"
                       role="button">
                        Background
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('background.education') }}">Education</a></li>
                        <li><a class="dropdown-item" href="{{ route('background.certificates') }}">Certificates</a></li>
                        <li><a class="dropdown-item" href="{{ route('background.internships') }}">Interships</a></li>
                    </ul>
                </li>
<!-- Social Media -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        Contact
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.linkedin.com/in/john-mark-camacho-bb9a59322/" target="_blank">Linked In</a></li>
                        <li><a class="dropdown-item" href="https://github.com/jhnmrkcmch" target="_blank">GitHub</a></li>
                </li>
            </ul>
        </div>
    </div>
</nav>