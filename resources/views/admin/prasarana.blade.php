@extends('layouts.adminlayout')

@section('content')
    @include('mceImageUpload::upload_form')
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Daftar prasarana&nbsp;&nbsp;&nbsp;
                <button class="btn btn-oval btn-primary" data-toggle="modal" data-target="#tambah">Tambah post</button>
            </h3>
        </div>
        <section class="example">
            <table class="table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Prasarana::all() as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->nama }}</strong>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">Lihat galeri</a>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#edit-{{ $item->id }}">Edit</button>
                            <button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('hapus-{{ $item->id }}').submit();">
                                Hapus
                            </button>
                        </td>
                    </tr>
                    <form action="{{ route('hapus.prasarana') }}" method="post" id="hapus-{{ $item->id }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}">
                    </form>
                    <div class="modal fade" id="edit-{{ $item->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('update.prasarana') }}" method="post" id="form-{{ $item->id }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <label>Nama</label>
                                        <input type="text" class="form-control underlined" name="nama" value="{{ $item->nama }}">
                                        <br>
                                        <label>Keterangan</label>
                                        <textarea name="keterangan">{{ $item->keterangan }}</textarea>
                                        {{--<br>--}}
                                        {{--<input type="submit" class="btn btn-primary" value="Simpan">--}}
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('form-{{ $item->id }}').submit();">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah prasarana</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah.prasarana') }}" method="post" id="tambah-form">
                        {{ csrf_field() }}
                        <label>Nama</label>
                        <br>
                        <input type="text" name="nama" class="form-control underlined">
                        <br>
                        <label>Keterangan</label>
                        <br>
                        <textarea name="keterangan"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('tambah-form').submit();">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection