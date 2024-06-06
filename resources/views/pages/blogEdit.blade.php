@extends('layouts.master')

@section('title', 'Blog Edit')

@section('content')
    <h2 class="bg-dark p-2">Edit Blog</h2>
    <form method="POST" action="{{ route('blogs.update', $blog->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="blogTitle" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="blogTitle" name="title" value="{{ $blog->title }}" required>
        </div>
        <div class="mb-3">
            <label for="categorySelect" class="form-label">Category</label>
            <select class="form-select" id="categorySelect" name="category_id" required>
                <option selected disabled>Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($blog->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="blogDescription" class="form-label">Blog Description</label>
            <textarea class="form-control" id="blogDescription" name="description" rows="5" required>{{ $blog->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endpush
