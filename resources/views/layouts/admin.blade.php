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
 {{--    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" /> kivettem --}}
    <!-- Font Awesome Icons -->
    <script src="{{ asset('https://kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    {{-- <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons+Round')}}" rel="stylesheet"> kivettem --}}
    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="{{ asset('admin/css/material-dashboard.css?v=3.0.4')}} " rel="stylesheet" /> kivettem --}}
{{-- kivettem    <link rel="stylesheet" type="text/css" href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700') }}"/>
 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('admin/css/navbars.css')}}">
</head>

{{-- <body class="g-sidenav-show  bg-gray-100"> --}}
    {{-- @include('layouts.inc.sidebar')
    <main class="main-content border-radius-lg">
        @include('layouts.inc.adminnav')
        <div class="content py-4">
            @yield('content')
        </div>
        @include('layouts.inc.footer')

    </main> --}}
<body>
    @include('layouts.inc.navbars')
    <main>
        @yield('content')
    </main>
</div>
</div>
</div>

    <!--   Core JS Files   -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="{{ asset('admin/js/perfect-scrollbar.min.js')}}" ></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js')}}" ></script> kivettem --}}

    @if (session('message: '))
        <script>
            swal("{{ session('message: ') }}")
        </script>
    @endif
    @if (session('status'))
        <script>
            swal("{{ session('status') }}")
        </script>
    @endif
    @yield('scripts')
</body>


