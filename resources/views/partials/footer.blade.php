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

                <!-- Credits -->
                <!-- Person Created the Website -->
                <h1 style="display: none;">JOHN MARK O. CAMACHO</h1>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center small text-muted">
            © {{ date('Y') }} Lighthouse Christian Community. All rights reserved.
        </div>
    </div>
</footer>