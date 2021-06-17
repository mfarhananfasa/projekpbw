<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('dokter/css/login.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('dokter/css/style.css')}}" />

    <title>Login</title>
    <!-- Form Login -->
  </head>
  <body>
    <div class="registration-form">
        <form action="{{ route('auth.check') }}" method="post">
        @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="username" id="username" placeholder="Username" value="{{ old('username') }}" />
                <span class="text-danger">@error('username'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" id="password" placeholder="Password" />
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block login">Login</button>
                <div class="signup">Tidak memiliki akun? <a href="{{ url('register') }}">Buat akun</a></div>
                <div class="signup">kembali ke <a href="{{ url('/') }}">Home</a></div>
            </div>
        </form>
    </div>
    <!-- Akhir Form Login -->

    <!-- Footer -->
    <footer class="text-light text-center pb-2">
        <div class="font-monospace">Kelompok 2<br>© 2021. All rights reserved</br></div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
