
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  
    <link rel="stylesheet" type="text/css" href="{{asset('dokter/css/style.css')}}" />
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
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{ url('pasien') }}">Pasien</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dok') }}">Info dokter</a>
            </li>
            <li></li>
          </ul>
        </div>
        <button type="button" class="btn btn-danger float-end shadow" onclick="document.location='index.html'">Keluar</button>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Isi start -->
    <section>

      <div class="col-md-8 mt-5 ms-4">
        <h1>Tabel Pasien</h1>

        <form class="d-flex col-md-7 mb-3 mt-3">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-primary table-striped text-center">
          <div class="container">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pilihan Jadwal</th>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">78</th>
                <td>Hasan</td>
                <td>30</td>
                <td>Lampineung</td>
                <td>
                  <select name="jadwal">
                    <option>Pilih jadwal</option>
                    <option value="jwl1">10.00-10.15</option>
                    <option value="j2l2">10.15-10.30</option>
                    <option value="jwl3">10.30-10.45</option>
                    <option value="jwl4">10.45-11.00</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="row">20</th>
                <td>Siti</td>
                <td>45</td>
                <td>Peurada</td>
                <td>9.45-10.00</td>
              </tr>
              <tr>
                <th scope="row">65</th>
                <td>Kevin</td>
                <td>21</td>
                <td>Neusu</td>
                <td>9.30-9.45</td>
                
                
              </tr>
            </tbody>
          </div>
        </table>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1aa4b8" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    </section>

    <!-- Isi end -->

    <!-- Footer start -->
    <footer>
      <p>Kelompok 2<br />© 2021. All rights reserved</p>
    </footer>
    <!-- Footer end -->
  </body>
</html>
