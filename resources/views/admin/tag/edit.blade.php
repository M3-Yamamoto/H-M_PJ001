@extends('admin/tag/create-edit-layout')

@section('method')
@method('PATCH')
@endsection

@section('action')
{{route('tag.update',$tag->id)}}
@endsection

@section('card-title')
Edit tag
@endsection

@section('title')
{{$tag->title}}
@endsection

@section('back-button')
<a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
@endsection