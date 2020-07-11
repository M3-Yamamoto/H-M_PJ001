@extends('layout')

@section("content")
  <div class="container">
   <h2>Edit University</h2>

     @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form method="POST" action="/admin/{{ $university->id }}" enctype="multipart/form-data">
    {{ method_field("PATCH") }}
   {{ csrf_field() }}
    <div class="form-group">
      <label>name</label>
      <input type="text" name="name" class="form-control" value="{{ $university->name }}" required>
    </div>

    <div class="form-group">
      <label>major</label>
      <input type="text" name="major" class="form-control" value="{{ $university->major }}" required>
    </div>

    <div class="form-group">
        <label for=""> logo</label><br>
        <input type="file" name="limage"><br><br>
        <img src="{{'/logo/'.$university->logo}}" width="100" height="100">
      </div>

      <div class="form-group">
          <label for="">building_image</label><br>
          <input type="file" name="bimage"><br><br>
          <img src="{{'/building_images/'.$university->bimage}}" width="100" height="100">
        </div>

        <div class="form-group">
            <label for="">campus_image</label><br>
            <input type="file" name="cimage"><br><br>
            <img src="{{'/campus_images/'.$university->cimage}}" width="100" height="100">
          </div>

          <div class="form-group">
            <label>collaboration</label>
            <input type="text" name="collaboration" class="form-control" value="{{ $university->collaboration }}" required>
          </div>

          <div class="form-group">
            <label>address</label>
            <input type="text" name="address" class="form-control" value="{{ $university->address }}" required>
          </div>

       <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>
t
