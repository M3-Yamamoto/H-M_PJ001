@extends('layout')

@section("content")
    <div class="container">
            <h2>Admin Page</h2>
                <div>
                   <a href="/admin/create"><button class="btn btn-success">Create</button></a>
                </div>
            @foreach($data as $value)
                <a href="/admin/{{ $value->id }}"> <li>{{ $value->name }}</li></a>
            <hr>
            @endforeach
        </div>
    </div>
@endsection