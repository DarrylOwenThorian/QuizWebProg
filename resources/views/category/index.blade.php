@extends('layouts.main')

@section('content')

<h2 class="mb-4">Categories</h2>

@if($categories->count() == 0)
    <p class="text-muted">No categories found.</p>
@endif

<div class="row">
    @foreach($categories as $category)
    <div class="col-md-4 mb-3">
        <div class="card p-3">
            <h4>{{ $category->name }}</h4>
            <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary mt-2">
                View Subjects
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection
