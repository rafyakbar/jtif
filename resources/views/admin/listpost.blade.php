@extends('layouts.adminlayout')

@section('content')
    @include('mceImageUpload::upload_form')
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Tambah post
            </h3>
        </div>
        <section class="example">
            <form action="{{ route('tambah.post') }}" method="post" enctype="multipart/form-data" id="tambah">
                {{ csrf_field() }}
                <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                <label>Judul</label>
                <input type="text" class="form-control underlined" name="judul" required>
                <br>
                <label>Isi</label>
                <textarea name="isi" required></textarea>
                <br>
                <label>File</label>
                <input type="file" name="dir" class="form-control">
            </form>
            <br>
            <button class="btn btn-oval btn-primary" onclick="event.preventDefault(); document.getElementById('tambah').submit();">Tambah post</button>
        </section>
    </div>

    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Daftar post&nbsp;&nbsp;&nbsp;
                <button class="btn btn-oval btn-primary" data-toggle="modal" data-target="#tambah">Tambah pegawai</button>
            </h3>
        </div>
        <section class="example">
            <table class="table">
                <thead>
                <tr>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Post::orderBy('created_at')->get() as $item)
                    <tr>
                        <td>
                            <p>{{ \App\User::find($item->user_id)->name }}</p>
                        </td>
                        <td>
                            <strong>{{ $item->judul }}</strong>
                        </td>
                        <td>
                            <a class="btn btn-pill-left btn-primary">Edit</a>
                            <button class="btn btn-pill-right btn-danger">Hapus</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection