@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Category List</h2>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add New Category
            </a>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($categories->count())
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Category Name</th>
                        <th>No of Item</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td> {{-- Serial number --}}
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->products_count }}</td> {{-- Comes from withCount --}}
                            <td>{{ $category->created_at->format('d M Y, h:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted mt-3">No categories found.</p>
        @endif
    </div>
@endsection
