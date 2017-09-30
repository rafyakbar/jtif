@extends('layouts.adminlayout')

@section('content')
    @include('mceImageUpload::upload_form')
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Daftar post&nbsp;&nbsp;&nbsp;
                <button class="btn btn-oval btn-primary" data-toggle="modal" data-target="#tambah">Tambah post</button>
            </h3>
        </div>
        <section class="example">
            <table class="table">
                <thead>
                <tr>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Post::where('menu_id','=',$menu_id)->orderBy('created_at')->get() as $item)
                    <tr>
                        <td>
                            <p>{{ \App\User::find($item->user_id)->name }}</p>
                        </td>
                        <td>
                            <strong>{{ $item->judul }}</strong>
                        </td>
                        <td>
                            <p>{{ $item->created_at }}</p>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('daftar.post.post', ['menu' => str_replace(' ', '_',  \App\Menu::find($menu_id)->nama), 'post_id' => $item->id]) }}">Edit</a>
                            <button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('{{ $item->id }}').submit()">Hapus</button>
                        </td>
                    </tr>
                    <form action="{{ route('hapus.post') }}" method="post" id="{{ $item->id }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}">
                    </form>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah post</h5>
                </div>
                <div class="modal-body">
                    <div class="card card-block">
                        <div class="title-block">
                            <h3 class="title">
                                Tambah post
                            </h3>
                        </div>
                        <section class="example">
                            <form action="{{ route('tambah.post') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                                <label>Judul</label>
                                <input type="text" class="form-control underlined" name="judul" required>
                                <br>
                                <label>Isi</label>
                                <textarea name="isi" required>Paragraf 1<br>(masukkan gambar diantara enter)<br>Paragraf 2</textarea>
                                <br>
                                <label>File</label>
                                <input type="file" name="dir" class="form-control">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </form>
                            <br>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection