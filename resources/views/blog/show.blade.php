@extends('layouts.app')

@section('title', $post->title . ' - WDTW')

@section('content')
<div class="container">
    <article class="blog-post">
        @if($post->image)
            <div class="blog-post-image">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            </div>
        @endif
        
        <div class="blog-post-content">
            <h1>{{ $post->title }}</h1>
            <div class="post-meta">
                <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                    {{ $post->created_at->format('F j, Y') }}
                </time>
            </div>
            <div class="post-body">
                {!! $post->body !!}
            </div>
            
            <div class="post-footer">
                <a href="{{ url('/#updates') }}" class="back-link">&larr; Back to Updates</a>
            </div>
        </div>
    </article>
</div>
@endsection
