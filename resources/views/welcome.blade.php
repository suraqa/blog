@extends("layouts.app")

@section('content')
    <section class="hero-section">
        <div class="content">
            <h1>Welcome to my Blog.</h1>
            <h3>Wanna write some posts ?</h3>
            <a class="btn btn-lg btn-outline-secondary mx-auto" href="{{ route("posts.index") }}">Get started!</a>
        </div>
    </section>

    <section class="posts-section my-5 py-5">
        <div class="container">
            <div class="heading text-center">
                <h1>Posts</h1>
                <div class="underline mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3 xs-12">
                    <div class="card">
                    <img class="card-img-top" src="{{ asset("images/facebook-logo-icon-smartphone-3d-rendering_1379-5352.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at corporis modi recusandae ...</p>
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 xs-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/facebook-logo-icon-smartphone-3d-rendering_1379-5352.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at corporis modi recusandae ...</p>
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 xs-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/facebook-logo-icon-smartphone-3d-rendering_1379-5352.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at corporis modi recusandae ...</p>
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 xs-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/facebook-logo-icon-smartphone-3d-rendering_1379-5352.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at corporis modi recusandae ...</p>
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection
