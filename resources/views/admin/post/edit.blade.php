@extends('admin/post/create-edit-layout')

@section('method')
@method('PATCH')
@endsection

@section('action')
{{route('post.update',$post->id)}}
@endsection

@section('card-title')
Edit Post
@endsection

@section('title')
{{$post->title}}
@endsection

@section('sub-title')
{{$post->subtitle}}
@endsection

@section('body')
{{$post->body}}
@endsection

@section('catagory')
@foreach($catagories as $catagory)
<option value="{{$catagory->id}}" @foreach($post->catagories as $postcatagory)
    @if($postcatagory->id == $catagory->id)
    selected
    @endif
    @endforeach
    >{{$catagory->title}}</option>
@endforeach
@endsection

@section('tag')
@foreach($tags as $tag)
<option value="{{$tag->id}}" @foreach($post->tags as $posttag)
    @if($posttag->id == $tag->id)
    selected
    @endif
    @endforeach
    >{{$tag->title}}</option>
@endforeach
@endsection


@section('status')
@if($post->status==1)
{{'checked'}}
@endif
@endsection

@section('back-button')
<a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
@endsection