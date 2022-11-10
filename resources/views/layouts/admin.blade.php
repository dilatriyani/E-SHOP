<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css"
 href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<!-- CSS Files -->
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite([])
</head>

<body class="g-sidenav-show  bg-gray-200">
        @include('layouts.inc.sidebar')
        <main class="main-content border-radius-lg ">
        @include('layouts.inc.adminnav')

        <div class="container-fluid py-4">
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('layouts.inc.adminfooter')
     </main>

     
    {{-- script --}}
    

  <!--   Core JS Files   -->
  
  <script src="{{ asset('../assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('../assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('../assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('../assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('../assets/js/plugins/chartjs.min.js')}}"></script>
  @yield('script')
</body>

</html>
