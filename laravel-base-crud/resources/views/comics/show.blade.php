<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="{{ route("comics.edit" , $comic->id) }}">
    Modifica Fumetto
</a>
<br>
<a href="{{ route("comics.delete" , $comic->id) }}">
    Elimina Fumetto
</a>

<ul>
    <li>ID: {{$comic->id}}</li>
    <li>Title: {{$comic->title}}</li>
    <li>Description: {{$comic->description}}</li>
    <li>thumb: {{$comic->thumb}}</li>
    <li>price: {{$comic->price}}</li>
    <li>series: {{$comic->series}}</li>
    <li>sale_date: {{$comic->sale_date}}</li>
    <li>type: {{$comic->type}}</li>
</ul>

</body>
</html>