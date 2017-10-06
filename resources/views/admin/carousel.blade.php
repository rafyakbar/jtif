@extends('layouts.adminlayout')

@section('content')
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah item</button>
    <br><br>
    @foreach(\App\Carousel::orderBy('created_at', 'desc')->get() as $item)
        <div class="card card-block">
            <div class="title-block">
                <h3 class="title">Item ke {{ ++$c }}</h3>
            </div>
            <section class="example">
                <form action="{{ route('update.carousel') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <div class="btn-group">
                        <a href="{{ asset($item->dir) }}" class="btn btn-primary btn-sm">Lihat foto</a>
                        <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                        <button class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('hapus-{{ $item->id }}').submit();">Hapus</button>
                    </div>
                    <br><br>
                    <label>Foto</label>
                    <input type="file" accept="image/jpeg" name="dir" class="form-control">
                    <br>
                    <label>Keterangan</label>
                    <textarea name="keterangan">{{ $item->keterangan }}</textarea>
                    <br>
                </form>
                <form action="{{ route('hapus.carousel') }}" id="hapus-{{ $item->id }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $item->id }}">
                </form>
            </section>
        </div>
    @endforeach
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah item</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah.carousel') }}" method="post" id="tambah-form-carousel" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label>Foto</label>
                        <input type="file" accept="image/jpeg" class="form-control" name="dir" required>
                        <br>
                        <label>Keterangan</label>
                        <textarea name="keterangan"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('tambah-form-carousel').submit();">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection