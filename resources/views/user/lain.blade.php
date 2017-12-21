@extends('layouts.userlayout')

@section('title',"Web Jurusan Teknik Informatika")

@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{ $post->judul }}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">{{ \App\User::find($post->user_id)->name }}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted {{ $post->created_at->diffForHumans() }}</p>

                <hr>

                <!-- Post Content -->
                <p>{!! $post->isi !!}</p>


            </div>

        </div>
        <!-- /.row -->

    </div>
@endsection