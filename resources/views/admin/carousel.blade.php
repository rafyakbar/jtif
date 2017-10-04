@extends('layouts.adminlayout')

@section('content')
    @foreach(\App\Carousel::orderBy('updated_at')->get() as $item)
        <div class="card card-block">
            <div class="title-block">
                <h3 class="title">Item ke {{ ++$c }}</h3>
            </div>
            <section class="example">
                <img src="{{ asset($item->dir) }}" class="img-responsive">
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id">
                    <input type="file" accept="image/jpeg" name="id">
                </form>
            </section>
        </div>
    @endforeach
@endsection