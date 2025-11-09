@extends('layouts.main')

@section('content')

<h2 class="mb-4">Writers</h2>

<div class="row">
    @foreach($writers as $writer)
        <div class="col-md-4 mb-3">
            <div class="card p-3">
                <h4>{{ $writer->name }}</h4>
                <p>{{ Str::limit($writer->description, 80) }}</p>

                <a href="{{ route('writer.show', $writer->id) }}" class="btn btn-primary mt-2">
                    View Articles
                </a>
            </div>
        </div>
    @endforeach
</div>

@endsection
