<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="AdminKit">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/theme.css')
    @yield('css-files')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>

<body>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>

@vite('resources/js/app.js')
<script  type="text/javascript">
    @yield('javascript')
</script>
@yield('js-files')

</body>
</html>
