@extends('layout')

@section("content")

<div class="container">
  <h2>Add New University</h2>
  @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
  <form method="POST" action="/admin" enctype="multipart/form-data">
   {{ csrf_field() }}

   <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>


    <div class="form-group">
      <label>About</label>
      <textarea class="form-control" name="about" rows="10"></textarea>
    </div>

    <div class="form-group">
      <label>Major</label>
      <textarea class="form-control" name="major" rows="10"></textarea>
    </div>


    <div class="form-group">
      <label for="">logo</label><br>
      <input type="file" name="limage">
    </div>

    <div class="form-group">
      <label for="">building_image</label><br>
      <input type="file" name="bimage">
    </div>

    <div class="form-group">
      <label for="">campus_image</label><br>
      <input type="file" name="cimage">
    </div>

    <div class="form-group">
      <label>Collaboration</label>
      <textarea class="form-control" name="collaboration" rows="10"></textarea>
    </div>

    <div class="form-group">
      <label>Address</label>
      <textarea class="form-control" name="address" rows="3"></textarea>
    </div>

         <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
