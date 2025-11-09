@extends('layouts.main')

@section('content')

<div class="container mt-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to EduFun!</h1>
            <p class="col-md-8 fs-4">
                A platform where you can learn IT subjects for FREE.
            </p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="mb-4">Latest Articles</h2>
    <div class="row">
        @foreach($latestArticles as $article)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h4>{{ $article->title }}</h4>
                    <p>{{ Str::limit($article->content, 120) }}</p>
                    <small>
                        Posted on 
                        {{ $article->created_at ? $article->created_at->format('d M Y') : 'Unknown date' }} 
                        by {{ $article->writer->name ?? 'Unknown' }}
                    </small>
                </div>
                <div class="card-footer">
                    <a href="{{ route('subject.show', $article->subject_id) }}" class="btn btn-primary btn-sm">
                        Read more…
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection