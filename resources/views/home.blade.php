@extends('layouts.app')

@section('content')
<div class="container">
    <section class="hero-video">
        <video src="{{ asset('video/wdtw.mp4') }}" autoplay muted loop playsinline class="full-video"></video>
    </section>

    <section class="events_section" id="updates">
        <h1>UPDATES</h1>
        <p>We embrace collaboration, experimentation, and bold ideas, creating a space where students, alumni, professionals, and the local community can come together to push boundaries and explore the future of design. The event's visual identity follows our principle that the medium dictates the design, using RGB for digital, CMYK for print, and RISO for risography—reinforcing the connection between process and meaning.</p>

        <div class="events">
            @foreach($posts as $post)
                <div class="event">
                    @if($post->image)
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                        </a>
                    @endif
                    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                    <div class="event-content">
                        {!! Str::limit(strip_tags($post->body), 150) !!}
        
                    </div>
                </div>
            @endforeach
        </div>  
    </section>

    <section class="playground_section" id="playground">
        <h1>PLAYGROUND</h1>
        <p>
            Design is a tool, the world our playground. Design is more than just form and function—it's a way to shape reality, challenge perspectives, and create meaningful impact. Whether through digital experiences, motion design, UX, branding, or speculative futures, design empowers us to reimagine the possible.  
        </p>
    </section>
</div>
@endsection
