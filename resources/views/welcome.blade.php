@extends('template')
@section('title','Home')

<<<<<<< Updated upstream
@section('isi')
=======
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
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(#1aa4b8, #1a84b8)">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Praktek Dokter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('pasien') }}">Pasien</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dok') }}">Info dokter</a>
            </li>
            <li></li>
          </ul>
        </div>

          <div class="btn-toolbar mx-2">
              <a type="button" href="{{ url('login') }}" class="btn btn-success">Login</a>
          </div>
          <div class="btn-toolbar mx-2">
            <a type="button" href="{{ url('register') }}" class="btn btn-success">Sign Up</a>
          </div>

      </div>
    </nav>
    <!-- Navbar end -->

    <!-- menu home -->
>>>>>>> Stashed changes
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
        <div class="row">
            <div class="col-xl-6">
            <h1>websites Praktek Dokter</h1>
            <h2>Website untuk mengatur jadwal temu dengan dokter</h2>
<<<<<<< Updated upstream
            <a href="#" class="btn-get-started">Atur jadwal</a>
            </div>
        </div>
=======
            <a href="{{ url('login') }}" class="btn-get-started">Atur jadwal</a>
          </div>
>>>>>>> Stashed changes
        </div>
    </section>
@endsection
