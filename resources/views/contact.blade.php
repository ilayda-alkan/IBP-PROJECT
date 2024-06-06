@extends('master')

@section('title', 'Contact')

@section('content')
  <div class="jumbotron my-5">
    <h1 class="display-4 fw-lighter">Contact Me</h1>
    <p class="lead">We'd love to hear from you! Fill out the form below to get in touch with us.</p>
    <hr class="my-4">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <form action="{{ route('contact.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
@endsection
