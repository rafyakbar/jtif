@extends('layouts.adminlayout')

@section('content')
    <div class="card card-block sameheight-item">
        <div class="title-block">
            <h3 class="title"> Tambah Menu </h3>
        </div>
        <form action="{{ route('tambah.menu') }}" method="post" role="form">
            {{ csrf_field() }}
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" class="form-control underlined" required>
            <br>
            <label>Banyak konten?</label>
            <br>
            <input type="radio" name="banyak_konten" value="1" required> Ya<br>
            <input type="radio" name="banyak_konten" value="0" required> Tidak<br>
            <br>
            <button type="submit" class="btn btn-oval btn-primary">Simpan</button>
        </form>
    </div>
    <br>
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title"> Daftar menu </h3>
        </div>
        <section class="example">
            <table class="table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Banyak Konten</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Menu::orderBy('nama')->get() as $item)
                    <form action="{{ route('update.menu') }}" method="post">
                        @if($item->nama != 'Berita')
                            {{ csrf_field() }}
                        @endif
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <tr>
                            <td>
                                <input type="text" name="nama" value="{{ $item->nama }}" class="form-control underlined" required>
                            </td>
                            <td>
                                Ya
                                <input type="radio" name="banyak_konten" value="1" @if($item->banyak_konten) checked @endif required>
                                &nbsp;&nbsp;&nbsp;
                                Tidak
                                <input type="radio" name="banyak_konten" value="0" @if(!$item->banyak_konten) checked @endif required>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-pill-left btn-primary" @if($item->nama == 'Berita') disabled @endif>
                                    Simpan
                                </button>
                                <a href="" class="btn btn-info">Lihat post</a>
                                <button class="btn btn-pill-right btn-danger" onclick="event.preventDefault(); document.getElementById('{{ $item->id }}').submit();" @if($item->nama == 'Berita') disabled @endif>
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    </form>
                    @if($item->nama != 'Berita')
                        <form action="{{ route('hapus.menu') }}" method="post" id="{{ $item->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $item->id }}">
                        </form>
                    @endif
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection