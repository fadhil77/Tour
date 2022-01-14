<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    {{-- <link rel="stylesheet" href="css/login.css" /> --}}
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset_login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset_login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('asset_login/css/style.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>
    @yield('content')

    <script src="{{ asset('asset_login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/main.js') }}"></script>
  </body>
</html>
