@extends('layout')

@section("content")
    <div class="container">
      <h2>{{ $university->name }}</h2>
      <img src="{{'/images/'.$university->image}}" width="100" height="70" alt="">
      <br>
      <li>About - {{ $university->about}}</li>
      <li>Collaboration - {{ $university->collaboration}}</li>
      <li>address - {{ $university->address}}</li>
      <li>phone - {{ $university->phone}}</li>
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
