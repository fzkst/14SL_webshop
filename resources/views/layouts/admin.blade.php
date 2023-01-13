<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/apple_128_icon.ico')}}" type="image/x-icon">

    {{--     @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="{{ asset('https://kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons+Round')}}" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin/css/material-dashboard.css?v=3.0.4')}} " rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700') }}"/>
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('layouts.inc.sidebar')
    <main class="main-content border-radius-lg">
        @include('layouts.inc.adminnav')
        <div class="content py-4">
            @yield('content')5
        </div>
        @include('layouts.inc.footer')

    </main>


    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/popper.min.js')}}" ></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}" ></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js')}}" ></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js')}}" ></script>
    @yield('scripts')
</body>


