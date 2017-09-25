<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Website Jurusan Teknik Informatika Unesa </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <!-- Theme initialization -->
    <link rel="stylesheet" href="{{asset('css/appadm.css')}}">
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
        var themeName = themeSettings.themeName || '';
        if (themeName) {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        }
        else {
            document.write('<link rel="stylesheet" id="theme-style" href="{{asset('css/appadm.css')}}css/app.css">');
        }
    </script>
</head>
<body>
<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div>
                    Admin JTIf
                </h1>
            </header>
            <div class="auth-content">
                <form id="login-form" method="post" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" class="form-control underlined" name="email" id="username"  style="padding-left: 1%;padding-right: 1%" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control underlined" name="password" style="padding-left: 1%;padding-right: 1%" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="remember">
                            <input class="checkbox" id="remember" type="checkbox" name="remember">
                            <span>Ingat</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i> Kembali ke web jurusan </a>
        </div>
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>
</html>