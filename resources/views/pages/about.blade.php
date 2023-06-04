@extends('layouts.app')

@section('content')
{{-- sub-header --}}
<div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 150px;">
    <div class="sub-header-overlay d-flex align-items-center">
        <div class=" ms-4">
            <p class="sub-header-heading">About us</p>
            <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; About us</p>
        </div>
    </div>
</div>

<section id="about" class="container-fluid mt-5">
    {{-- First row --}}

    {{-- view in large devices --}}
    <div class="row d-md-none d-sm-none d-none d-lg-flex d-xl-flex ms-2 me-2">
        <div class="col-xl-6 col-lg-6 mx-auto" data-aos="slide-right" data-aos-duration="1000" data-aos-delay="500">

            <img src="{{ asset('image/about_pic1.jpg')}}" alt="" class="mx-auto img-fluid about-image">

        </div>

        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x" class="img-fluid">
                <p class="sub-heading">Our Mission</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                We are determined to nurturing leaders who are complete in spirit, mind and body through the application of accredited curriculum and assessment tools in a prepared environment, holistic in approach to unleash in the children their natural curiosity for self-discovery and development.
            </p>


        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row d-xl-none d-lg-none d-md-block d-sm-block d-xs-block ms-2 me-2">

        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">Our Mission</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                We are determined to nurturing leaders who are complete in spirit, mind and body through the application of accredited curriculum and assessment tools in a prepared environment, holistic in approach to unleash in the children their natural curiosity for self-discovery and development.
            </p>


        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="{{ asset('image/about_pic1.jpg')}}" alt="" class="mx-auto d-flex img-fluid about-image">
        </div>

    </div>

    {{-- second row --}}

    {{-- view in large devices --}}
    <div class="row mt-5 d-xl-flex d-lg-flex d-md-none d-sm-none d-none ms-2 me-2">
        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">About Us</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                We are determined to nurture leaders who are complete in spirit, mind and body through the application of accredited curriculum and assessment tools in a prepared environment, holistic in approach to unleash in the children their natural curiosity for self-discovery and development.
            </p>

        </div>

        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">Our Vision</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                Every child is inspired to learn, guided to self-discovery, equiped to excel and empowered to thrive in life-long learning in a dynamic world.
            </p>
        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row mt-5 d-md-block d-sm-block d-xs-block d-xl-none d-lg-none ms-2 me-2">
        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">About Us</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                We are determined to nurture leaders who are complete in spirit, mind and body through the application of accredited curriculum and assessment tools in a prepared environment, holistic in approach to unleash in the children their natural curiosity for self-discovery and development.
            </p>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
                <p class="sub-heading">Our Vision</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                Every child is inspired to learn, guided to self-discovery, equiped to excel and empowered to thrive in life-long learning in a dynamic world.
            </p>
        </div>
    </div>
</section>
@endsection
