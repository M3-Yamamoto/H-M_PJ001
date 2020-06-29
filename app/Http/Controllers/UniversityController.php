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

     $validatedData = request()->validate([

     'name' => 'required',
     'about' => 'required',
     'major' => 'required',
     'limage' => 'required|image',
     'bimage' => 'required|image',
     'cimage' => 'required|image',
     'collaboration' => 'required',
     'address' => 'required',

     ]);


     $logoName = date('YmdHis') . "." . request()->limage->getClientOriginalExtension();
     request()->limage->move(public_path('logo'), $logoName);

     $building_imageName = date('YmdHis') . "." . request()->bimage->getClientOriginalExtension();
     request()->bimage->move(public_path('building_images'), $building_imageName);

     $campus_imageName = date('YmdHis') . "." . request()->cimage->getClientOriginalExtension();
     request()->cimage->move(public_path('campus_images'), $campus_imageName);

     $university = University::create($validatedData+['logo'=>$logoName,'building_image'=>$building_imageName,'campus_image'=>$campus_imageName]);


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
    public function edit($id)
    {
        $university = University::find($id);
        return view('Admin.edit',compact('university'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $university = University::find($id);

      $validatedData = request()->validate

      ([
          'name' => 'required',
          'major' => 'required',
          'logo' => 'image',
          'bimage' => 'image',
          'cimage' => 'image',
          'collaboration' => 'required',
          'address' => 'required',
        ]);

      $university->update($validatedData);
        if(request()->limage) {
          //upload image
          $logoName = date('YmdHis') . "." . request()->limage->getClientOriginalExtension();
          request()->limage->move(public_path('logo'), $logoName);
        }

        if(request()->bimage){
          $building_imageName = date('YmdHis') . "." . request()->bimage->getClientOriginalExtension();
          request()->bimage->move(public_path('building_images'), $building_imageName);
        }

        if(request()->cimage){
          $campus_imageName = date('YmdHis') . "." . request()->cimage->getClientOriginalExtension();
          request()->cimage->move(public_path('campus_images'), $campus_imageName);
        }

        $university->update($validatedData + ['logo'=> empty($logoName) ? null : $logoName,'building_image'=>empty($building_imageName) ? null : $building_imageName,'campus_image' =>empty($campus_imageName) ? null : $campus_imageName]);

          return redirect("admin");
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
