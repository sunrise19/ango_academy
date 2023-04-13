@extends('layouts.admin')

@section('posts')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 my-5">
                <h1 class="text-center mb-5">Dashboard</h1>
                <table class="table table-striped table-sm table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Details</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->details = Str::limit($blog->details, 50) }}</td>
                                <td>No category yet</td>
                                <td>
                                    <a href="{{ route('blog.edit', $blog->id) }}"
                                        class="btn btn-outline-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('blog.create') }}" class="btn btn-success">Create News & Blog</a>
            </div>
        </div>
    </div>
@endsection
