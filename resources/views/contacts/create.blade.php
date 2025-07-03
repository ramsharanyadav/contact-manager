@extends('layouts.app')

@section('content')

    <style>
        .btn-success {
            transition: 0.3s ease;
        }

        .btn-success:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom border-primary">
        <h2 class="text-dark fw-bold mb-0">
            Add New Contact
        </h2>

        <div>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary me-2">
                Back
            </a>
        </div>
    </div>

    <form class="p-4 rounded-2 shadow bg-white" method="POST" action="{{ route('contacts.store') }}">
        @csrf

        <div class="row g-3">
            <!-- Name -->
            <div class="col-md-3">
                <label for="name" class="form-label">Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi-person-circle"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="e.g., John" required>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-md-3">
                <label for="phone" class="form-label">Phone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                    <input type="text" name="phone" class="form-control" placeholder="e.g., +91 7737291210" required>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-md-3 d-flex align-items-end">
                <button type="submit" id="submit" class="btn btn-success">
                    <i class="bi bi-save me-1"></i>Save
                </button>
            </div>

        </div>
    </form>

@endsection