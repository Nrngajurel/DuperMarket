<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('header-scripts')
</head>
<body>
<div id="app" class="my-auto">
    <header>
        <x-npublic.header />
    </header>

    <main class="py-4">
        @yield('main')

    </main>

    <footer class="footer">
        <x-npublic.footer/>
        <!-- Scripts -->

        @yield('footer-scripts')
    </footer>

</div>

</body>
</html>

