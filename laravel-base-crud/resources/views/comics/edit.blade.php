<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route("comics.update" ,  $comic ->id) }}" method="POST">
        @csrf
        @method('patch')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">

        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{ $comic->description }}">

        <label for="type">Type</label>
        <select name="type" id="type">
            <option value="comic book" {{ $comic->type == "comic book" ? 'selected' : '' }}>Comic Book</option>
            <option value="graphic novel" {{ $comic->type == "graphic novel" ? 'selected' : '' }}>Graphic Novel</option>
        </select>

        <input type="submit" value="Invia">
    </form>
</body>
</html>