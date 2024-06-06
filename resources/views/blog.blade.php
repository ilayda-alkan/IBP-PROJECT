@extends('master')

@section('title', 'All Blog Posts')

@section('content')
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <h1 class="fw-bold text-center text-danger py-5 bg-light">My Blogs</h1>
    </div>
  </div>
  <div class="row d-flex flex-reverse py-5 flex-md-row">
    
    <div class="col-md-8">
      <h2 class="fw-bold py-3">All Blog Posts</h2>
      @foreach($blogs as $blog)
        <div class="card mb-4">
          <div class="card-body">
            <h4 class="card-title py-3">{{ $blog->title }}</h4>
            <p class="card-text">{{ Str::limit($blog->description, 200) }}</p>
            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary btn-sm">Show More</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $blog->created_at->format('F, d, Y') }} |  <span class="text-danger fw-bold">{{$blog->category->name}}</span></a>
          </div>
        </div>
      @endforeach
    </div>

    <div class="col-md-4">
      <h2 class="fw-bold py-3">Categories</h2>
      <ul class="list-group">
        @foreach($categories as $category)
          <li class="list-group-item">{{ $category->name }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
