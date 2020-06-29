@extends('layout')

@section("content")
    <div class="container">
      <h2>{{ $university->name }}</h2><hr>
      <img src="{{'/logo/'.$university->logo}}" width="80" height="70" alt=""> <br><hr>
      <img src="{{'/building_images/'.$university->building_image}}" width="50" height="70" alt=""> <br><br><hr>
      <img src="{{'/campus_images/'.$university->campus_image}}" width="50" height="70" alt="">
      <br><hr>
      About - {{ $university->about}}<hr>
      Major - {{ $university->major}}<hr>
      Collaboration - {{ $university->collaboration}}<hr>
      Contact - {{ $university->address }} <hr>

      <br>
      <a href="/admin/{{ $university->id }}/edit"> <button class="btn btn-success">Edit</button></a>

      <form method="post" action="/admin/{{ $university->id }}">
        {{ method_field("DELETE") }}
       {{ csrf_field() }}
       <br>
      <button type="submit" class="btn btn-primary">Delete</button>
      </form>
  </div>
@endsection
