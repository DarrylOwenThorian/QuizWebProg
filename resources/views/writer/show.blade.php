@extends('layouts.main')

@section('content')

<h2 class="mb-3">{{ $writer->name }}</h2>
<p>{{ $writer->description }}</p>

<h4 class="mt-4">Articles written:</h4>

@if ($writer->articles->count() > 0)
    <ul class="list-group mt-3">
        @foreach ($writer->articles as $article)
            <li class="list-group-item">
                <h5>{{ $article->title }}</h5>
                <small>
                    {{ $article->created_at ? $article->created_at->format('d M Y') : '' }}
                </small>
                <br>
                <a href="{{ route('subject.show', $article->subject_id) }}" class="btn btn-sm btn-primary mt-2">
                    Read more
                </a>
            </li>
        @endforeach
    </ul>
@else
    <p>No articles written.</p>
@endif

<a href="/writer" class="btn btn-secondary mt-4">Back</a>

@endsection
