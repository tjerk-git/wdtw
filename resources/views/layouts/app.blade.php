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
    <body class="{{ Request::is('blog/*') ? 'bg-' . ['rood', 'groen', 'blauw', 'roze'][array_rand(['rood', 'groen', 'blauw', 'roze'])] : '' }}">
        <div class="menu-overlay">
            <div class="menu-content">
                <nav class="overlay-menu">
                    <ul>
                        <li><a href="https://forms.office.com/e/fts4mV0vjY" target="_blank">Tickets</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-icons">
                    <a href="https://www.instagram.com/cmd_lwd/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/nhlstendendbkv/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/nhlstendendocenttheater/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/wdtw/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="menu-video">
                <video autoplay muted loop playsinline>
                    <source src="{{ asset('video/comp1.mp4') }}" type="video/mp4">
                </video>
                <div class="menu-text-about">
                    <h1>{{ \App\Models\Settings::getSetting('about_title', 'About') }}</h1>
                    <p>{{ \App\Models\Settings::getSetting('about_content', 'We are a group of friends who love to play and have fun.') }}</p>
                </div>
                <div class="menu-text-contact">
                    <h1>{{ \App\Models\Settings::getSetting('contact_title', 'Contact') }}</h1>
                    <p>{{ \App\Models\Settings::getSetting('contact_content', 'Get in touch with us.') }}</p>
                </div>
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
                        <li><a class="call_to_action" href="https://forms.office.com/e/fts4mV0vjY">Tickets</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="marquee-container">
                @php
                    $marqueeItems = explode(',', \App\Models\Settings::getSetting('marquee_items', 'WDTW'));
                @endphp
                @foreach(array_merge($marqueeItems, $marqueeItems) as $item)
                    <div class="marquee-item">
                        <span>{{ trim($item) }}</span>
                    </div>
                @endforeach
            </div>
        </footer>
    </body>
</html>
