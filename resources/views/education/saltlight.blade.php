@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Education')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center" 
    style="background-image: url('{{ asset('images/saltlight-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Salt + Light Co-op
        </h1>
    </div>
</section>

<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-white">Vision</h2>

        <p class="mx-auto text-black-text mb-4">
            The Salt & Light co-op was birthed out of a desire to create a space to teach 
            children to live confident and bold for Christ. We believe the early years are 
            for building a foundation of faith that will help them to be the salt and light 
            of the world, not hidden, but shining God’s love and peace within the world.
        </p>
    </div>
</section>


<section class="text-white-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="fw-light mb-3 text-dark">The Scoop</h2>

        <p class="mx-auto text-white-text mb-4">
            Co-op is open to kids in Kindergarten (5 yrs) through Eighth Grade.
        </p>
        <p class="mx-auto text-white-text mb-4">
            We meet every Friday morning from 8:30 AM to 12:30 PM for our core classes, 
            including assembly and lunch. Then Wednesday afternoons we have elective 
            classes available from 12:00 to 3:00pm.
        </p>
        <p class="mx-auto text-white-text mb-4">
            Our morning Co-op includes History/Geography, Bible, Science, and Creative Writing, 
            depending on the grade. As part of the Friday morning Co-op, students will also enjoy 
            various guest speakers, presentations, and celebrations. Some of our electives 
            (only available for core students) include Drama, Dance, Bible Bee, Public Speaking and STEM.
        </p>
        <p class="mx-auto text-white-text mb-4">
            Throughout the school year we will also have field trips and opportunities for community outreach.
        </p>
        <p class="mx-auto text-white-text mb-4">
            The cost to attend core classes on Fridays is $175/student per semester for elementary and 
            $200 for middle school. The cost for electives on Wednesdays are $100/student per class 
            per semester.
        </p>
        <p class="mx-auto text-white-text mb-4">
            Registration for Salt & Light Co-op is now closed for the 2024–2025 school year. However, 
            if you would like to be placed on our waiting list, please email us using the link below
        </p>
        <a href="#" class="buy-link">
            Email Salt & Light
        </a>
    </div>
</section>

<section class="text-black-section py-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <p class="mx-auto text-black-text mb-4">
            “You are the light of the world. A city that is set on a hill cannot be hidden. 
            Nor do they light a lamp and put it under a basket, but on a lampstand, and it 
            gives light to all who are in the house. Let your light so shine before men, 
            that they may see your good works and glorify your Father in heaven.” <br> <b>
            <a href="" class="text-decoration-none text-white">Matthew 5:14-16</a></b>
        </p>
    </div>
</section>

<section class="elders-section py-5">
    <div class="container">

        <!-- Intro -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-3">Meet our Co-Op Principal</div>
            </div>
        </div>

        <!-- Elders Grid -->
        <div class="row justify-content-center text-center">

            <!-- Elder -->
            <div class="col-md-4 mb-5 d-flex justify-content-center">
                <div class="elder-card text-center">

                    <div class="elder-image-wrapper mx-auto">
                        <img src="{{ asset('images/expect-img.jpg') }}"
                             alt="Pat & Nikki Fossett"
                             class="elder-image img-fluid">
                    </div>

                    <div class="elder-name mt-3">Pat & Nikki Fossett</div>
                    <div class="elder-role">Salt + Light Co-Op Principal</div>

                </div>
            </div>

        </div>

    </div>
</section>
@endsection