@extends('layouts.userlayout')

@section('title',"Web Jurusan Teknik Informatika")

@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-12">

                <!-- Title -->
                <h1 class="mt-4">Sarana Prasarana</h1>
                <div class="row">
                    @foreach(\App\Prasarana::all() as $sarana)
                        <div class="col-lg-6">
                            <div class="card card-body">
                                <h4>{{ $sarana->nama }}</h4>
                                <p>{!! $sarana->keterangan !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
@endsection