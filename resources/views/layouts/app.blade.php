<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='@yield('Description')'>
    <title>@yield('Title')</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    <main>
        {{-- @yield('Content') --}}
    </main>

    <footer>
        <div class="copyright">
            <p>&#169;2022 La Table du Sucré & Salé</p>
        </div>
    </footer>
</body>

</html>
