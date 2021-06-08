
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  </head>
  
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="{{asset('dokter/css/style.css')}}" />

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
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('pasien') }}">Pasien</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{ url('dok') }}">Info dokter</a>
            </li>
            <li></li>
          </ul>
        </div>
        <button type="button" class="btn btn-danger float-end shadow" onclick="document.location='index.html'">Keluar</button>
      </div>
    </nav>
    <!-- Navbar end -->
    
    <!-- dokter -->
    <div id="dokter">
      <div class="container">
        <div class="row">
          <div class="col text-center p-3">
            <h2 style="color: rgb(0, 0, 0)"><b>Info Dokter</b></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-4" style="margin-left: 33%">
            <div class="card">
              <img src="{{asset('dokter/img/2.jpg')}}"class="card-img-top" alt="1" />
              <div class="card-body">
                <h5 class="card-title"><b>dr. Edwin Ongkorahardjo</b></h5>
                <p class="card-text">dr. Edwin Ongkorahardjo adalah seorang Dokter Spesialis neurologi.</p>

                <!-- pop up 1-->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button>
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">dr. Edwin Ongkorahardjo</h4>
                      </div>
                      <div class="modal-body">
                        <p>Layanan kesehatan yang dapat beliau berikan berupa konsultasi penyakit dan gangguan saraf. Jam Layanan <b>Senin-Kamis Pukul 09.00-11.00</b></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#1aa4b8"
          fill-opacity="1"
          d="M0,288L0,0L110.8,0L110.8,160L221.5,160L221.5,96L332.3,96L332.3,192L443.1,192L443.1,32L553.8,32L553.8,96L664.6,96L664.6,32L775.4,32L775.4,128L886.2,128L886.2,32L996.9,32L996.9,192L1107.7,192L1107.7,224L1218.5,224L1218.5,64L1329.2,64L1329.2,160L1440,160L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"
        ></path>
      </svg>
    </div>

    <!-- akhir dokter -->
    <!-- Footer start -->
    <footer>
      <p>Kelompok 2<br />© 2021. All rights reserved</p>
    </footer>
    <!-- Footer end -->
  </body>
</html>
