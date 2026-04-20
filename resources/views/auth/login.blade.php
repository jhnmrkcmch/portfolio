@extends('layouts.layout-2')

@section('title', 'Log In')


@section('content')
<section class="auth-wrapper my-2">
    <div class="auth-card">

        <h5 class="text-center mb-4 fw-semibold">SIGN IN TO LCC</h5>

        <!-- Social Login -->
        <div class="d-grid gap-2 mb-3">
            <button type="button" class="btn btn-primary social-btn google">
                Continue with Google
            </button>
            <button type="button" class="btn btn-primary social-btn facebook">
                Continue with Facebook
            </button>
        </div>

        <p class="text-center text-muted mb-3">or</p>

        <!-- Form -->
        <form action="{{route('login.post')}}" method="POST">
            @csrf

            <div class="mb-3 position-relative">
                <span class="input-icon">✉️</span>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Email"
                    required
                >
            </div>

            <div class="mb-3 position-relative">
                <span class="input-icon">🔒</span>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Password"
                    required
                >
            </div>

            <button type="submit" class="btn btn-submit w-100">
                Sign In
            </button>

        </form>

        <p class="text-center mt-4 small">
            Don't have an account? <span class="fw-semibold"><a href="{{ route('signup') }}">sign up here.</a></span>
        </p>

        <div class="messages" id="message-div">
            @if(session('error'))
                <div class="msg error">
                    <img src="{{ asset('images/remove.png') }}" id="remove" class="remove">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="msg success">
                    <img src="{{ asset('images/remove.png') }}" id="remove" class="remove">
                    {{ session('success') }}
                </div>
            @endif
            
            @if($errors->any())
                <div class="msg">
                    <img src="{{ asset('images/remove.png') }}" id="remove" class="remove">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    </div>
</section>

<!-- 
<button id="login-show">showwasdasd</button> -->
@endsection