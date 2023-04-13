@extends('layouts.app')

@section('content')

    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 182px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Gallery</p> 
                <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; Gallery</p>
            </div>    
        </div>
    </div>

    <div class="row mt-5 ms-2 me-2">
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <img src="{{ asset('image/gallery1.png')}}" alt="" class="img-fluid w-100">
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <img src="{{ asset('image/gallery2.png')}}" alt="" class="img-fluid w-100">
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <img src="{{ asset('image/gallery3.png')}}" alt="" class="img-fluid w-100">
        </div>
    </div>
@endsection