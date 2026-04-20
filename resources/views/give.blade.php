@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Give')


@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Give
        </h1>
    </div>
</section>

<section class="py-5 bg-white my-5">
    <div class="container text-center">

        <!-- Heading -->
        <h2 class="fw-light mb-2 fs-1"><b>Ways To Give</b></h2>
        <p class="mb-5 fs-5">Thank you for supporting our cause!</p>

        <!-- Giving Options -->
        <div class="row justify-content-center gy-5">

            <!-- Cash or Check -->
            <div class="col-md-4">
                <div class="give-icon mb-4">
                    <i class="bi bi-wallet2"></i>
                </div>
                <h6 class="fw-normal mb-3 fs-4">Cash or Check</h6>
                <p class="small fs-6">
                    Make checks Payable to<br>
                    Rock City Church
                </p>
            </div>

            <!-- Give Online -->
            <div class="col-md-4">
                <div class="give-icon mb-4">
                    <i class="bi bi-credit-card"></i>
                </div>
                <h6 class="fw-normal mb-3 fs-4">Give Online</h6>
                <p class="small fs-6">
                    Use your smartphone or<br>
                    computer to donate to<br>
                    Rock City Church
                </p>
                <a href="#" class="give-link">Give Online</a>
            </div>

            <!-- Cash App -->
            <div class="col-md-4">
                <div class="give-icon mb-4">
                    <i class="bi bi-phone"></i>
                </div>
                <h6 class="fw-normal mb-3 fs-4">Cash App</h6>
                <p class="small mb-2 fs-6">Donate using CashApp</p>
                <span class="give-link">$RockCityCorpus</span>
            </div>

        </div>
    </div>
</section>

<section class="landing-page d-flex justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative text-light col-12 col-md-6 col-lg-6 text-start" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold fs-2 mt-5 text-center">
            The Heart Behind Giving
        </h1>
        <p>Rock City Church believes giving is another form of worship unto the Lord.</p>
        <p>Generous giving is a Kingdom Principle that the Lord established Himself long 
            ago that has a promised blessing that we cannot contain attached to it as we 
            are faithful to give back to the Lord a portion of what he has given to us.
        </p>
        <p>There is one place in scripture that the Lord tells us to test Him — our finances.</p>
        <p>
            In Malachi 3:10 The Lord says, "Bring the whole tithe into the storehouse, that there 
            may be food in my house. Test me in this," says the LORD Almighty, "and see if I will 
            not throw open the floodgates of heaven and pour out so much blessing that you will 
            not have room enough for it."
        </p>
        <p>What happens when were generous givers?</p>
        <p>"Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows 
            generously will also reap generously. Each of you should give what you have decided
            in your heart to give, not reluctantly or under compulsion, for God loves a cheerful 
            giver. And God is able to bless you abundantly, so that in all things at all times, 
            having all that you need, you will abound in every good work."
        </p>
    </div>
</section>
@endsection