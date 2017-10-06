@extends('layouts.adminlayout')

@section('content')
    @include('mceImageUpload::upload_form')
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Daftar prodi &nbsp;&nbsp;&nbsp;
                <button class="btn btn-oval btn-primary" data-toggle="modal" data-target="#tambah">Tambah prodi</button>
            </h3>
        </div>
        <section class="example">
            @foreach(\App\Prodi::orderBy('nama')->get() as $item)
                <div class="card-block">
                    <section class="example">
                        <form action="{{ route('update.prodi') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control underlined" value="{{ $item->nama }}">
                            <br>
                            {{--{!! str_replace('<img', '<img class="img img-responsive"', $item->keterangan) !!}--}}
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="25" name="keterangan">
                                    {{ $item->keterangan }}
                                </textarea>
                            <br>
                            <label>File</label>
                            <input type="file" name="dir" class="form-control">
                            <br>
                            @if(!is_null($item->dir))
                                <a href="{{ asset($item->dir) }}">link download sebelumnya</a>
                            @endif
                            <div class="btn-group">
                                <input type="submit" class="btn btn-pill-left btn-primary btn-sm" value="Simpan">
                                <button class="btn btn-pill-right btn-danger btn-sm"
                                        onclick="event.preventDefault(); document.getElementById('{{ $item->id }}').submit();">
                                    Hapus
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
                <hr>
                <form action="" method="post" id="{{ $item->id }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $item->id }}">
                </form>
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah prodi</h5>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('tambah.prodi') }}" method="post" enctype="multipart/form-data"
                                      id="tambah-submit">
                                    {{ csrf_field() }}
                                    <label>Nama</label>
                                    <input type="text" class="form-control underlined" name="nama" required>
                                    <br>
                                    <label>Keterangan</label>
                                    <textarea class="form-control" rows="25" name="keterangan"></textarea>
                                    <br>
                                    <label>File (jika ada)</label>
                                    <input type="file" name="dir" class="form-control">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button class="btn btn-primary"
                                        onclick="event.preventDefault(); document.getElementById('tambah-submit').submit();">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection