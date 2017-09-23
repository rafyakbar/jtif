<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

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
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <!-- Theme initialization -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
        var themeName = themeSettings.themeName || '';
        if (themeName)
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        }
        else
        {
            document.write('<link rel="stylesheet" id="theme-style" href="{{asset('css/appadm.css')}}css/app.css">');
        }
    </script>
</head>
<body>
<div class="main-wrapper">
    <div class="app" id="app">

        <header class="header">
            <div class="header-block header-block-collapse d-lg-none d-xl-none">
                <button class="collapse-btn" id="sidebar-collapse-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="header-block header-block-search">
                <form role="search">
                    <div class="input-container">
                        <i class="fa fa-search"></i>
                        <input type="search" placeholder="Search">
                        <div class="underline"></div>
                    </div>
                </form>
            </div>
            <div class="header-block header-block-buttons">
                <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn">
                    <i class="fa fa-github-alt"></i>
                    <span>View on GitHub</span>
                </a>
                <a href="https://github.com/modularcode/modular-admin-html/stargazers" class="btn btn-sm header-btn">
                    <i class="fa fa-star"></i>
                    <span>Star Us</span>
                </a>
                <a href="https://github.com/modularcode/modular-admin-html/releases" class="btn btn-sm header-btn">
                    <i class="fa fa-cloud-download"></i>
                    <span>Download .zip</span>
                </a>
            </div>
            <div class="header-block header-block-nav">
                <ul class="nav-profile">
                    <li class="notifications new">
                        <a href="" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <sup>
                                <span class="counter">8</span>
                            </sup>
                        </a>
                        <div class="dropdown-menu notifications-dropdown-menu">
                            <ul class="notifications-container">
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p>
                                                <span class="accent">Zack Alien</span> pushed new commit:
                                                <span class="accent">Fix page load performance issue</span>. </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p>
                                                <span class="accent">Amaya Hatsumi</span> started new task:
                                                <span class="accent">Dashboard UI design.</span>. </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p>
                                                <span class="accent">Andy Nouman</span> deployed new version of
                                                <span class="accent">NodeJS REST Api V3</span>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer>
                                <ul>
                                    <li>
                                        <a href=""> View All </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </li>
                    <li class="profile dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div>
                            <span class="name"> John Doe </span>
                        </a>
                        <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user icon"></i> Profile </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-bell icon"></i> Notifications </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-gear icon"></i> Settings </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.html">
                                <i class="fa fa-power-off icon"></i> Logout </a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        <aside class="sidebar">

            <div class="sidebar-container">
                <div class="sidebar-header">
                    <div class="brand">
                        <div class="logo">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> Modular Admin </div>
                </div>
                <nav class="menu">
                    <ul class="sidebar-menu metismenu" id="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-home"></i> Dashboard </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-th-large"></i> Items Manager
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="items-list.html"> Items List </a>
                                </li>
                                <li>
                                    <a href="item-editor.html"> Item Editor </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-bar-chart"></i> Charts
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="charts-flot.html"> Flot Charts </a>
                                </li>
                                <li>
                                    <a href="charts-morris.html"> Morris Charts </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-table"></i> Tables
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="static-tables.html"> Static Tables </a>
                                </li>
                                <li>
                                    <a href="responsive-tables.html"> Responsive Tables </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="forms.html">
                                <i class="fa fa-pencil-square-o"></i> Forms </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-desktop"></i> UI Elements
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="buttons.html"> Buttons </a>
                                </li>
                                <li>
                                    <a href="cards.html"> Cards </a>
                                </li>
                                <li>
                                    <a href="typography.html"> Typography </a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons </a>
                                </li>
                                <li>
                                    <a href="grid.html"> Grid </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-file-text-o"></i> Pages
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="login.html"> Login </a>
                                </li>
                                <li>
                                    <a href="signup.html"> Sign Up </a>
                                </li>
                                <li>
                                    <a href="reset.html"> Reset </a>
                                </li>
                                <li>
                                    <a href="error-404.html"> Error 404 App </a>
                                </li>
                                <li>
                                    <a href="error-404-alt.html"> Error 404 Global </a>
                                </li>
                                <li>
                                    <a href="error-500.html"> Error 500 App </a>
                                </li>
                                <li>
                                    <a href="error-500-alt.html"> Error 500 Global </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-sitemap"></i> Menu Levels
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Second Level Item
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="#"> Third Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Third Level Item </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Second Level Item </a>
                                </li>
                                <li>
                                    <a href="#"> Second Level Item
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="#"> Third Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Third Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Third Level Item
                                                <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Fourth Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Fourth Level Item </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://github.com/modularcode/modular-admin-html">
                                <i class="fa fa-github-alt"></i> Theme Docs </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <footer class="sidebar-footer">
                <ul class="sidebar-menu metismenu" id="customize-menu">
                    <li>
                        <ul>
                            <li class="customize">
                                <div class="customize-item">
                                    <div class="row customize-header">
                                        <div class="col-4"> </div>
                                        <div class="col-4">
                                            <label class="title">fixed</label>
                                        </div>
                                        <div class="col-4">
                                            <label class="title">static</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="title">Sidebar:</label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="sidebarPosition" value="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="title">Header:</label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="headerPosition" value="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="title">Footer:</label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="footerPosition" value="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="customize-item">
                                    <ul class="customize-colors">
                                        <li>
                                            <span class="color-item color-red" data-theme="red"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-orange" data-theme="orange"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-green active" data-theme=""></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-blue" data-theme="blue"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-purple" data-theme="purple"></span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a href="">
                            <i class="fa fa-cog"></i> Customize </a>
                    </li>
                </ul>
            </footer>
        </aside>

        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
        <div class="mobile-menu-handle"></div>
        <article class="content dashboard-page">

            @yield('content')

        </article>
        <footer class="footer">
            <div class="footer-block buttons">
                <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe>
            </div>
            <div class="footer-block author">
                <ul>
                    <li> created by
                        <a href="https://github.com/modularcode">ModularCode</a>
                    </li>
                    <li>
                        <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a>
                    </li>
                </ul>
            </div>
        </footer>
        <div class="modal fade" id="modal-media">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Media Library</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body modal-tab-container">
                        <ul class="nav nav-tabs modal-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                            </li>
                        </ul>
                        <div class="tab-content modal-tab-content">
                            <div class="tab-pane fade" id="gallery" role="tabpanel">
                                <div class="images-container">
                                    <div class="row"> </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                <div class="upload-container">
                                    <div id="dropzone">
                                        <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                            <div class="dz-message-block">
                                                <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Insert Selected</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="confirm-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-warning"></i> Alert</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to do this?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/appadm.js') }}"></script>
</body>
</html>