<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adaugă o carte nouă</title>
</head>
<body>
    <h1>Adaugă o carte nouă</h1>

    <form action="/books/store" method="POST" >
        @csrf <!-- Pentru protecția împotriva CSRF -->
        <label for="title">Titlu:</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="author">Autor:</label><br>
        <input type="text" id="author" name="author"><br>

        <input type="submit" value="Adaugă carte">
    </form>
</body>
</html>
