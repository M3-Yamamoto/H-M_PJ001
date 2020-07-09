<?php

namespace App\Http\Controllers\admin;

use App\Model\user\Post;
use App\Http\Controllers\Controller;
use App\Model\user\Catagory;
use App\Model\user\Tag;
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
        $posts = Post::all();
        return view('admin/post/index', compact('posts'));
    }

    /**
     * Show catagorieshe form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagories=Catagory::all();
        $tags=Tag::all();
        return view('admin/post/create', compact('catagories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        } else {
            return 'No';
        }
        $post = new Post;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = str_replace(' ','-',strtolower($request->title));
        $post->body = $request->body;
        $post->status = $request->status == NULL ? 0 : 1;
        $post->save();
        $post->tags()->sync($request->tag);
        $post->catagories()->sync($request->catagory);

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        $catagories=Catagory::all();
        $tags=Tag::all();
        return view('admin/post/edit', compact('post','catagories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
        $post = Post::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = str_replace(' ','-',strtolower($request->title));
        $post->body = $request->body;
        $post->status = $request->status == NULL ? 0 : 1;
        $post->save();
        $post->tags()->sync($request->tag);
        $post->catagories()->sync($request->catagory);

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back();
    }
}
