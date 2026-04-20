@extends('layouts.layout-2')

@section('title', 'Plan a Visit')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Title -->
                <h2 class="fw-semibold mb-2">Connect Card</h2>

                <p class="text-muted mb-4">
                    Thank you for taking the time to fill this out. This allows us to know you a little more,
                    and will help us serve you better. Have children? Register them today and save time at
                    check-in all in one simple form. Please visit the "Connect Station" at the beginning or
                    end of service to receive a gift that we have for you as well.
                </p>

                <!-- FORM -->
                <form>

                    <!-- Name -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Your name <span class="text-danger">*</span>
                        </label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Email address <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" placeholder="name@example.com">
                    </div>

                    <!-- Phone -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Phone number <span class="text-danger">*</span>
                        </label>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Mobile</option>
                                    <option>Home</option>
                                    <option>Work</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <input type="tel" class="form-control" placeholder="(555) 555-5555">
                            </div>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Gender</label>
                        <select class="form-select">
                            <option selected>Select one</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-dark px-5">
                        Submit
                    </button>

                </form>

            </div>
        </div>
    </div>
</section>


@endsection