<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- @dump($comics) --}}

    @foreach($comics as $comic)

        <div> ID: {{$comic->id}} </div>
        <div>Created_At: {{$comic->Created_At}}</div>
        <div>Updated_at: {{$comic->id}}</div>
        <div>Description: {{$comic->Description}}</div>
        <div>title: {{$comic->title}}</div>
        <div>Thumb: {{$comic->Thumb}}</div>
        <div>Price: {{$comic->Price}}</div>
        <div>Series: {{$comic->Series}}</div>
        <div>sale_date: {{$comic->sale_date}}</div>
        <div>type: {{$comic->type}}</div>

    @endforeach
</body>
</html>