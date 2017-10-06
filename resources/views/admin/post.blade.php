@extends('layouts.adminlayout')

@section('content')
    @include('mceImageUpload::upload_form')
    <form action="{{ route('update.post') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="card card-block">
            <div class="title-block">
                <h3 class="title">
                    <label>Judul</label>
                    <input class="form-control underlined" type="text" name="judul" value="{{ $post->judul }}" required>
                </h3>
            </div>
            <section class="example">
                <label>Isi</label>
                <textarea name="isi" required>{{ $post->isi }}</textarea>
                <br>
                <label>File</label>
                @if(!is_null($post->dir))
                    <a href="{{ asset($post->dir) }}">(link file download sebelumnya)</a>
                @endif
                <input type="file" class="form-control" name="dir">
                <br>
                <input type="submit" class="btn btn-oval btn-primary" value="Simpan">
            </section>
        </div>
    </form>
@endsection