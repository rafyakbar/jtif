@extends('layouts.userlanding')

@section('title',"Web Jurusan Teknik Informatika")

@section('landing')
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true"
             style="background-image: url('{{ asset('user/img/header.jpg') }}');">
        </div>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo" src="{{ asset('user/img/ti.png') }}" width="30%" alt="">
                <h1 class="h1-seo"></h1>
                <h3>Selamat Datang di Website Jurusan Teknik Informatika</h3>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section" id="carousel">
        @if(session()->has('message'))
            <div class="alert alert-info">{{ session()->get('message') }}</div>
        @endif
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="{{ asset('user/img/bg1.jpg') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Nature, United States</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('user/img/bg3.jpg') }}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Somewhere Beyond, United States</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('user/img/bg4.jpg') }}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Yellowstone National Park, United States</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                   data-slide="prev">
                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                   data-slide="next">
                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
            </div>
            {{--<div class="row justify-content-center">--}}
            {{--<div class="col-12">--}}
            {{----}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="section">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-12">
                    <h2 class="title">Berita Terbaru</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="justify-content-center" data-background-color="orange">
                                    <h3>Berita 1</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="text-justify">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the nucleus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="justify-content-center" data-background-color="orange">
                                    <h3>Berita 2</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="text-justify">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the nucleus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Tabs with Background on Card -->
                            <div class="card">
                                <div class="justify-content-center" data-background-color="orange">
                                    <h3>Berita 3</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="text-justify">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is the level that things could be at. So when you get something
                                            that has the name Kanye West on it, it’s supposed to be pushing the furthest
                                            possibilities. I will be the leader of a company that ends up being worth
                                            billions of dollars, because I got the answers. I understand culture. I am
                                            the nucleus.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs on plain Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-signup"
         style="background-image: url('{{ asset('user/img/bg11.jpg') }}'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="orange">
                    <form class="form" method="post" action="{{ route('tambah.kritik_dan_saran') }}">
                        {{ csrf_field() }}
                        <div class="header text-center">
                            <h4 class="title title-up">Kritik & Saran</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group form-group-no-border">

                                <textarea name="isi" rows="5" class="form-control"
                                          placeholder="Tulis kritik dan saranmu (minimal 15 karakter) di sini..."
                                          minlength="15"></textarea>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" class="btn btn-neutral btn-round btn-lg" value="Kirim">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-download" id="#download-section" data-background-color="black">
        <div class="container">
            <br>
            <div class="row justify-content-md-center sharing-area text-center">
                <div class="text-center col-md-12 col-lg-8">
                    <h3>Kunjungi halaman sosial kami</h3>

                </div>
                <div class="text-center col-md-12 col-lg-8">
                    <a target="_blank" href="https://www.twitter.com/creativetim"
                       class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/creativetim"
                       class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/"
                       class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit"
                       class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip"
                       title="Star on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection