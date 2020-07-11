@extends('admin/catagory/create-edit-layout')

@section('method')
@method('PATCH')
@endsection

@section('action')
{{route('catagory.update',$catagory->id)}}
@endsection

@section('card-title')
Edit catagory
@endsection

@section('title')
{{$catagory->title}}
@endsection

@section('back-button')
<a href="{{ route('catagory.index') }}" class="btn btn-warning">Back</a>
@endsection