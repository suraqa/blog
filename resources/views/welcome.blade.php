@extends("layouts.app")

@section('content')
    <section class="hero-section">
        <div class="content">
            <h1>Welcome to my Blog.</h1>
            <h3>Wanna write some posts ?</h3>
            <a class="btn btn-lg btn-outline-secondary mx-auto" href="{{ route("posts.create") }}">Get started!</a>
        </div>
    </section>

    <section class="posts-section my-5 py-5">
        <div class="container">
            <div class="heading text-center">
                <h1>Posts</h1>
                <div class="underline mx-auto"></div>
            </div>
            <div class="row">

                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 my-3 xs-12">
                        <div class="card">
                        <img class="card-img-top" src="{{ asset('images/'.$post->image_path)}}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                @if (strlen($post->description) >= 175 )
                                    {{ substr($post->description, 0, 170)."....." }}

                                @else 
                                    {{ $post->description }}
                                @endif
                            </p>
                            <a href="{{ route("posts.show", $post->slug) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
