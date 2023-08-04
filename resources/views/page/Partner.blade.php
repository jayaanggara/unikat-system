@extends('layouts.app')
@section('title', 'Partner')
@section('content')
    <header class="header-background"
        style="background-image: url('{{ asset('assets/images/background/background-partner.png') }}'); ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <div class="col-md-6">
                        <h1 class="f-36 pb-3 fw-bold text-uppercase text-white f-md-27">partnership with unikat for a
                            sustainable and
                            better Bali</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="col-md-10 mx-auto pt-5 p-b-150 p-md-b-50">
                <div class="row align-items-center pb-4">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-20 fw-bold pb-2">Your partner for a </br> healthy, sustainable,</br> and
                            better
                            Bali </h2>
                    </div>
                    <div class="col-md-6">
                        <p>Unikat partners that share our eco-friendly vision. Together, we offer unforgettable experiences
                            while preserving the environment.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-1.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-2.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-3.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-4.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-5.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-6.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-7.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-8.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-9.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-10.jpg') }}" alt="" class="w-100 my-3" style="border: 1px solid #cfcfcf;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto pt-5 p-b-150 p-md-b-50">
                <h2 class="fw-bold h4 text-center text-uppercase">why partner with us?</h2>
                <div class="row row-cols-1 row-cols-md-3 py-4">
                    <div class="col pb-4">
                        <div class="w-100 h-100 border-hover-green b-white px-4 py-5 text-center">
                            <img src="{{ asset('assets/images/icon/partner-1.png') }}" alt="">
                            <h3 class="f-16 fw-bold py-3">Diversity for sustainability</h3>
                            <p>We believe that sustainability is a team effort. That's why we're open to partner with
                                businesses
                                of all types - including hotels, cafes, and more.</p>
                        </div>
                    </div>
                    <div class="col pb-4">
                        <div class="w-100 h-100 border-hover-green b-white px-4 py-5 text-center">
                            <img src="{{ asset('assets/images/icon/partner-2.png') }}" alt="">
                            <h3 class="f-16 fw-bold py-3">Meaningful Connection</h3>
                            <p>Deeply connect to your audience with a shared purpose to create a sustainable, healthy
                                lifestyle that promotes better environment for Bali.</p>
                        </div>
                    </div>
                    <div class="col pb-4">
                        <div class="w-100 h-100 border-hover-green b-white px-4 py-5 text-center">
                            <img src="{{ asset('assets/images/icon/partner-3.png') }}" alt="">
                            <h3 class="f-16 fw-bold py-3">Creating Loyalty</h3>
                            <p>Create a genuine relationship that eventually leads to loyalty among businesses and
                                communities that believe in sustainable lifestyle.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn b-green text-white text-uppercase fw-bold rounded-0 px-4">partnership
                        enquiry</a>
                </div>
            </div>
        </div>
    </section>
@endsection
