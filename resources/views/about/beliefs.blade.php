@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)

@section('title', 'Beliefs')


@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
    style="background-image: url('{{ asset('images/beliefs-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Beliefs
        </h1>
    </div>
</section>
<section class="beliefs-section py-5">
    <div class="container">

        <!-- Title -->
        <div class="text-center mb-5">
            <h2 class="beliefs-title">Our Beliefs</h2>
            <a href="#" class="beliefs-download">Download Our Full Statement of Faith</a>
        </div>

        <!-- JESUS -->
        <div class="belief-item mb-5">
            <h3 class="belief-heading">JESUS</h3>
            <p class="belief-text">
                He is God, the Son of God, The Word of God, the Creator, our Bridegroom, our Best Friend,
                the Lover of our Souls, our Savior, our Redeemer, and so much more. Jesus desires to dwell
                in the hearts of all mankind and wants to be actively involved in our daily lives personally.
                There is no one like Him in heaven and on earth, and we are madly in love with Him!
            </p>
        </div>

        <!-- THE FATHER -->
        <div class="belief-item mb-5">
            <h3 class="belief-heading">THE FATHER</h3>
            <p class="belief-text">
                He’s the best dad you’ll ever have! The Father loves us so much that He gave His only
                begotten son to demonstrate His love to the world. He’s the Father we all so desperately
                need, and He also wants to be actively involved in our daily lives personally.
            </p>
        </div>

        <!-- THE HOLY SPIRIT -->
        <div class="belief-item">
            <h3 class="belief-heading">THE HOLY SPIRIT</h3>
            <p class="belief-text">
                We believe that walking in the Spirit and being Spirit-led at all 
                times is key to living a fruitful and successful Christian life. 
                The Holy Spirit helps us, guides us, comforts us, convicts us, and 
                teaches us. The Holy Spirit is the key link to Jesus and the Father, and 
                fully prepares us to become more like Him every day. Through the 
                manifestation of the Holy Spirit in us, we can walk in supernatural 
                power and demonstrate God’s love through signs, wonders, and miracles.
            </p>
        </div>

        <div class="belief-item">
            <h3 class="belief-heading">THE NEW BIRTH</h3>
            <p class="belief-text">
                We fully believe that you must be born again in order to know Jesus and 
                fully experience God’s love and power for us as His sons and daughters. 
                Being born again is the first step to a transformed life and to fully “see” 
                the Kingdom of God activated in your life.
            </p>
        </div>

        <div class="belief-item">
            <h3 class="belief-heading">THE DOCTRINE OF BAPTISMS</h3>
            <p class="belief-text">
                We believe there are two separate baptisms: the baptism of water and the 
                baptism of the Holy Spirit. Though not required for salvation, each 
                baptism serves a unique purpose in transforming and empowering the believer’s life.
            </p>
        </div>

        <div class="belief-item">
            <h3 class="belief-heading">EMPOWERING GIFTS</h3>
            <p class="belief-text">
                Rock City is built on a solid foundation of leadership and vision. The gifts of 
                the Spirit are designed to demonstrate God’s love for His people, and to clearly 
                reflect His nature and care supernaturally. We believe in all of the gifts of 
                the Holy Spirit and that they are as much a part of today as they were thousands of years ago.
            </p>
        </div>

        <div class="belief-item">
            <h3 class="belief-heading">FAMILY AND COMMUNITY</h3>
            <p class="belief-text">
                There are many Biblical narratives used for God’s people and His church. 
                We believe church should reflect what real family looks like, walking in 
                unity, and demonstrating the unique aspects of kingdom community life.
            </p>
        </div>
    </div>
</section>

@endsection