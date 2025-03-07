<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/site.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>WDTW</title>
    </head>
    <body>

        <div class="menu-overlay">
            <div class="menu-content">
                <nav class="overlay-menu">
                    <ul>
                        <li><a href="#updates">Updates</a></li>
                        <li><a href="#playground">Playground</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-vimeo"></i></a>
                </div>
            </div>
            <div class="menu-video">
                <video autoplay muted loop playsinline>
                    <source src="{{ asset('video/wdtw.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        <header>
            <div class="btn not-active">
            <span></span>
            <span></span>
            <span></span>
            </div>

            <div class="menu-container">
                <nav>
                    <ul>
                        <li><a href="#updates">Updates</a></li>
                        <li><a class="active" href="#playground">Playground</a></li>
                    </ul>
                </nav>
            </div>

            <div class="tickets-container">
                <nav>
                    <ul>
                        <li><a class="call_to_action" href="#">Tickets</a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <main>
          
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
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                @endif
                                <h2>{{ $post->title }}</h2>
                                <div class="event-content">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        @endforeach
                    </div>  
                </section>

                <section class="playground_section" id="playground">
                    <h1>PLAYGROUND</h1>
                    <p>
                    Design is a tool, the world our playground. Design is more than just form and function—it’s a way to shape reality, challenge perspectives, and create meaningful impact. Whether through digital experiences, motion design, UX, branding, or speculative futures, design empowers us to reimagine the possible.  
                    </p>
                </section>
            </div>

        </main>
        <footer>
            <div class="marquee-container">
                <div class="marquee-item">
                    <span>WDTW</span>
                </div>
                <div class="marquee-item">
                    <span>WDTW</span>
                </div>
                <div class="marquee-item">
                    <span>WDTW</span>
                </div>
                <div class="marquee-item">
                    <span>WDTW</span>
                </div>
                <div class="marquee-item">
                    <span>WDTW</span>
                </div>
                <div class="marquee-item">
                    <span>WDTW</span>
                </div>
            </div>
        </footer>
    </body>
</html>
