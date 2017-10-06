@extends('layouts.adminlayout')

@section('content')
    @if(session()->has('message'))
        <div class=" alert alert-info">{{ session()->get('message') }}</div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card card-block">
                <div class="title-block">
                    <h3 class="title">
                        Ganti nama dan email
                    </h3>
                </div>
                <section class="example">
                    <form action="{{ route('update.admin.general') }}" method="post">
                        {{ csrf_field() }}
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control underlined" value="{{ Auth::user()->name }}" required>
                        <br>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control underlined" value="{{ Auth::user()->email }}" required>
                        <br>
                        <label>Konfirmasi password</label>
                        <input type="password" name="password_lama" class="form-control underlined" required>
                        <br>
                        <input type="submit" class="btn btn-oval btn-primary" value="Simpan">
                    </form>
                </section>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-block">
                <div class="title-block">
                    <h3 class="title">
                        Ganti password
                    </h3>
                </div>
                <section class="example">
                    <form action="{{ route('update.admin.password') }}" method="post">
                        {{ csrf_field() }}
                        <label>Password lama</label>
                        <input type="password" name="password_lama" class="form-control underlined" required>
                        <br>
                        <label>Password baru</label>
                        <input type="password" name="password_baru" class="form-control underlined" required>
                        <br>
                        <label>Konfirmasi password baru</label>
                        <input type="password" name="konfirmasi_password_baru" class="form-control underlined" required>
                        <br>
                        <input type="submit" class="btn btn-oval btn-primary" value="Simpan">
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection