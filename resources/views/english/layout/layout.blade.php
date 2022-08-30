<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('header')

    {{-- +++++++++++++++++++++++++ CSS Links +++++++++++++++++++++++++ --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    {{-- ------------------------- CSS Links ------------------------- --}}

    {{-- +++++++++++++++++++++++++ Bootstrap CSS Links +++++++++++++++++++++++++ --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- ------------------------- Bootstrap CSS Links ------------------------- --}}

    {{-- +++++++++++++++++++++++++ JQuery +++++++++++++++++++++++++ --}}
    <script src="{{ asset('assets/Packages/jquery/jquery-3.6.0.min.js') }}"></script>
    {{-- ------------------------- JQuery ------------------------- --}}

    {{-- +++++++++++++++++++++++++ Owl Carousel +++++++++++++++++++++++++ --}}
    <link rel="stylesheet" href="{{ asset('assets/Packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}">
    {{-- ------------------------- Owl Carousel ------------------------- --}}

    {{-- +++++++++++++++++++++++++ AJAX +++++++++++++++++++++++++ --}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    {{-- ------------------------- AJAX ------------------------- --}}

    {{-- +++++++++++++++++++++++++ Magnific Popup +++++++++++++++++++++++++ --}}
    <link rel="stylesheet" href="{{ asset('assets/Packages/Magnific-Popup/magnific-popup.css') }}">
    <script src="{{ asset('assets/Packages/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
    {{-- ------------------------- Magnific Popup ------------------------- --}}


</head>

<body>

    {{-- Include Header --}}
    @include('english\layout\include\header')
    {{-- Include Alerts --}}
    @include('english\layout\include\alert')

    {{-- Yeild Content --}}
    <main>
        @yield('content')
    </main>
    {{-- Include Footer --}}
    @include('english\layout\include\footer')

    {{-- Bootstrap JS Link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    {{-- Linking JS File --}}
    <script src="{{ asset('assets/js/scripts.js') }}" defer></script>
</body>

</html>
