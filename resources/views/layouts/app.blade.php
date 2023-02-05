<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='@yield('Description')'>
    {{-- <script src="node_modules\jquery\dist\jquery.min.js"></script> --}}
    {{-- <link href="vendor\twbs\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="public\styles\template.css"> --}}
    {{-- <link rel="stylesheet" href="@yield('Css')"> --}}
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <title>@yield('Title')</title>
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
            <p>&#169;2022 La Table du Sucré & Salé</p>
        </div>
    </footer>
    {{-- <script src="vendor\twbs\bootstrap\dist\js\bootstrap.bundle.min.js"></script> --}}
</body>


</html>
