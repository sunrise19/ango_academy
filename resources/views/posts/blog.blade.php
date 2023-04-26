@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">

                <p class="sub-header-heading">{{ $blog->category->name }}</p>

                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr;
                    {{ $blog->category->name }}</p>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        {{-- <h1 class="text-center mt-5">{{ $blog->title }}</h1> --}}

        {{-- large devices --}}
        <div class="row mt-5 mb-5 d-md-flex d-sm-none d-none d-lg-flex d-xl-flex">
            <div class="offset-lg-1 offset-xl-1 col-md-10 offset-md-1 col-lg-10 col-xl-10 col-sm-12 col-xs-12">
                <div id="main-news-col" class="mb-3">
                    <img class="img-fluid" width="100%" src="{{ asset('storage/' . $blog->image) }}" alt="">
                    <div id="news1-desc">
                        <h2>
                            {{ $blog->title }}
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <h4><i class="fa-solid fa-user-tie mx-2"></i>Admin</h4>
                    </div>
                    <div class="col-lg-5">
                        <h4><i class="fa-solid fa-clock mx-2"></i>{{ $blog->created_at->format('F j, Y, g:i a') }}.</h4>
                    </div>
                    <div class="col-lg-4">
                        @if ($blog->comment->count() > 1)
                            <h4><i class="fa-solid fa-comments mx-2"></i>{{ $blog->comment->count() }} comments</h4>
                        @elseif ($blog->comment->count() === 1)
                            <h4><i class="fa-solid fa-comments mx-2"></i>{{ $blog->comment->count() }} comment</h4>
                        @else
                            <h4><i class="fa-solid fa-comments mx-2"></i>no comment</h4>
                        @endif
                    </div>
                </div>
                <p class="text mb-5">{{ $blog->details }}</p>

                <h3 class="fw-bold" style="color: #6665B5;">Comments</h3>
                @if ($blog->comment->count() > 0)
                    @foreach ($blog->comment as $comments)
                        <hr>
                        <div class="row">
                            <div class="col-1">
                                <i class="bi bi-person-circle fw-bold fs-1"></i>
                            </div>
                            <div class="col-11">
                                <p class="text-small fw-bold">{{ $comments->name }}</p>
                                <p class="text-small" style="margin-top: -25px">{{ $comments->email }}</p>
                            </div>
                        </div>

                        <h5 class="fw-bold">{{ $comments->comments }}</h5>

                        <form action="{{ route('comment.delete', $comments->id) }}" method="POST"
                            class=" d-flex justify-content-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this comment?')"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    @endforeach
                @else
                    <p>No comments yet. Be the first to comment!</p>
                @endif

                <hr class="mb-5">
                <p>Leave a Reply</p>
                <p>Your email will not be published</p>
                <form action="{{ route('comment.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- name --}}
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name"
                            value="{{ old('name') }}" required>

                        {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                    </div>


                    <div class="mb-3">
                        <input type="hidden" name="blog_id" class="form-control" value="{{ $blog->id }}">
                    </div>

                    {{-- email --}}
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            @error('email') is-invalid @enderror value="{{ old('email') }}">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- comments --}}
                    <div class="mb-3">
                        <textarea name="comments" id="" cols="50" rows="5" placeholder="comments..." class="form-control"
                            value="{{ old('comments') }}" required></textarea>

                        {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                    </div>

                    <div class="d-flex justify-content-end mb-5">
                        <button class="btn form-btn">Post Comment</button>
                    </div>
                </form>

            </div>
        </div>

        {{-- small devices --}}
        <div class="row mt-5 mb-5 d-xl-none d-lg-none d-md-none d-sm-block d-xs-block ms-2 me-2">
            <div id="main-news-col" class="mb-3">
                <img class="img-fluid" width="100%" src="{{ asset('storage/' . $blog->image) }}" alt="">
                <div id="news1-desc">
                    <h2>
                        {{ $blog->title }}
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="fw-bold"><i class="fa-solid fa-user-tie mx-2"></i>Admin</h6>
                </div>
                <div class="col-lg-5">
                    <h6 class="fw-bold"><i
                            class="fa-solid fa-clock mx-2"></i>{{ $blog->created_at->format('F j, Y, g:i a') }}.</h6>
                </div>
                <div class="col-lg-4">
                    @if ($blog->comment->count() > 1)
                        <h6 class="fw-bold"><i class="fa-solid fa-comments mx-2"></i>{{ $blog->comment->count() }} comments
                        </h6>
                    @elseif ($blog->comment->count() === 1)
                        <h6 class="fw-bold"><i class="fa-solid fa-comments mx-2"></i>{{ $blog->comment->count() }} comment
                        </h6>
                    @else
                        <h6 class="fw-bold"><i class="fa-solid fa-comments mx-2"></i>no comment</h6>
                    @endif
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <p class="text-small mb-5">{{ $blog->details }}</p>
            </div>

            <h3 class="text-small fw-bold" style="color: #6665B5;">Comments</h3>
            @if ($blog->comment->count() > 0)
                @foreach ($blog->comment as $comments)
                    <hr>
                    <div class="row">
                        <div class="col-2">
                            <i class="bi bi-person-circle fw-bold fs-1"></i>
                        </div>
                        <div class="col-10">
                            <p class="text-small fw-bold">{{ $comments->name }}</p>
                            <p class="text-small" style="margin-top: -25px">{{ $comments->email }}</p>
                        </div>
                    </div>


                    <h5 class="text-small fw-bold">{{ $comments->comments }}</h5>

                    <form action="{{ route('comment.delete', $comments->id) }}" method="POST"
                        class=" d-flex justify-content-end">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mb-3"
                            onclick="return confirm('Are you sure you want to delete this comment?')"><i
                                class="bi bi-trash3-fill"></i></button>
                    </form>
                @endforeach
            @else
                <p>No comments yet. Be the first to comment!</p>
            @endif
            <hr  class="mb-5">
            <p>Leave a Reply</p>
            <p class="text-small">Your email will not be published</p>
            <form action="{{ route('comment.store') }}" method="post" enctype="multipart/form-data" class="text-small">
                @csrf
                {{-- name --}}
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name"
                        value="{{ old('name') }}" required>

                    {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                </div>

                {{-- blog id (hidden) --}}
                <div class="mb-3">
                    <input type="hidden" name="blog_id" class="form-control" value="{{ $blog->id }}">
                </div>

                {{-- email --}}
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email"
                        @error('email') is-invalid @enderror value="{{ old('email') }}">

                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                {{-- comments --}}
                <div class="mb-3">
                    <textarea name="comments" id="" cols="50" rows="5" class="form-control" placeholder="comments..."
                        value="{{ old('comments') }}" required></textarea>

                    {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                </div>

                <div class="d-flex justify-content-end mb-5">
                    <button class="btn form-btn btn-small">Post Comment</button>
                </div>
            </form>

        </div>
    </div>



@endsection
