@extends('layout')

@section("content")

<div class="container">
	<h2>Add New University</h2>
<form method="POST" action="/admin" enctype="multipart/form-data">
   {{ csrf_field() }}

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
      <label> University Image</label><br>
      <input type="file" name="rimage">
    </div>
  
      
    <div class="form-group">
      <label>About</label>
      <textarea class="form-control" name="about" rows="7"></textarea>
    </div>

    <div class="form-group">
      <label>Collaboration</label>
      <textarea class="form-control" name="collaboration" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label>Address</label>
      <input type="text" class="form-control" name="address" placeholder="1234 Main St">
    </div>

    <div class="form-group">
      <label>Phone</label>
      <input type="text" name="phone" class="form-control">
    </div>



         <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection