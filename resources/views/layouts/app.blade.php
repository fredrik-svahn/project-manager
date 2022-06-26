<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
        <nav class="navbar fixed-top navbar-expand-md light">
            <div class="container">
                <a class="navbar-brand" style="color: white" href="/">Hem</a>
                <div class="dropdown show">
                    <a class="navbar-brand btn dropdown-toggle" role="button" id="dropdown-projects" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: white">Mina projekt</a>

                    <div class="dropdown-menu" aria-labelledby="dropdown-projects">
                        <a class="dropdown-item" href="/projects/project-manager">Projekthanterare</a>
                        <a class="dropdown-item" href="/projects/roguelike-game">Roguelike spel</a>
                        <a class="dropdown-item" href="/projects/tetris-clone">Tetris spel</a>
                    </div>
                </div>

                <div class="dropdown show">
                    <a class="navbar-brand" style="color: white" href="/ideas">Projektidéer</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
