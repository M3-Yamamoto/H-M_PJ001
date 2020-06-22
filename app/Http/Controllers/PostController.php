<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('Posts.index');
    }
    public function show($id)
    {
        $post = $id;
        return view('Posts.show', compact('postId'));
    }
}
