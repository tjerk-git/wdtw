<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/site.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>@yield('title', 'WDTW')</title>
    </head>
    <body class="{{ Request::is('blog/*') ? 'bg-' . ['rood', 'groen', 'blauw', 'roze', 'geel'][array_rand(['rood', 'groen', 'blauw', 'roze', 'geel'])] : '' }}">
        <div class="menu-overlay">
            <div class="menu-content">
                <nav class="overlay-menu">
                    <ul>
                        <li><a href="{{ url('/#updates') }}">Updates</a></li>
                        <li><a href="{{ url('/#playground') }}">Playground</a></li>
                        <li><a href="{{ url('/#about') }}">About</a></li>
                        <li><a href="{{ url('/#contact') }}">Contact</a></li>
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
                        <li><a href="{{ url('/#updates') }}">Updates</a></li>
                        <li><a href="{{ url('/#playground') }}">Playground</a></li>
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
            @yield('content')
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
