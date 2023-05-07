<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='@yield('Description')'>
    <title>@yield('Title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-c27a9d2b.css') }}"> --}}
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    <main>
        @yield('Content')
    </main>

    <footer>
        <div class="copyright">
            <p>&#169;2023 La Table du Sucré & Salé</p>
        </div>
    </footer>
    {{-- <script src="{{ asset('build/assets/app-48f0b1cc.js') }}"></script> --}}
</body>

</html>
