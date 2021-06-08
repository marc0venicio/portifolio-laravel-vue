<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog')
                ->with('posts', Blog::orderBy('updated_at', 'DESC')->get());
    }

    public function createBlog()
    {
        return view('create-blog');
    }

    public function client()
    {
        return view('client');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png.jpeg|max:5048',
        ]);

        $newImageName = uniqid() . '-'. $request->title. '.'.$request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        
        Blog::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(Blog::class,'slug', $request->title),
            'image_path'=>$newImageName,
            'user_id'=> auth()->user()->id
        ]);

        return redirect('/create')
                ->with('message', 'post criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog-show')
                ->with('posts', Blog::where('slug', $slug)->first()->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
