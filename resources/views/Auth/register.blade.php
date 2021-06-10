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
</head>
<body>
    <div class="registration-form">
        <form>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="name" placeholder="Nama">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="umur" placeholder="Umur">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account" onclick="document.location='index.html'">Create Account</button>
                <div class="signup">Sudah punya akun? <a href="{{ url('login') }}">Login</a></div>
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
