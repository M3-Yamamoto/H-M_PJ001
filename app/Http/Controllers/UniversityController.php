<?php

namespace App\Http\Controllers;

use App\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = University::all();

        return view('Admin.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
      $validatedData =  request()->validate([
        'name' => 'required',
        'rimage' => 'required|image',
        'about' => 'required',
        'collaboration' => 'required',
        'address' => 'required',
        'phone' => 'required',
          
        ]);
        
        $imageName = date('YmdHis') . "." . request()->rimage->getClientOriginalExtension();
        request()->rimage->move(public_path('images'), $imageName);

        $university = University::create($validatedData + ['image'=>$imageName]);

        // $recipe = Recipe::create($validatedData + ['author_id' => auth()->id()]);

        return redirect("admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $university = University::find($id);
        
        return view('Admin.show',compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        //
    }
}
