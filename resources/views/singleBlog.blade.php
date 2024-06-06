@extends('master')

@section('title', $blog->title)

@section('content')
  <div class="card my-5">
    <div class="card-body">
      <h1 class="card-title my-5">{{ $blog->title }}</h1>
      <p class="card-text">{{ $blog->description }}</p>
    </div>
    <div class="card-footer text-muted">
      Posted on {{ $blog->created_at->format('F d, Y') }} | <span class="text-danger fw-bold">{{$blog->category->name}}</span></a>
    </div>
  </div>
@endsection
