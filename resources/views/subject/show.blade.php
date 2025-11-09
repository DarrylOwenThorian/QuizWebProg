@extends('layouts.main')

@section('content')

<div class="container">

    <h2 class="mb-3">{{ $subject->title }}</h2>
    <p class="text-muted">
        Category: <strong>{{ $subject->category->name }}</strong>
    </p>

    @if($article)
        <p class="text-muted">
            Posted on 
            {{ $article->created_at ? $article->created_at->format('d M Y') : 'Unknown date' }} 
            by {{ $article->writer->name ?? 'Unknown' }}
        </p>

        <div class="mt-4">
            {!! nl2br(e($article->content)) !!}
        </div>
    @else
        <p>No material available for this subject.</p>
    @endif
    
    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Back</a>

</div>

@endsection
