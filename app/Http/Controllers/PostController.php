<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models as M;

class PostController extends Controller {

    public function __construct() {
        $this->middleware("auth", [
            "except" => ["show"]
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("posts.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "img" => "required | mimes:jpg,png,jpeg | max: 5000"
            ]);
        $post = new M\Post();
        $post->title = $request->title;
        $post->slug = str_replace(" ", "-", strtolower($request->title));
        $img_name = uniqid().".".$request->img->extension();
        $post->image_path = $img_name;
        $post->description = $request->description;
        $post->user_id = auth()->user()->id;
        $request->img->move(public_path("images"), $img_name);
        $post->save();
        return redirect()->route("posts.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        // dd(M\Post::where("slug", $slug)->get());
        return view("posts.show", [
            "post" => M\Post::where("slug", $slug)->firstorFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view("posts.edit", [
            "post" => M\Post::where("slug", $slug)->firstorFail()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post_to_update = M\Post::where("slug", $slug)->firstorFail();
        $post_to_update->title = $request->title;
        $post_to_update->slug = str_replace(" ", "-", strtolower($request->title));
        $post_to_update->description = $request->description;
        if($request->img) {
            $updated_img_name = uniqid().".".$request->img->extension();
            $post_to_update->image_path = $updated_img_name;
            $request->img->move(public_path("images"), $updated_img_name);
        }
        $post_to_update->save();
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post_to_delete = M\Post::where("slug", $slug)->firstorFail();
        $post_to_delete->delete();
        return redirect()->route("home");
    }
}
