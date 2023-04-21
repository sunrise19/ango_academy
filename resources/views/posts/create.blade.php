@extends('layouts.admin')

@section('posts')
    <div class="row mt-5 mb-5">

        {{-- alert --}}
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" data-bs-delay="5000"></button>
            </div>
        @endif

        {{-- error handling messages on top of the page --}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif --}}


        <div class="col-xl-8 col-lg-8 col-md-10 offset-xl-2 offset-lg-2 offset-md-1">
            <div class="shadow p-3">


                <h1 class="text-center mb-3">CREATE NEWS & BLOG</h1>
                <form action="{{ route('blog.store') }}" class="form-control" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Give your post a title"
                            @error('title') is-invalid @enderror value="{{ old('title') }}">

                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category_id" id="category" class="form-select">
                            <option >Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="" @error('slug') is-invalid @enderror value="{{ old('slug')}}">

                    @error('slug')
                    <small class="text-danger">{{ $message}}</small>
                    @enderror

                </div> --}}

                    <div class="mb-3">
                        <label for="details" class="form-label">Details</label>
                        <textarea class="form-control" id="details" rows="5" name="details" value="{{ old('details') }}"></textarea>

                        @error('details')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image" @error('image') is-invalid @enderror>

                        @error('image')
                        <small class="text-danger">{{ $message}}</small>
                        @enderror

                    </div>

                    <div class=" mb-3">
                        <button class="btn btn-outline-primary w-100"><i class="bi bi-check-square-fill"></i> Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
