@extends('admin/post/create-edit-layout')

@section('action')
{{route('post.store')}}
@endsection

@section('card-title')
New Post Form
@endsection

@section('catagory')
@foreach($catagories as $catagory)
<option value="{{$catagory->id}}">{{$catagory->title}}</option>
@endforeach
@endsection

@section('tag')
@foreach($tags as $tag)
<option value="{{$tag->id}}">{{$tag->title}}</option>
@endforeach
@endsection
