@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('assets/video/background-video.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="content">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <div class="col-md-6">
                        <h1 class="f-36 pb-3 fw-bold text-uppercase text-white f-md-27">Experience bali
                            bike never before with our e-bike rentals and tours</h1>
                        <div>
                            <a href=""
                                class="btn b-green text-white px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins">BOOK
                                NOW</a>
                            <a href=""
                                class="btn btn-light px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins">E-BIKE
                                TOUR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="b-main-color">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 pb-md-0 pb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </div>
                    <div class="col-md-6 text-white">
                        <h2 class="text-uppercase f-20 fw-bold">
                            welcome
                            to unikat, your e-bike
                            tours and rentals
                            specialist in bali</h2>
                        <p>Our convenient and sustainable e-bikes offer you a way to explore the island easily and
                            eco-friendly
                        </p>
                        <a href=""
                            class="btn btn-light px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins l-space-1 f-poppins">ABOUT
                            UNIKAT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="text-center col-md-6 mx-auto">
                    <h2 class="text-uppercase f-20 fw-bold pb-2">5 reasons why you should ride with unikat</h2>
                    <p>Exploring Bali can be challenging, but at UNIKAT, we can discover Bali's beauty in a new way with
                        e-bikes.
                        Let us show you a new perspective.</p>
                </div>
                <div class="owl-carousel owl-theme slider-default">
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-1.png') }}" alt="">
                            <div class="px-3 px-md-5 py-4 text-center h-100">
                                <h3 class="f-16 fw-bold text-capitalize f-roboto fst-italic">travel sustainably</h3>
                                <p>E-bikes are the perfect way to reduce your carbon footprint and promote
                                    a greener future.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-2.png') }}" alt="">
                            <div class="px-3 px-md-5 py-4 text-center h-100">
                                <h3 class="f-16 fw-bold text-capitalize f-roboto fst-italic">goodbye traffic</h3>
                                <p>E-bikes make it easy to navigate busy streets and narrow roads,
                                    reducing travel time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-3.png') }}" alt="">
                            <div class="px-3 px-md-5 py-4 text-center h-100">
                                <h3 class="f-16 fw-bold text-capitalize f-roboto fst-italic">Easy and simple</h3>
                                <p>UNIKAT makes e-bike tours and rentals easy. Just call us and tell us what you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-1.png') }}" alt="">
                            <div class="px-3 px-md-5 py-4 text-center h-100">
                                <h3 class="f-16 fw-bold text-capitalize f-roboto fst-italic">travel sustainably</h3>
                                <p>E-bikes are the perfect way to reduce your carbon footprint and promote
                                    a greener future.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-2.png') }}" alt="">
                            <div class="px-3 px-md-5 py-4 text-center h-100">
                                <h3 class="f-16 fw-bold text-capitalize f-roboto fst-italic">goodbye traffic</h3>
                                <p>E-bikes make it easy to navigate busy streets and narrow roads,
                                    reducing travel time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-3.png') }}" alt="">
                            <div class="px-3 px-md-5 py-4 text-center h-100">
                                <h3 class="f-16 fw-bold text-capitalize f-roboto fst-italic">Easy and simple</h3>
                                <p>UNIKAT makes e-bike tours and rentals easy. Just call us and tell us what you need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-t-150 pb-5 p-md-t-50">
                <div class="row g-5 align-items-center">
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme slider-one">
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-1.png') }}" alt="">
                                    <h3 class="position-absolute fw-bold text-uppercase m-0 text-white"
                                        style="top:55%; left:50%; transform: translate(-50%,-50%);">Uluwatu</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-2.png') }}" alt="">
                                    <h3 class="position-absolute fw-bold text-uppercase m-0 text-white"
                                        style="top:55%; left:50%; transform: translate(-50%,-50%);">Ubud</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-3.png') }}" alt="">
                                    <h3 class="position-absolute fw-bold text-uppercase m-0 text-white"
                                        style="top:55%; left:50%; transform: translate(-50%,-50%);">Seminyak</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-4.png') }}" alt="">
                                    <h3 class="position-absolute fw-bold text-uppercase m-0 text-white"
                                        style="top:55%; left:50%; transform: translate(-50%,-50%);">Nusa Lembongan</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-5.png') }}" alt="">
                                    <h3 class="position-absolute fw-bold text-uppercase m-0 text-white"
                                        style="top:55%; left:50%; transform: translate(-50%,-50%);">Jimbaran</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="f-20 fw-bold text-uppercase">Unikat </br> e-bike tour</h2>
                        <p>Discover Bali's stunning landscapes, beautiful beaches, and cultural sites
                            while enjoying the freedom and fun
                            of an eco-friendly ride. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="fw-bold text-uppercase f-20">WHy tour with </br> unikat</h2>
                    </div>
                    <div class="col-md-7">
                        <ul class="list-program">
                            <li>
                                <b class="f-16">flexible program</b>
                                <p>Choose your destinations, activities, hours and pick-up point, it's up to you.</p>
                            </li>
                            <li>
                                <b class="f-16">personalized tour with add-ons</b>
                                <p>We offer a range of add-ons to make your e-bike tour in Bali suitable for your needs.</p>
                            </li>
                            <li>
                                <b class="f-16">safety as a priority</b>
                                <p>Our e-bikes are maintained and our road captains are trained to ensure a safe ride.</p>
                            </li>
                            <li>
                                <b class="f-16">fun and new experience</b>
                                <p>Our tour will take you off-the-beaten-path to discover Bali's authentic beauty.</p>
                            </li>
                            <li>
                                <b class="f-16">Easy to Get</b>
                                <p>You can choose to pick up the bikes from our hotel partners or have them delivered.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="col-md-10 mx-auto p-b-150 p-md-b-50">
                <h2 class="fw-bold text-uppercase h4 text-center pb-4">unikat e-bike tour price list</h2>
                <div class="owl-carousel owl-theme slider-default">
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase f-20">Short e-bike Tour</h3>
                                <ul>
                                    <li>2.5-hours of Bali e-bike tour include 2-hours ride, break time, and activities.</li>
                                    <li>Only 1 destination area in Bali.</li>
                                    <li>With professional road captain.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0 f-16 text-center">49 USD or IDR
                                    700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase f-20">Long e-bike tour</h3>
                                <ul>
                                    <li>6-hours of Bali e-bike tour include 4-hours ride, break time, and activities.</li>
                                    <li>3 destinations in 1 area in Bali.</li>
                                    <li>With professional road captain.</li>
                                    <li>Curated restaurant visit.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0 f-16 text-center">49 USD or IDR
                                    700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase f-20">fullday vw combi e-bike tour</h3>
                                <ul>
                                    <li>10-hours of Bali e-bike tour include 5-hours ride, break time, and activities.</li>
                                    <li>Up to 3 destinations area in Bali.</li>
                                    <li>With professional road captain.</li>
                                    <li>Curated restaurant visit.</li>
                                    <li>Travel in style and comfort with VW Combi 1981.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0 f-16 text-center">49 USD or IDR
                                    700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase f-20">Short e-bike Tour</h3>
                                <ul>
                                    <li>2.5-hours of Bali e-bike tour include 2-hours ride, break time, and activities.</li>
                                    <li>Only 1 destination area in Bali.</li>
                                    <li>With professional road captain.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0 f-16 text-center">49 USD or IDR
                                    700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase f-20">Long e-bike tour</h3>
                                <ul>
                                    <li>6-hours of Bali e-bike tour include 4-hours ride, break time, and activities.</li>
                                    <li>3 destinations in 1 area in Bali.</li>
                                    <li>With professional road captain.</li>
                                    <li>Curated restaurant visit.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0 f-16 text-center">49 USD or IDR
                                    700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase f-20">fullday vw combi e-bike tour</h3>
                                <ul>
                                    <li>10-hours of Bali e-bike tour include 5-hours ride, break time, and activities.</li>
                                    <li>Up to 3 destinations area in Bali.</li>
                                    <li>With professional road captain.</li>
                                    <li>Curated restaurant visit.</li>
                                    <li>Travel in style and comfort with VW Combi 1981.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0 f-16 text-center">49 USD or IDR
                                    700K/Person</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <a href=""
                        class="btn b-green text-white px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins">BOOK
                        NOW</a>
                    <a href=""
                        class="btn btn-white px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins border border-dark">MORE
                        INFO</a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="col-md-10 mx-auto pb-5">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="f-20 fw-bold text-uppercase">unikat </br> e-bike rental</h2>
                        <p>Explore the neighborhood in Bali at your own pace with freedom and being eco-friendly.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme slider-fide-effect">
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="f-20 fw-bold text-uppercase">why rent with </br> unikat</h2>
                    </div>
                    <div class="col-md-7">
                        <ul class="list-program">
                            <li>
                                <b class="f-16">Zero Emissions and eco-friendly</b>
                                <p>Using an e-bike reduces your carbon footprint and positively impacts the environment.</p>
                            </li>
                            <li>
                                <b class="f-16">Customer service</b>
                                <p>We always available to assist you with any services, maintenances or emergencies.</p>
                            </li>
                            <li>
                                <b class="f-16">rental made easy</b>
                                <p>Select your plan and get your e-bike delivered to your location, so easy!</p>
                            </li>
                            <li>
                                <b class="f-16">convenient ride</b>
                                <p>e-bike rental includes a helmet, lamp, road apps, route map, and lock. It's convenient!
                                </p>
                            </li>
                            <li>
                                <b class="f-16">Easy to Get</b>
                                <p>You can choose to pick up the bikes from our hotel partners or have them delivered.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <h2 class="fw-bold text-uppercase h4 text-center pb-4">unikat e-bike RENTAL price list</h2>
                <div class="row row-cols-md-4 row-cols-2">
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 f-20">Daily</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold f-16">28 USD or IDR 400K</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 f-20">Weekly</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold f-16">28 USD or IDR 400K</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 f-20">Monthly</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold f-16">28 USD or IDR 400K</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 f-20">SUBSCRIPTION</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold f-16">28 USD or IDR 400K</p>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <a href=""
                        class="btn b-green text-white px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins">BOOK
                        NOW</a>
                    <a href=""
                        class="btn btn-white px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins border border-dark">MORE
                        INFO</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="fw-bold text-uppercase h4 text-center pb-5 p-t-150 p-md-t-50">WHAT THEY SAY ABOUT THE </br>
                EXPERIENCE WITH UNIKAT</h2>
            <div class="owl-carousel owl-theme slider-blur">
                <div class="item slide-items">
                    <div class="slide text-black b-soft-white text-center">
                        <div class="p-4 p-md-5 my-auto">
                            <div>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                            </div>
                            <h3 class="fw-bold text-uppercase h6 py-4 mb-0">“So easy to ride a long track”</h3>
                            <p>"I wasn't sure if I would be able to handle the physical demands of a bike tour, but the
                                e-bikes made it a breeze. We saw some of the most beautiful scenery I've ever seen, and our
                                guide was so friendly and knowledgeable. I'll definitely be coming back to Bali and taking
                                another e-bike tour." - <b>Mark, Australia</b></p>
                        </div>
                    </div>
                </div>
                <div class="item slide-items">
                    <div class="slide text-black b-soft-white text-center">
                        <div class="p-4 p-md-5 my-auto">
                            <div>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                            </div>
                            <h3 class="fw-bold text-uppercase h6 py-4 mb-0">“Such a memorable experience”</h3>
                            <p>"I've been to Bali many times, but this was a completely different experience. The e-bike
                                tour took me to places I never would have found on my own, and the guides were so passionate
                                about sharing their culture with us. I left feeling like I had a much deeper appreciation
                                for Bali and its people." - <b>Emma, UK</b></p>
                        </div>
                    </div>
                </div>
                <div class="item slide-items">
                    <div class="slide text-black b-soft-white text-center">
                        <div class="p-4 p-md-5 my-auto">
                            <div>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                                <i class="fa-solid fa-star c-gold f-24"></i>
                            </div>
                            <h3 class="fw-bold text-uppercase h6 py-4 mb-0">“Amazing experience”</h3>
                            <p>"Wow, what an amazing way to see Bali! The e-bikes made it so easy to navigate the terrain,
                                and our guide was fantastic at showing us all the hidden gems along the way. I learned so
                                much about Bali's culture and traditions, and would highly recommend this tour to anyone
                                looking for an adventure." - <b>Sarah, USA</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-5">
                <a href="#"
                    class="btn px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins btn-hover-black">EXPERIENCE IT
                    TODAY</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-y-150 p-md-y-50">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h2 class="fw-bold text-uppercase h4 pb-3">Partner </br> with unikat</h2>
                        <p>We're proud to partner with businesses that share our vision for a better Bali.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme slider-no-nav">
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-4.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-5.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-6.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-7.png') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide">
                                    <img src="{{ asset('assets/images/slider-three/slider-8.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection