<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PaperCraft</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    PaperCraft
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        <div class="footer text-white bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h3>About us</h3>
                        <p>
                            We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
                        </p>
                        <p>© Company Inc.</p>
                    </div>
                    <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <h3>Contact</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                        <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                        <p><i class="fab fa-skype"></i> Skype: you_online</p>
                    </div>
                    <div class="col-md-4 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a class="scroll-link" href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#top-content">Home</a></p>
                                <p><a href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#">Features</a></p>
                                <p><a href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#">How it works</a></p>
                                <p><a href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#">Our clients</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#">Plans &amp; pricing</a></p>
                                <p><a href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#">Affiliates</a></p>
                                <p><a href="https://azmind.com/demo/bootstrap-footer/template-1/index.html#">Terms</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
