<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($comic as $comic)

        <div>ID: {{$comic->id}}</div>
        <div>Created_At: {{$comic->Created_At}}</div>
        <div>Updated_at: {{$comic->id}}</div>
        <div>Description: {{$comic->id}}</div>
        <div>title: {{$comic->id}}</div>
        <div>Thumb: {{$comic->id}}</div>
        <div>Price: {{$comic->id}}</div>
        <div>Series: {{$comic->id}}</div>
        <div>sale_date: {{$comic->id}}</div>
        <div>type: {{$comic->id}}</div>

    @endforeach
    


</body>
</html>