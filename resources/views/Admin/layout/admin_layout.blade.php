<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- +++++++++++++++++++++++++  +++++++++++++++++++++++++ --}}



    {{-- -------------------------  ------------------------- --}}



    {{-- +++++++++++++++++++++++++ Bootstrap +++++++++++++++++++++++++ --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- ------------------------- Bootstrap ------------------------- --}}



    {{-- +++++++++++++++++++++++++ CSS Links +++++++++++++++++++++++++ --}}

    <link rel="stylesheet" href="{{ asset('assets/css/admin_Styles.css') }}">

    {{-- ------------------------- CSS Links ------------------------- --}}



    {{-- +++++++++++++++++++++++++ JQuery +++++++++++++++++++++++++ --}}

    <script src="{{ asset('assets/Packages/jquery/jquery-3.6.0.min.js') }}"></script>

    {{-- ------------------------- JQuery ------------------------- --}}



    {{-- +++++++++++++++++++++++++ Font Awesome +++++++++++++++++++++++++ --}}



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">



    {{-- ------------------------- Font Awesome ------------------------- --}}




    @yield('header')

</head>

<body>

    <header>
        @include('Admin.layout.Includes.header')
    </header>



    <aside id="sidebar">
        @include('Admin.layout.Includes.sidebar')
    </aside>



    <main id="page-content-wrapper">
        @yield('content')
    </main>



    <footer>

    </footer>

    {{-- +++++++++++++++++++++++++ Bootstrap +++++++++++++++++++++++++ --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    {{-- ------------------------- Bootstrap ------------------------- --}}

    {{-- +++++++++++++++++++++++++ Js Files +++++++++++++++++++++++++ --}}
    <script src="{{ asset('assets/js/admin_Scripts.js') }}" defer></script>
    {{-- ------------------------- Js Files ------------------------- --}}
</body>

</html>
