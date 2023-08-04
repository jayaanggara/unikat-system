@extends('layouts.app')
@section('title', 'About')
@section('content')
    <header class="header-background"
        style="background-image: url('{{ asset('assets/images/background/background-about.png') }}'); ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <div class="col-md-6">
                        <h1 class="f-36 pb-3 fw-bold text-uppercase text-white f-md-27">modest team with a big dream for
                            sustainability
                            and better Bali</h1>
                        <div>
                            <a href=""
                                class="btn b-green text-white px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins">BOOK
                                NOW</a>
                            <a href="" class="btn btn-light px-4 py-2 rounded-0 mx-1 fw-bold l-space-1 f-poppins">LEARN
                                MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4 pb-md-0 pb-4">
                        <img src="{{ asset('assets/images/logo-black.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-20 fw-bold">
                            about unikat</h2>
                        <p>Welcome to UNIKAT, your ultimate destination for e-bike tours and rentals in Bali. We provide a
                            convenient, sustainable, and exciting way for you to explore Bali with ease. Our high-quality
                            e-bikes are designed to provide you with a convenient ride, allowing you to navigate Bali's
                            beautiful landscapes with ease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-t-150 p-b-125 p-md-t-50 p-md-b-50">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-20 fw-bold">Immerse yourself in a worry-free </br>
                            exploration adventure with</br> UNIKAT E-Bike Rental</h2>
                    </div>
                    <div class="col-md-6">
                        <p>Get set for an adventure like no other, with UNIKAT's top-of-the-line safety gear and e-bikes.
                            Our
                            focus on safety allows you to explore Bali with ease and create unforgettable memories.</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/about/about.png') }}" alt="" class="w-100 py-3">
                </div>
                <div>
                    <div class="row align-items-center border-btm mb-4 pb-4">
                        <div class="col-md-1 pb-md-0 pb-3">
                            <img src="{{ asset('assets/images/icon/about-1.png') }}" alt="">
                        </div>
                        <div class="col-md-11">
                            <b class="f-16">Satisfaction Guarantee</b>
                            <p class="mb-0">We want to make sure you have the best experience possible. If you decide to
                                cancel before you
                                reach the 2KM mark, we'll provide a full refund with no questions asked. We value your
                                satisfaction and want you to know that we're here to support you every step of the way.</p>
                        </div>
                    </div>
                    <div class="row align-items-center border-btm mb-4 pb-4">
                        <div class="col-md-1 pb-md-0 pb-3">
                            <img src="{{ asset('assets/images/icon/about-2.png') }}" alt="">
                        </div>
                        <div class="col-md-11">
                            <b class="f-16">Satisfaction Guarantee</b>
                            <p class="mb-0">We want to make sure you have the best experience possible. If you decide to
                                cancel before you
                                reach the 2KM mark, we'll provide a full refund with no questions asked. We value your
                                satisfaction and want you to know that we're here to support you every step of the way.</p>
                        </div>
                    </div>
                    <div class="row align-items-center border-btm mb-4 pb-4">
                        <div class="col-md-1 pb-md-0 pb-3">
                            <img src="{{ asset('assets/images/icon/about-3.png') }}" alt="">
                        </div>
                        <div class="col-md-11">
                            <b class="f-16">Satisfaction Guarantee</b>
                            <p class="mb-0">We want to make sure you have the best experience possible. If you decide to
                                cancel before you
                                reach the 2KM mark, we'll provide a full refund with no questions asked. We value your
                                satisfaction and want you to know that we're here to support you every step of the way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-b-150 p-md-b-50">
                <div class="row align-items-center pb-4">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-20 fw-bold pb-2">designed for an eco-friendly </br> and comfortable ride
                            in
                            bali
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <p>Whether you're looking for a leisurely ride through the city or an adventure off the beaten path,
                            our
                            e-bikes will get you there in style and comfort while protecting the environment.</p>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6">
                        <h3 class="fw-bold h6 pb-4">unikat E-Bike Specifications</h3>
                        <div class="row align-items-center border-tp border-btm pb-4 pt-3">
                            <div class="col-md-2 pb-md-0 pb-3">
                                <img src="{{ asset('assets/images/icon/about-4.png') }}" alt=""
                                    style="width: 50px;">
                            </div>
                            <div class="col-md-10">
                                <b class="f-16">electric motor</b>
                                <p class="mb-0">Powerful motor up to 32 km/h for high-speed transport.</p>
                            </div>
                        </div>
                        <div class="row align-items-center border-tp border-btm pb-4 pt-3">
                            <div class="col-md-2 pb-md-0 pb-3">
                                <img src="{{ asset('assets/images/icon/about-5.png') }}" alt=""
                                    style="width: 50px;">
                            </div>
                            <div class="col-md-10">
                                <b class="f-16">Battery Powered</b>
                                <p class="mb-0">Powerful batteries last for around 100 kilometers.</p>
                            </div>
                        </div>
                        <div class="row align-items-center border-tp border-btm pb-4 pt-3">
                            <div class="col-md-2 pb-md-0 pb-3">
                                <img src="{{ asset('assets/images/icon/about-6.png') }}" alt=""
                                    style="width: 50px;">
                            </div>
                            <div class="col-md-10">
                                <b class="f-16">comfortable Ride</b>
                                <p class="mb-0">High-quality suspension and brakes for smooth experience.</p>
                            </div>
                        </div>
                        <div class="row align-items-center border-tp border-btm pb-4 pt-3">
                            <div class="col-md-2 pb-md-0 pb-3">
                                <img src="{{ asset('assets/images/icon/about-7.png') }}" alt=""
                                    style="width: 50px;">
                            </div>
                            <div class="col-md-10">
                                <b class="f-16">Eco-Friendly</b>
                                <p class="mb-0">Using clean energy that offer zero emission footprint on every ride.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/speda.png') }}" class="w-100 h-100" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row align-items-center pb-4">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-20 fw-bold pb-2">meet the team
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <p>Get to know the exceptional individuals who make up our talented team of experts, each driven by
                            their passion and commitment to delivering outstanding results.</p>
                    </div>
                </div>
                <div class="text-center py-4">
                    <i class="f-16 fw-bold">Office Team</i>
                </div>
                <div class="row row-cols-md-3 row-cols-1">
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/about/team.png') }}" class="w-100" alt="">
                            <h3 class="h5 fw-bold py-3 mb-0"><i>Name</i></h3>
                            <p class="mb-4">Title</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/about/team.png') }}" class="w-100" alt="">
                            <h3 class="h5 fw-bold py-3 mb-0"><i>Name</i></h3>
                            <p class="mb-4">Title</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/about/team.png') }}" class="w-100" alt="">
                            <h3 class="h5 fw-bold py-3 mb-0"><i>Name</i></h3>
                            <p class="mb-4">Title</p>
                        </div>
                    </div>
                </div>
                <div class="text-center py-4">
                    <i class="f-16 fw-bold">Operational Team</i>
                </div>
                <div class="row row-cols-md-3 row-cols-1">
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/about/team.png') }}" class="w-100" alt="">
                            <h3 class="h5 fw-bold py-3 mb-0"><i>Name</i></h3>
                            <p class="mb-4">Title</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/about/team.png') }}" class="w-100" alt="">
                            <h3 class="h5 fw-bold py-3 mb-0"><i>Name</i></h3>
                            <p class="mb-4">Title</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/about/team.png') }}" class="w-100" alt="">
                            <h3 class="h5 fw-bold py-3 mb-0"><i>Name</i></h3>
                            <p class="mb-4">Title</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
