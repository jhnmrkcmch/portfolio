<nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm">
    @yield('navbar')
    <div class="container">
<!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Rock City Logo">
        </a>

<!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<!-- Menu Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
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
                        <li><a class="dropdown-item" href="{{ route('about.location') }}">Location & Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.about') }}">About</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.vision') }}">Vision</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.beliefs') }}">Beliefs</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.pastors') }}">Pastors</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.team') }}">Team</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.contact') }}">Contact</a></li>
                    </ul>
                </li>
<!-- Ministries -->
                <li class="nav-item dropdown {{ request()->routeIs('ministries*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('ministries.viewall') }}"
                       role="button">
                        Ministries
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('ministries.children') }}">Children</a></li>
                        <li><a class="dropdown-item" href="{{ route('ministries.youth') }}">Youth</a></li>
                        <li><a class="dropdown-item" href="{{ route('ministries.youngadults') }}">Young Adults</a></li>
                        <li><a class="dropdown-item" href="{{ route('ministries.mensministry') }}">Men's Ministry</a></li>
                        <li><a class="dropdown-item" href="{{ route('ministries.womensministry') }}">Women Ministry</a></li>
                        <li><a class="dropdown-item" href="{{ route('ministries.smallgroups') }}">Small Groups</a></li>
                        <li><a class="dropdown-item" href="{{ route('ministries.viewall') }}">View All</a></li>
                    </ul>
                </li>
<!-- New Here -->
                <li class="nav-item dropdown {{ request()->routeIs('newhere*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('newhere.becomeamember') }}"
                       role="button">
                        New Here?
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('newhere.planavisit') }}">Plan A Visit</a></li>
                        <li><a class="dropdown-item" href="{{ route('newhere.becomeamember') }}">Become a Member</a></li>
                        <li><a class="dropdown-item" href="{{ route('newhere.culture') }}">Culture 101</a></li>
                    </ul>
                </li>
<!-- Events -->
                <li class="nav-item">
                    <a href="{{ route('events') }}"
                       class="nav-link {{ request()->routeIs('events') ? 'active' : '' }}">
                        Events
                    </a>
                </li>
<!-- Education -->
                <li class="nav-item dropdown {{ request()->routeIs('education*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('education.saltlight') }}"
                       role="button">
                        Education
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('education.littlewonders') }}">Little Wonders<br>(Children 12 months<br>- 4 years)</a></li>
                        <li><a class="dropdown-item" href="{{ route('education.saltlight') }}">Salt + Light Co-Op<br>(Kindergarten - 8th<br>grade)</a></li>
                        <li><a class="dropdown-item" href="{{ route('education.schoolofministry') }}">School of Ministry <br> (Adults 18+ years old)</a></li>
                    </ul>
                </li>
<!-- Media -->
                <li class="nav-item dropdown {{ request()->routeIs('media*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('media.media') }}"
                       role="button">
                        Media
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('media.watchlive') }}">Watch Live</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.prevmessages') }}">Previous Messages</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.audiopodcasts') }}">Audio Podcast</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.media') }}">Media</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.sermonblogs') }}">Sermon Blogs & <br> Creative Writings</a></li>
                    </ul>
                </li>
<!-- Social Media -->
                <li class="nav-item dropdown {{ request()->routeIs('socialmedia*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                       href="{{ route('socialmedia') }}"
                       role="button">
                        Social Media
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.facebook.com/LCCAlabang" target="_blank">Facebook</a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com/lccalabang/?hl=en" target="_blank">Instagram</a></li>
                        <li><a class="dropdown-item" href="https://www.youtube.com/c/LighthouseChristianCommunity" target="_blank">Youtube</a></li>
                        <li><a class="dropdown-item" href="https://www.tiktok.com/@lighthouseyyc" target="_blank">TikTok</a></li>
                        <li><a class="dropdown-item" href="https://podcasts.apple.com/lu/podcast/lighthouse-christian-community-alabang/id1502555970" target="_blank">Apple Podcasts</a></li>
                        <li><a class="dropdown-item" href="https://open.spotify.com/show/3xaoFy8aRpw3j1b5viRxEj" target="_blank">Spotify Podcasts</a></li>
                    </ul>
                </li>
<!-- Prayer -->
                <li class="nav-item">
                    <a href="{{ route('prayer') }}"
                       class="nav-link {{ request()->routeIs('prayer') ? 'active' : '' }}">
                        Prayer
                    </a>
                </li>
<!-- Give -->
                <li class="nav-item">
                    <a href="{{ route('give') }}"
                       class="nav-link {{ request()->routeIs('give') ? 'active' : '' }}">
                        Give
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>