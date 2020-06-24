<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>
</head>

<body>
    @foreach($posts as $p)
        <h1><a href="/post/{{$p->id}}">{{$p->title}}</a></h1>
        <h3>{{$p->id}}</h3>
        <h4>{{$p->updated_at}}</h4>
        <h4>Likes - {{$p->likes}}</h4>
        <hr>
    @endforeach
</body>

</html>