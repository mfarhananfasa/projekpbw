<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('dokter/css/template.css')}}">
    <link rel="stylesheet" href="{{asset('dokter/css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('dokter/css/style.css')}}" />

</head>
<body>
    <div class="registration-form">
        <form class="mb-5" action="{{ route('auth.create') }}" method="post">
        @csrf
            <div class="result">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
            </div>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="username" id="username" placeholder="Username" value="{{ old('username')}}">
                <span class="text-danger">@error('username'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" id="password" placeholder="Password">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nama" id="nama" placeholder="Nama" value="{{ old('nama')}}">
                <span class="text-danger">@error('nama'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="umur" id="umur" placeholder="Umur" onkeypress="return hanyaAngka(event)" value="{{ old('umur')}}">
                <span class="text-danger">@error('umur'){{ $message }} @enderror</span>
            </div>
            <script>
                function hanyaAngka(event){
                var angka = (event.which) ? event.which : event.keyCode
                if (angka != 46 && angka > 31 && (angka < 48 || angka > 57)){
                    return false;
                }
                return true;
            }
            </script>
            <div class="form-group">
                <input type="text" class="form-control item" name="alamat" id="alamat" placeholder="Alamat" value="{{ old('alamat')}}">
                <span class="text-danger">@error('alamat'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Create Account</button>
                <div class="signup">Sudah punya akun? <a href="{{ url('login') }}">Login</a></div>
                <div class="signup">kembali ke <a href="{{ url('/') }}">Home</a></div>
            </div>
        </form>

        <footer class="text-light text-center pb-2">
            <div class="font-monospace">Kelompok 2<br>© 2021. All rights reserved</br></div>
        </footer>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="projek1/js/template.js"></script>
</body>
</html>
