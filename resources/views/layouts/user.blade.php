<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Art Miracle</title>
    @vite('resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js')
</head>
<body class="min-h-screen backgroundHome">
    @if($currentUser['data']['role'] == 'USER')
        @include('layouts.navbarmanu')
    @else
        @include('layouts.navbar')
    @endif
    
    @include('layouts.info')



    <div class="mx-auto max-w-6xl">
        @yield('content')
    </div>
</body>
</html>