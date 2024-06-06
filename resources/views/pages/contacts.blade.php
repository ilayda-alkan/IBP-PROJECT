@extends('layouts.master')

@section('title', 'Contact Messages')

@section('content')
<h2 class="bg-dark p-2">Contact Messages</h2>

@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->message }}</td>
            <td>
                <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                    @csrf
                    @method('PUT')
                    <select name="message_status" class="form-select" onchange="this.form.submit()">
                        <option value="cevaplanmadı" {{ $contact->message_status == 'cevaplanmadı' ? 'selected' : '' }}>cevaplanmadı</option>
                        <option value="cevaplandı" {{ $contact->message_status == 'cevaplandı' ? 'selected' : '' }}>cevaplandı</option>
                        <option value="okundu" {{ $contact->message_status == 'okundu' ? 'selected' : '' }}>okundu</option>
                    </select>
                </form>
            </td>
            <td>
                <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
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
