@extends('layouts.adminlayout')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="card card-block">
                <div class="title-block">
                    <h4 class="title"> Database</h4>
                </div>
                <section class="example">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-database fa-4x"></i>
                        </div>
                        <div class="col-sm-8">
                            <strong>
                                <small>Ukuran database</small>
                            </strong>
                            <p>{{ $db[0]->ukuran }} KB</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-block">
                <div class="title-block">
                    <h4 class="title"> Pegawai</h4>
                </div>
                <section class="example">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="col-sm-8">
                            <strong>
                                <small>Jumlah pegawai</small>
                            </strong>
                            <p>{{ \App\Pegawai::count() }} orang</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-block">
                <div class="title-block">
                    <h4 class="title"> Post</h4>
                </div>
                <section class="example">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-files-o fa-4x"></i>
                        </div>
                        <div class="col-sm-8">
                            <strong>
                                <small>Jumlah post</small>
                            </strong>
                            <p>{{ \App\Post::count() }} post</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card card-block">
                <div class="title-block">
                    <h4 class="title"> Prasarana</h4>
                </div>
                <section class="example">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-laptop fa-4x"></i>
                        </div>
                        <div class="col-sm-8">
                            <strong>
                                <small>Jumlah prasarana</small>
                            </strong>
                            <p>{{ \App\Prasarana::count() }} prasarana</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection