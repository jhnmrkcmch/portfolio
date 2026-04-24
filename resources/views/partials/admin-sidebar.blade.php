<style>
    body {
        overflow-x: hidden;
    }
    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        background: #111827;
        color: #fff;
    }
    .sidebar a {
        color: #cbd5e1;
        text-decoration: none;
        padding: 12px 20px;
        display: block;
        border-radius: 8px;
        margin: 5px 10px;
    }
    .sidebar a:hover,
    .sidebar a.active {
        background: #1f2937;
        color: #fff;
    }
    .sidebar .logo {
        font-size: 20px;
        font-weight: bold;
        padding: 20px;
        text-align: center;
        border-bottom: 1px solid #374151;
    }
    .topbar {
        background: #fff;
        padding: 10px 20px;
        border-bottom: 1px solid #ddd;
    }
</style>


<div class="sidebar">
    <div class="logo">
        <h2 style="margin-bottom: -5px;"><b>{{ auth()->user()->name }}</b></h2>
        <p class=" fs-6 fw-light">{{ auth()->user()->role }}</p>
    </div>
    <a class="navbar-brand" href="{{ route('user.userHome') }}">
        <i class="bi bi-speedometer2"></i> Dashboard
    </a>
    @auth
        @if(auth()->user()->role === 'admin')
            <a class=" {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.users') }}">
                <i class="bi bi-people"></i> Users
            </a>
        @endif
    @endauth
    <a class=" {{ request()->routeIs('admin.cards') ? 'active' : '' }}" href="{{ route('admin.cards', 'type') }}">
        <i class="bi bi-box"></i> Cards
    </a>
    <a class=" {{ request()->routeIs('admin.content') ? 'active' : '' }}" href="{{ route('admin.content') }}">
        <i class="bi bi-images"></i> Carousel Manager
    </a>
    <a href="#">
        <i class="bi bi-bar-chart"></i> Reports
    </a>
    <a href="#">
        <i class="bi bi-gear"></i> Settings
    </a>
    @auth 
    <a href="#" class="text-danger">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link text-danger p-0 m-0">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
    </a>
    @endauth
</div>
