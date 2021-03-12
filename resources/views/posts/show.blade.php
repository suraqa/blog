@extends('layouts.app')

@section('content')
    <section class="my-5 py-5">
        <div class="container">
            <div>
                <h1>{{ $post->title }}</h1>
                <img src="{{ asset("images/".$post->image_path) }}" alt="" class="img-fluid">
                <p>{{ $post->description }}</p>
            </div>
        </div>
    </section>
@endsection