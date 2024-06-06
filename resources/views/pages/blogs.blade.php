@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h2 class="bg-dark p-2">Blogs</h2>
    <a class="btn btn-primary" href="{{ route('addblog') }}"><i class="fas fa-plus-circle"></i> Add Blog</a>
    
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->category->name }}</td>
                    <td>
                        <!-- Silme İşlemi -->
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endpush
