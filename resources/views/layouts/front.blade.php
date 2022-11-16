<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset ('admin/css/custom.css') }}" rel="stylesheet">
 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
 <link href="{{ asset ('admin/css/custom.css') }}" rel="stylesheet">
<!-- Nucleo Icons -->
<link href="{{asset('../assets/css/nucleo-icons.css')}} " rel="stylesheet" />
<link href="{{asset('../assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('frontend/css/boostrap5.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="{{asset('../assets/css/material-dashboard.css?v=3.0.4"')}}" rel="stylesheet" />
<!-- CSS Files -->
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- @vite([]) --}}
</head>

<body>
    @include('layouts.inc.frontnavbar')
    <div class="content">
        @yield('content')
    </div>


    {{-- script --}}
<script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/js/owl.theme.default.min.js') }}"></script> --}}
<script src="{{asset('../assets/js/core/bootstrap.min.js')}}"></script>
  <!--   Core JS Files   -->

  {{-- <script src="{{ asset('../assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('../assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('../assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('../assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('../assets/js/plugins/chartjs.min.js')}}"></script> --}}
  {{-- <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if(session('status'))
  <script>
    swal("{{ session('status')}}")
  </script>
  @endif
  @yield('script')

</body>
</html>
