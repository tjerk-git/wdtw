@extends('layouts.app')

@section('content')
<div class="container">
    <section class="hero-video">
        <video src="{{ asset('video/wdtw.mp4') }}" autoplay muted loop playsinline class="full-video"></video>
    </section>

    <section class="events_section" id="updates">
        <h1>{{ \App\Models\Settings::getSetting('events_section_title', 'UPDATES') }}</h1>

        <div class="events">
            @foreach($updates as $post)
                <div class="event">
                    @if($post->image)
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                        </a>
                    @endif
                    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                    <div class="event-content">
                        {!! Str::limit(strip_tags($post->content), 150) !!}
                    </div>
                </div>
            @endforeach
        </div>  
    </section>

    <section class="playground_section" id="playground">
        <h1>{{ \App\Models\Settings::getSetting('playground_section_title', 'PLAYGROUND') }}</h1>


        <div class="events">
            @foreach($events as $post)
                <div class="event">
                    @if($post->image)
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                        </a>
                    @endif
                    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                    <div class="event-content">
                        {!! Str::limit(strip_tags($post->content), 150) !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
