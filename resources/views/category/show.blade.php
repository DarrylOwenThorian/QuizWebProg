@extends('layouts.main')

@section('content')

<h2 class="mb-4">{{ $category->name }}</h2>

@if($subjects->count() > 0)

<ul class="list-group">
    @foreach($subjects as $subject)
    <li class="list-group-item">
        <h5>{{ $subject->title }}</h5>
        <a href="/subject/{{ $subject->id }}" class="btn btn-sm btn-primary mt-1">
            Read More
        </a>
    </li>
    @endforeach
</ul>

@else
<p>No subjects available.</p>
@endif

@endsection
