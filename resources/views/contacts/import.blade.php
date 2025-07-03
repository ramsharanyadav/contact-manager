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
            Import Contact XML File
        </h2>

        <div>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary me-2">
                Back
            </a>
        </div>
    </div>
        
    <form class="p-4 rounded-2 shadow bg-white" action="{{ route('contacts.importXml.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-3">
                <label for="xml_file" class="form-label fw-bold">Choose XML File</label>
                <div class="input-group">
                    <input class="form-control" type="file" id="xml_file" name="xml_file" accept=".xml" required>
                    <button class="btn btn-success" type="submit"><i class="bi bi-save me-1"></i> Import</button>
                </div>
            </div>
        </div>
    </form>


@endsection