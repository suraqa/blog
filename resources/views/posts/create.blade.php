@extends('layouts.app')

@section('content')
    <section class="posts-create">
        <div class="container my-5 py-5">
            <div class="text-center">
                <h1>Create a Post</h1>
            </div>

            <div id="created">
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" onsubmit="created()">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control"
                                placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <input type="file" name="img" accept="image/*" class="form-control">
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
