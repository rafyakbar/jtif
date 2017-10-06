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
    @if(session()->has('message'))
        <div class="alert alert-info">{{ session()->get('message') }}</div>
    @endif
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Kritik & Saran
            </h3>
        </div>
        <section class="example">
            <div style="max-height: 320px;overflow: auto">
                <table class="table">
                    <thead>
                    <th width="70%">Isi</th>
                    <th width="20%">Waktu</th>
                    <th width="10%">Aksi</th>
                    </thead>
                    <tbody>
                    @foreach(\App\KritikSaran::orderBy('created_at', 'desc')->get() as $item)
                        <tr>
                            <td>{{ $item->isi }}</td>
                            <td>{{ Carbon\Carbon::createFromTimestamp(strtotime($item->created_at))->diffForHumans() }}</td>
                            <td>
                                <form action="{{ route('hapus.kritik_dan_saran') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="submit" value="Hapus" class="btn btn-oval btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection