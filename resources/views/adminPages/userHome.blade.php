@php
    $layout = (auth()->check() && auth()->user()->role === 'admin' || auth()->user()->role === 'editor') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp
@extends($layout)

@section('title', 'Profile')

@section('hideMainNavbar', true)
@section('hideFooter', true)



@section('content')

<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow" style="width: 20rem;">
        <div class="card-body text-center">
            
            {{-- Name --}}
            <h4 class="card-title">{{ $user->name }}</h4>

            <p class=" fs-6 fw-light" style="margin-top: -5px">{{ auth()->user()->role }}</p>

            {{-- Email --}}
            <p class="text-muted">{{ $user->email }}</p>

        </div>
    </div>
</div>


@endsection
