@extends('layouts.userlayout')

@section('title',"Web Jurusan Teknik Informatika")

@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-12">

                <!-- Title -->
                <h1 class="mt-4">Program Studi</h1>
                <div class="row">

                    @foreach(\App\Prodi::all() as $prodi)
                        <div class="col-lg-6">
                            <div class="card card-body">
                                <h3>{{ $prodi->nama }}</h3>
                                <p>{!! $prodi->keterangan !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
@endsection