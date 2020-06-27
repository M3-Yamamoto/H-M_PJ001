<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('Post.index',compact('posts'));
    }
    public function show($id)
    {
        $post=Post::findOrFail($id);
        // die($post);
        return view('Post.show',compact('post'));
    }
    public function create()
    {
        return view('Post.create');
    }
    public function store()
    {
        $post=new Post();
        $post->title=request('ptitle');
        $post->body=request('pbody');
        $post->save();
        return redirect('/post');

    }
}
