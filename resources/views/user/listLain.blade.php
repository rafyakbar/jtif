@extends('layouts.userlayout')

@section('title',"Web Jurusan Teknik Informatika")

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">{{ $nama }}</h1>

        <!-- Project One -->
        @foreach($post as $item)
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h3>{{ $item->judul }}</h3>
                    <p>{!! substr($item->isi,0,200) !!}</p>
                    <a class="btn btn-primary" href="{{ route('lain',['post_id'=>$item->id]) }}">Selanjutnya</a>
                </div>
            </div>
            <hr>

        @endforeach
    </div>
    <!-- /.container -->
@endsection