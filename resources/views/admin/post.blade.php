@extends('layouts.adminlayout')

@section('content')
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="card card-block">
            <div class="title-block">
                <h3 class="title">
                    <label>Judul</label>
                    <input class="form-control underlined" type="text" name="judul" value="{{ $post->judul }}">
                </h3>
            </div>
            <section class="example">
                <label>Isi</label>
                <textarea name="isi">{{ $post->isi }}</textarea>
                <br>
                <input type="submit" class="btn btn-oval btn-primary" value="Simpan">
            </section>
        </div>
    </form>
@endsection