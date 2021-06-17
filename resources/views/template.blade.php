<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Vendor CSS Files -->
    <link href="{{asset('dokter/assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('dokter/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dokter/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dokter/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dokter/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dokter/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('dokter/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('dokter/css/home.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('dokter/css/style.css')}}" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(#1763a5, #125997)">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Praktek Dokter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pasien') }}">Pasien</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('dok') }}">Info dokter</a>
                </li>
            @endauth
            <li></li>
        </ul>
        </div>
        @auth
            <form action="logout" method="post">
                @csrf
                <button type="submit" class="btn btn-danger float-end shadow">Logout</button>
            </form>
        @endauth
        @guest
            <a href="{{ url('login') }}" class="btn float-end shadow me-2" style="background-color: #45A8F6; color: white">Login</a>
            <a href="{{ url('register') }}" class="btn float-end shadow" style="background-color: white; color: black">Sign Up</a>
        @endguest
    </div>
    </nav>
    <!-- Navbar end -->

    @yield('isi')

    <!-- ======= Footer ======= -->
    <footer>
        <p>Kelompok 2 © 2021. All rights reserved</p>
    </footer>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{asset('dokter/')}}assets/vendor/aos/aos.js"></script>
    <script src="{{asset('dokter/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dokter/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{asset('dokter/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('dokter/')}}assets/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('dokter/')}}assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{asset('dokter/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('dokter/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @include('sweetalert::alert')
    <!-- CSS -->
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> -->

</body>
</html>
