<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route("comics.store") }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="description">description</label>
        <input type="text" name="description" id="description">

        <label for="type">Type</label>
        <select name="type" id="type">
            <option value="comic book">Comic Book</option>
            <option value="graphic novel">Graphic Novel</option>
        </select>

        <input type="submit" value="Invia">
    </form>
</body>
</html>