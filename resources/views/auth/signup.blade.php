@extends('layouts.layout-2')

@section('title', 'Sign Up')


@section('content')
<section class="auth-wrapper my-5">
    <div class="auth-card">

        <h5 class="text-center mb-4 fw-semibold">SIGN UP TO LCC</h5>

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
        <form action="{{route('signup.post')}}" method="POST">
            @csrf
            <div class="mb-3 position-relative">
                <span class="input-icon">👤</span>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Fullname"
                    required
                >
            </div>

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
                <span class="input-icon">🎂</span>
                <input
                    type="number"
                    class="form-control"
                    name="age"
                    placeholder="Age"
                    min="2"
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

            <div class="mb-4 position-relative">
                <span class="input-icon">🔒</span>
                <input
                    type="password"
                    class="form-control"
                    name="password_confirmation"
                    placeholder="Confirm password"
                    required
                >
            </div>

            <button type="submit" class="btn btn-submit w-100">
                Sign Up
            </button>

        </form>

        <p class="text-center mt-4 small">
            Do you have an account? <span class="fw-semibold"><a href="{{ route('login') }}">sign in here.</a></span>
        </p>

    </div>
</section>
<div class="messages" id="message-div">
    @if($errors->any())
        <div class="msg">
            <img src="{{asset('images/remove.png')}}" id="remove" class="remove">
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    @endif 
</div>

@endsection
