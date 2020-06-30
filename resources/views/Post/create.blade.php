<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('js/simplemde/simplemde.min.css')}}">
    <title>Create</title>
</head>
<body>
    <form action="/post" method="POST">
        @csrf
        <label for="ptitle">Title</label><br>
        <input type="text" name="ptitle" id="ptitle" ><br>
        <label for="pbody">Body</label><br>
        <textarea name="pbody" id="pbody" rows="10" cols='30'></textarea>
        <input type="submit" value="Submit">
    </form>
    <script src="{{url('js/simplemde/simplemde.min.js')}}"></script>
    <script>
        var simplemde=new SimpleMDE({element: document.getElementById('pbody')});
    </script>
</body>
</html>