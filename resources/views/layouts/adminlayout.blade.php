<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('Title') Website Jurusan Teknik Informatika Unesa </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('admin/css/vendor.css' ) }}">
    <!-- Theme initialization -->
    <link rel="stylesheet" href="{{ asset('admin/css/app-orange.css') }}">
    <script src="{{ asset('admin/js/vendor.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/appadm.js') }}"></script>
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        $().ready(function () {
            tinymce.init({
                selector: 'textarea',
                entity_encoding : "raw",
                height: 300,
                theme: 'modern',
                plugins: [
                    'image imagetools'
                ],
                toolbar1: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                relative_urls: false,
                file_browser_callback: function(field_name, url, type, win) {
                    // trigger file upload form
                    if (type == 'image') $('#formUpload input').click();
                },
            });

        });
    </script>
</head>
<body>
<div class="main-wrapper">
    <div class="app sidebar-fixed header-fixed">

        <header class="header">
            <div class="header-block header-block-collapse d-lg-none d-xl-none">
                <button class="collapse-btn" id="sidebar-collapse-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="header-block header-block-search">
                Do the Best, Nothing Less !!!
            </div>
            <div class="header-block header-block-buttons">
                <a href="{{ url('/') }}" class="btn btn-sm header-btn" target="_blank">
                    <i class="fa fa-home"></i>
                    <span>Lihat web jurusan</span>
                </a>
            </div>
            <div class="header-block header-block-nav">
                <ul class="nav-profile">
                    <li class="profile dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                            <span class="name"> {{ Auth::user()->name }} </span>
                        </a>
                        <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-gear icon"></i>
                                Pengaturan
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off icon"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
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
                        </div> Admin JTIf </div>
                </div>
                @include('layouts.adminmenu')
            </div>
        </aside>

        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
        <div class="mobile-menu-handle"></div>
        <article class="content dashboard-page">
            @yield('content')
        </article>
        <footer class="footer">
            <div class="footer-block buttons">
                <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                &nbsp;&nbsp;
                <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="footer-block author">
                <ul>
                    <li> created by
                        <a href="https://github.com/rafyakbar" target="_blank">Rafy</a>
                    </li>
                    <li>
                        <a href="https://github.com/Yuschri" target="_blank">Yusuf</a>
                    </li>
                    <li>
                        <a href="" target="_blank">Fachrizal</a>
                    </li>
                    <li>
                        <a href="" target="_blank">Natalia</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</div>
</body>
</html>