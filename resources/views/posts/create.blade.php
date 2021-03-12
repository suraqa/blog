@extends('layouts.app')

@section('content')
    <section class="posts-create">
        <div class="container my-5 py-5">
            <div class="text-center">
                <h1>Create a Post</h1>
            </div>

            
            <div class="row justify-content-center">
                <div class="col-6">
                    <div id="created"></div>
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" onsubmit="created()">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="10" class="form-control" placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="img" accept="image/*">
                        </div>
                        <div class="text-center">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
