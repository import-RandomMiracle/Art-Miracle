<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Art Miracle</title>
    @vite('resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js')
    @livewireStyles
</head>
<body>
    <nav>

    </nav>

    <div class="mx-auto max-w-6xl">
        @yield('content')
    </div>
        @livewireScripts
</body>
</html>
