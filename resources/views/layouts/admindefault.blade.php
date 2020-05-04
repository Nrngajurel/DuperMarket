<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
{{--    <link href="{{ asset('css/admin.min.css')}}" rel="stylesheet">--}}
    @yield('header_scripts')
</head>


<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
        <x-admin.sidebar/>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <x-admin.topbar/>
            <!-- Topbar -->

            <!-- Container Fluid-->
            <x-admin.mainsection/>
            <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <x-admin.footer/>
        <!-- Footer -->
    </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('js/admin.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>

@yield('footer_scripts')

</body>

</html>
