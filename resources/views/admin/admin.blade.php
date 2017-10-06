@extends('layouts.adminlayout')

@section('content')
    @include('mceImageUpload::upload_form')
    <div class="card card-block">
        <div class="title-block">
            <h3 class="title">
                Daftar admin&nbsp;&nbsp;&nbsp;
                <button class="btn btn-oval btn-primary" data-toggle="modal" data-target="#tambah">Tambah admin</button>
            </h3>
        </div>
        <section class="example">
            <table class="table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\User::all() as $item)
                    <tr>
                        <td>
                            <strong>{{ $item->name }}</strong>
                        </td>
                        <td>
                           <p>{{ $item->email }}</p>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah admin</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tambah.admin') }}" method="post" id="tambah-form">
                        {{ csrf_field() }}
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control underlined" required>
                        <br>
                        <label>Email</label>
                        <input type="email" class="form-control underlined" name="email" required>
                        <br>
                        <label>Password</label>
                        <input type="password" name="password" minlength="5" class="form-control underlined" required>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-pill-left btn-secondary" data-dismiss="modal">Tutup</button>
                        <button class="btn btn-pill-right btn-primary" onclick="event.preventDefault(); document.getElementById('tambah-form').submit();">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection