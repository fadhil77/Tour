<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/virtual-reality-glasses.png')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
        <!-- Link Swiper's CSS -->
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min css"/> --}}
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('css/all.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- --------- Owl-Carousel ------------------->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

        <!-- ------------ AOS Library ------------------------- -->
        <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/testimoni.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('css/login.css')}}"> --}}
</head>
<body>
    @include('layout.navbar')

    <main>

        @yield('header')

        @yield('content')

    </main>

        @include('layout.footer')

    @include('layout.script')
</body>
</html>
