<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adaugă o carte nouă</title>
</head>
<style>
    form{
        max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
</style>
<body>
    <h1 style="display:flex;justify-content:center;">Adaugă o carte nouă</h1>

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
