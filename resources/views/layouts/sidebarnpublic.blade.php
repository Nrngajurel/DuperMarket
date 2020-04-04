<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
</head>
<body>
<div id="app" class="my-auto">
    <header>
        <x-npublic.header />
    </header>

    <main class="">
       <div class="container-fluid">
           <div class="row">

               <div class="col-md-3 sidebar border-top border-bottom">

                   <x-npublic.sidebar style="padding-left: 120px"/>
               </div>
               <div class="col-md-9">
                   @yield('main')
               </div>

           </div>
       </div>

    </main>

    <footer class="footer">
        <x-npublic.footer/>

    </footer>

</div>

</body>
</html>

