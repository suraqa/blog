@extends('layouts.app')

@section('content')

    <section class="my-5 py-5">
        <div class="container">
            @if (Auth::user()->id === $post->user_id)
            <form action="{{ route("posts.update", $post->slug) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <h1>Edit your post</h1>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="10" required>{{ $post->description }}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="img" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @else
            <div class="alert alert-danger" role="alert">You are not authorized to access this page</div>
            @endif
        </div>
    </section>
    
@endsection