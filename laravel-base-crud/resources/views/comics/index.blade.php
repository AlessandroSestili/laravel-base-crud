<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <a href="{{ route('comics.create') }}">
            Crea un nuovo fumetto da zero!
        </a>
    </div>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>thumb</th>
                <th>price</th>
                <th>series</th>
                <th>sale_date</th>
                <th>type</th>
            </tr>
        </thead>

        <tbody>
            @foreach($comics as $comic)
                <tr>
                    <td>
                        {{ $comic->id }}
                        {{ $comic->title }}
                        {{ $comic->description }}
                        {{ $comic->thumb }}
                        {{ $comic->price }}
                        {{ $comic->series }}
                        {{ $comic->sale_date }}
                        {{ $comic->type }} 
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>