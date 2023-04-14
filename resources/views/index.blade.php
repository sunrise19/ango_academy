@extends('layouts.app')

@section('content')
{{-- carousels --}}
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel1.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

{{-- sports arranged in cards --}}
    <section class="container-fluid custom-bg-1">
        <h2 class="my-5">SOME OF OUR <span style="color: #6665B5">ACTIVITIES</span></h2>
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('image/sport_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Sport</h2>
                <p class="fs-5 my-3">Sports are games such as football and other leisure activities which need physical
                    effort and skill.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('image/music_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Music</h2>
                <p class="fs-5 my-3">Music is expresses ideas and emotions in significant forms through the elements of
                    rhythm and melody.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('image/painting_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Painter</h2>
                <p class="fs-5 my-3">painting is the expression or application of human creative skill and imagination in a
                    visual form.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </section>

{{-- latest blogs arranged in cards --}}
    <section class="container-fluid mt-5">
        <h2 class="text-center mt-4 mb-5" style="color: #6665B5">Latest Blog</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3">
            @foreach ($blogs as $blog)

            <div class="col-lg-4 col-md-6">
                <a href="{{ route('blog.show', $blog->id)}}" style="text-decoration: none">
                   <div class="card shadow-lg">
                        <img src="{{ asset('image/blog_image1.png') }}" class="img-fluid" alt="">

                        <div class="card-body">
                            <p class="card-text">
                                {{$blog->details = Str::limit($blog->details, 100)}}
                            </p>
                            <h5>
                                Headmaster <i class="fa-solid fa-comments mx-3"></i>10 <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                            </h5>
                            <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>

                        </div>
                    </div> 
                </a>
                
            </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg">
                    <img src="{{ asset('image/blog_image2.png') }}" class="img-fluid" alt="">

                    <div class="card-body">
                        <p class="card-text">
                            the picture above, the text below and the number of likes and view will originate
                            from the data base, This what you are seing now is just temporal, ...
                        </p>
                        <h5>
                            Headmaster <i class="fa-solid fa-comments mx-3"></i>10 <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                        </h5>
                        <p>september 10, 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg">
                    <img src="{{ asset('image/blog_image3.png') }}" class="img-fluid" alt="">

                    <div class="card-body">
                        <p class="card-text">
                            the picture above, the text below and the number of likes and view will originate
                            from the data base, This what you are seing now is just temporal, ...
                        </p>
                        <h5>
                            Headmaster <i class="fa-solid fa-comments mx-3"></i>10 <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                        </h5>
                        <p>september 10, 2021</p>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>

    {{-- button --}}
    <div class="container-fluid d-flex justify-content-end">
        <a class="btn btn-lg my-5 text-light mx-4" href="{{ route('news-blog')}}" style="background-color: #6665B5">
            more articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </a>
    </div>

    {{-- teams --}}
    <section class="container-fluid custom-team-section">
        <h2 id="team-head">Meet Our Team</h2>
        <div class="row">
            <div class="col-lg-1 d-flex justify-content-center align-items-center">
                <button class="team-slider">
                    <img src="{{asset('image/team_Slider.png')}}" height="50px" alt="">
                </button>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4 custum-col-4">
                        <div class="cards custom-cards shadow-lg">
                            <div class="d-flex justify-content-center">
                                <div class="team-image-frame d-flex justify-content-center align-items-center">
                                    <img class="img-fluid" src="{{asset('image/team_image1.png')}}" alt="">
                                </div>
                            </div>
                            <h3 class="d-flex justify-content-center team-name">Afuwape J. Abiodun</h3>
                            <p class="d-flex justify-content-center team-position">Headmaster</p>
                            <div class="d-flex justify-content-center">
                                <a href=""><i class="fa-brands fa-facebook px-3 text-primary"></i></a>
                                <a href=""><i class="fa-brands fa-whatsapp px-3 text-success"></i></a>
                                <a href=""><i class="fa-brands fa-instagram px-3 text-warning"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 custum-col-4">
                        <div class="cards custom-cards shadow-lg">
                            <div class="d-flex justify-content-center">
                                <div class="team-image-frame d-flex justify-content-center align-items-center">
                                    <img class="img-fluid" src="{{asset('image/team_image2.png')}}" alt="">
                                </div>
                            </div>
                            <h3 class="d-flex justify-content-center team-name">Afuwape J. Abiodun</h3>
                            <p class="d-flex justify-content-center team-position">Headmaster</p>
                            <div class="d-flex justify-content-center">
                                <a href=""><i class="fa-brands fa-facebook px-3 text-primary"></i></a>
                                <a href=""><i class="fa-brands fa-whatsapp px-3 text-success"></i></a>
                                <a href=""><i class="fa-brands fa-instagram px-3 text-warning"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 custum-col-4">
                        <div class="cards custom-cards shadow-lg">
                            <div class="d-flex justify-content-center">
                                <div class="team-image-frame d-flex justify-content-center align-items-center">
                                    <img class="img-fluid" src="{{asset('image/team_image3.png')}}" alt="">
                                </div>
                            </div>
                            <h3 class="d-flex justify-content-center team-name">Afuwape J. Abiodun</h3>
                            <p class="d-flex justify-content-center team-position">Headmaster</p>
                            <div class="d-flex justify-content-center">
                                <a href=""><i class="fa-brands fa-facebook px-3 text-primary"></i></a>
                                <a href=""><i class="fa-brands fa-whatsapp px-3 text-success"></i></a>
                                <a href=""><i class="fa-brands fa-instagram px-3 text-warning"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 d-flex justify-content-center align-items-center">
                <button class="team-slider">
                    <img src="{{asset('image/team_Slider2.png')}}" height="50px" alt="">
                </button>
            </div>
        </div>
    </section>

{{-- gallery --}}
    <section class="container-fluid custom-gallery-section">
        <h2 id="gallery-head">Our Gallery</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img class="img-fluid" src="{{asset('image/gallery_image1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="img-fluid" src="{{asset('image/gallery_image2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="img-fluid" src="{{asset('image/gallery_image3.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- button --}}
    <div class="container-fluid d-flex justify-content-end">
        <button class="btn btn-lg my-5 text-light mx-4" style="background-color: #6665B5">
            more articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </button>
    </div>

@endsection