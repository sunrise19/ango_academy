@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Blog</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Blog</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="text-center mt-5">{{ $blog->title }}</h1>

        {{-- large devices --}}
        <div class="row mt-5 mb-5 d-md-none d-sm-none d-none d-lg-flex d-xl-flex">
            <div class="offset-lg-2 offset-xl-2 col-md-5 offset-md-1 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <img src="{{ asset('image/blog_image3.png') }}" alt="" class="img-fluid w-100">
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <p class="text">{{ $blog->details }}</p>
            </div>
        </div>

    {{-- small devices --}}
    <div class="row mt-3 mb-5 d-xl-none d-lg-none d-md-flex d-sm-block d-xs-block ms-2 me-2">
        <div class="offset-lg-2 offset-xl-2 col-md-5 offset-md-1 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
            <img src="{{ asset('image/blog_image3.png') }}" alt="" class="img-fluid w-100">
        </div>
        <div class="col-md-5 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
            <p class="text-small">{{ $blog->details }}</p>
        </div>
    </div>
    </div>

    
    
@endsection
