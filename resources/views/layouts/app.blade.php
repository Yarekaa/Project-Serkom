<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beasiswa</title>
    <link rel="shortcut icon" href="https://www.cft.org/sites/main/files/imagecache/medium/main-images/scholarship-application-portal_is-1220073028_0.png?1637609139">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.navigation')

    <main class="container mx-auto">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>