@extends('layouts.adminlayout')

@section('content')
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
                            <a href="" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah prasarana</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah.pegawai') }}" method="post" id="tambah-form">
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
                    <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('tambah').submit();">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection