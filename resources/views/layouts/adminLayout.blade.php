<!DOCTYPE html>
<html lang="en">
<head>
@php
    $showSidebar = request()->is('admin*');
@endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Admin</title>
    <link rel="icon" href="{{ asset('images/toplogo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/layout.js'])


    <style>
.admin-wrapper {
    display: flex;
}

/* Sidebar */
.admin-sidebar {
    width: 250px;
    min-height: 100vh;
    background: #111827;
    position: fixed;
    top: 0;
    left: 0;
    transition: all 0.3s ease;
    z-index: 1050;
}

/* Main content */
.admin-main {
    margin-left: 250px;
    padding: 20px;
    width: 100%;
    min-height: 100vh;
    background: #f3f4f6;
    transition: all 0.3s ease;
}

/* 🔥 Mobile view */
@media (max-width: 768px) {
    .admin-sidebar {
        left: -250px; /* hide sidebar */
    }

    .admin-sidebar.active {
        left: 0; /* show sidebar */
    }

    .admin-main {
        margin-left: 0;
    }
}

/* Optional overlay */
.sidebar-overlay {
    display: none;
}

.sidebar-overlay.active {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1040;
}
.no-sidebar .admin-main {
    margin-left: 0;
}
    </style>
</head>
<body class="{{ !$showSidebar ? 'no-sidebar' : '' }}">


@include('partials.admin-navbar')

<div class="admin-wrapper">
    @if($showSidebar)
        @include('partials.admin-sidebar')
    @endif

    <main class="admin-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card p-4">
                        @if (!View::hasSection('hideMainNavbar'))
                            @include('partials.main-navbar')
                        @endif
                        
                    
                        @yield('content')

                        @if (!View::hasSection('hideFooter'))
                            @include('partials.footer')
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>