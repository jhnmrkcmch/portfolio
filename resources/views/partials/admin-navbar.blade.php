<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top" style="z-index:1050;">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('home') }}">
            Lighthouse Christian Community
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        @auth
            @if(in_array(auth()->user()->role, ['admin', 'editor']))
                <div class="collapse navbar-collapse" id="adminNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                        @if(auth()->user()->role === 'admin')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}"
                                   href="{{ route('admin.users') }}">
                                    Users
                                </a>
                            </li>
                        @endif
                    
                        @if(auth()->user()->role === 'editor')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.content') ? 'active' : '' }}"
                                   href="{{ route('admin.content') }}">
                                    Content
                                </a>
                            </li>
                        @endif
                        
                    </ul>
                </div>
            @endif
        @endauth
</nav>