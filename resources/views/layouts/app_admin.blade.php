<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body class="d-flex flex-column h-100 bg-secondary">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    MotorCycle
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

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-secondary">
            @yield('content')
        </main>
    </div>

<footer class="footer mt-auto">
        <div class="text-white bg-dark">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-md-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h3>会社概要</h3>
                        <p>
                            革製品の製造販売、受注製作を行っております
                        </p>
                        <p>© Company Inc.</p>
                    </div>
                    <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <h3>お問い合わせ先</h3>
                        <p><i class="fas fa-map-marker-alt"></i>東京都渋谷区</p>
                        <p><i class="fas fa-phone"></i> 電話番号: (0957) 000 000</p>
                        <p><i class="fas fa-envelope"></i> Eメール: <a href="mailto:hello@domain.com">leather@craft.com</a></p>
                    </div>
                    <div class="col-md-4 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col">
                                <h3>リンク</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a class="scroll-link" href="/home">ホーム</a></p>
                                <p><a href="/product">商品一覧</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="/customorder">受注製作</a></p>
                                <p><a href="/contact">お問い合わせ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
