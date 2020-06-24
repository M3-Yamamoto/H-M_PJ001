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
}
