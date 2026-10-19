<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  response()->json(Post::paginate(10));
    }

    public function all(){
        return response()->json(Post::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return  response()->json(Post::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return  response()->json($post);
    }

    public function slug($slug){

        $post = Post::where("slug", $slug)->first();
        return response()->json($post);
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        return  response()->json($post->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return  response()->json("ok");
    }
}
