@extends('layouts.adminlayout')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-info">
            <strong>{{ session()->get('message') }}</strong>
        </div>
    @endif
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Daftar pegawai &nbsp;&nbsp;&nbsp;
                <button class="btn btn-oval btn-primary" data-toggle="modal" data-target="#tambah">Tambah pegawai</button>
            </h3>
        </div>
        <section class="example">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Pegawai::orderBy('nama')->get() as $item)
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <tr>
                        <td>
                            <p>{{ $item->id }}</p>
                        </td>
                        <td>
                            <p>{{ $item->nama }}</p>
                        </td>
                        <td>
                            <p>{{ $item->jabatan }}</p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-pill-left btn-primary" data-toggle="modal"
                                    data-target="#{{ $item->id }}">Edit
                            </button>
                            <button class="btn btn-pill-right btn-danger"
                                    onclick="event.preventDefault(); document.getElementById('hapus-{{ $item->id }}').submit();">
                                Hapus
                            </button>
                        </td>
                    </tr>
                    <form action="{{ route('hapus.pegawai') }}" method="post" id="hapus-{{ $item->id }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $item->id }}">
                    </form>
                    <div class="modal fade" id="{{ $item->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit pegawai</h5>
                                </div>
                                <div class="modal-body">
                                    @if(!is_null($item->dir))
                                        <img src="{{ asset($item->dir) }}" class="img img-responsive">
                                    @else
                                        <br>
                                        <br>
                                        <h5 class="text-center">Belum ada foto</h5>
                                        <br>
                                        <br>
                                    @endif
                                    <form action="{{ route('update.pegawai') }}" method="post" id="update-{{ $item->id }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="old_id" value="{{ $item->id }}">
                                        <br>
                                        <label>Ganti foto (kosongi jika foto tidak diganti)</label>
                                        <input type="file" name="dir" accept="image/jpeg" class="form-control underlined">
                                        <br>
                                        <label>ID / NIP</label>
                                        <input type="text" class="form-control underlined" name="id"
                                               value="{{ $item->id }}" required>
                                        <br>
                                        <label>Nama</label>
                                        <input type="text" class="form-control underlined" name="nama"
                                               value="{{ $item->nama }}" required>
                                        <br>
                                        <label>Jabatan</label>
                                        <select name="jabatan" class="form-control underlined" required>
                                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                            @foreach(\App\Pegawai::JABATAN as $value)
                                                <option value="{{ $value }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label>Prodi</label>
                                        <select name="prodi_id" class="form-control underlined" required>
                                            @if(!is_null($item->prodi_id))
                                                <option value="{{ $item->prodi_id }}" selected>{{ \App\Prodi::find($item->prodi_id)->nama }}</option>
                                            @endif
                                            @foreach(\App\Prodi::all() as $prodi)
                                                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label>Jenis kelamin</label>
                                        <select class="form-control underlined" name="jenis_kelamin" required>
                                            <option value="{{ $item->jenis_kelamin }}">{{ $item->jenis_kelamin }}</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('update-{{ $item->id }}').submit();">Simpan</button>
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah pegawai</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah.pegawai') }}" method="post" id="tambah-form">
                        {{ csrf_field() }}
                        <label>Foto (kosongi jika foto tidak ada)</label>
                        <input type="file" name="dir" accept="image/jpeg" class="form-control underlined">
                        <br>
                        <label>ID / NIP</label>
                        <input type="text" class="form-control underlined" name="id" required>
                        <br>
                        <label>Nama</label>
                        <input type="text" class="form-control underlined" name="nama" required>
                        <br>
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control underlined" required>
                            @foreach(\App\Pegawai::JABATAN as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label>Prodi</label>
                        <select name="prodi_id" class="form-control underlined" required>
                            <option></option>
                            @foreach(\App\Prodi::all() as $prodi)
                                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label>Jenis kelamin</label>
                        <select class="form-control underlined" name="jenis_kelamin" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
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