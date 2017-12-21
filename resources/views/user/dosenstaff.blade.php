@extends('layouts.userlayout')

@section('title',"Web Jurusan Teknik Informatika")

@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-12">

                <!-- Title -->
                <h1 class="mt-4">Karyawan dan Dosen</h1>
                <div class="row">
                    @foreach(\App\Pegawai::all() as $pegawai)
                        <div class="col-lg-3">
                            <div class="card card-body">
                                <img src="{{ asset("user/img/default-avatar.png") }}" width="100%">
                                <h4>{{ $pegawai->nama }}</h4>
                                <p>{{ $pegawai->jabatan }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
@endsection