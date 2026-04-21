<footer class="bg-black text-white pt-5 pb-3">
    <div class="container">
        <div class="row">

            <!-- Logo / About -->
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logo-circle.png') }}" alt="Logo" width="50" height="50" class="rounded-circle me-2">
                    <h5 class="mb-0 fw-semibold">John Mark Camacho</h5>
                </div>
                <p class="text-muted small">
                    Turning ideas into responsive, high-performing <br>web experiences.
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-2 mb-4">
                <h6 class="fw-semibold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-muted text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about.about') }}" class="text-muted text-decoration-none">About</a></li>
                    <li><a href="{{ route('about.location') }}" class="text-muted text-decoration-none">Projects</a></li>
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
                <h6 class="fw-semibold">Connect</h6>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/daikiof2002" target="_blank" rel="noopener noreferrer" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/john-mark-camacho-bb9a59322/" target="_blank" rel="noopener noreferrer" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/jhnmrkcmch" target="_blank" rel="noopener noreferrer" class="text-white fs-5"><i class="bi bi-github"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center small text-muted">
            © {{ date('Y') }} All rights reserved.
        </div>
    </div>
</footer>