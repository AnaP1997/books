<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editare carte</title>
</head>
<body>
    <h1>Editare carte</h1>

    <form action="/books/{{ $book->id }}" method="POST">
        @csrf
        @method('PUT') <!-- Sau 'PATCH' în funcție de configurarea routei -->

        <label for="title">Titlu:</label><br>
        <input type="text" id="title" name="title" value="{{ $book->title }}"><br>

        <label for="author">Autor:</label><br>
        <input type="text" id="author" name="author" value="{{ $book->author }}"><br>

        

        <input type="submit" value="Actualizează carte">
    </form>
</body>
</html>
