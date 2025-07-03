@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom border-primary">
        <h2 class="text-dark fw-bold mb-0">
            Contact List
        </h2>

        <div>
            <a href="{{ route('contacts.create') }}" class="btn btn-primary me-2">
                + Add New Contact
            </a>

            <a href="{{ route('contacts.import') }}" class="btn btn-info">
                📁 Import File
            </a>
        </div>
    </div>

    <table class='mt-4 table table-bordered table-striped shadow'>
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $index => $contact)
                <tr>
                    <td>{{ $contacts->firstItem() + $index }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact) }}" class='btn btn-sm btn-warning edit-btn'>Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class='btn btn-sm btn-danger delete-btn' onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>

@endsection



