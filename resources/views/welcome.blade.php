<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

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
              <a class="nav-link active" aria-current="page" href="{{ url('welcome') }}">Home</a>
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
        <button type="button" class="btn btn-success float-end shadow">Login</button>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- menu home -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <h1>websites Praktek Dokter</h1>
            <h2>Website untuk mengatur jadwal temu dengan dokter</h2>
            <a href="#" class="btn-get-started">Atur jadwal</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End home -->

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
  </body>
</html>
