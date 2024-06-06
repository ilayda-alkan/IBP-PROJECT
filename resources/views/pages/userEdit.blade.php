@extends('layouts.master')

@section('title', 'Home')

@section('content')
<h2 class="bg-dark p-2">Edit User</h2>
    
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="{{ $user->fullName }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="auth" class="form-label">Auth</label>
            <select class="form-select" id="auth" name="auth" required>
                <option value="0" {{ $user->auth == 0 ? 'selected' : '' }}>0</option>
                <option value="1" {{ $user->auth == 1 ? 'selected' : '' }}>1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

@push('scripts')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endpush
