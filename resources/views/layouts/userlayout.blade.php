<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <!-- CSS Files -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('user/css/now-ui-kit.css') }}" rel="stylesheet"/>
</head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('beranda') }}" data-placement="bottom" target="_blank">
                Jurusan Teknik Informatika
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}">
                        <i class="fa fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('prodi') }}">
                        <i class="fa fa-graduation-cap"></i>
                        <p>Prodi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dosenstaff') }}">
                        <i class="fa fa-users"></i>
                        <p>Dosen & Staff</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sarana') }}">
                        <i class="fa fa-cogs"></i>
                        <p>Sarana Prasarana</p>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown"
                           id="navbarDropdownMenuLink1">
                            <i class="fa fa-bars"></i>
                            <p>Menu Lain</p>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            @foreach(\App\Menu::all() as $menu)
                                <a class="dropdown-item" href="{{ route('listlain',['menu_id'=>$menu->id]) }}">{{ $menu->nama }}</a>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper" style="margin-top: 70px">

    <div class="main">
        @yield('content')
    </div>
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                    <h4 class="title title-up">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                        into your mouth.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Nice Button</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="modal-profile">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Always have an access to your profile</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-neutral">Back</button>
                    <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <footer class="footer" data-background-color="black">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                            MIT License
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('user/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('user/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('user/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('user/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('user/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('user/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('user/js/now-ui-kit.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

</script>

</html>