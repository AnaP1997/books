<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listă cărți</title>
</head>
<body>
    <h1>Listă cărți</h1>
    <a href="/books/create">Adaugă carte nouă</a>

    <table>
        <thead>
            <tr>
                <th>Titlu</th>
                <th>Autor</th>
                <!-- Alte antete pentru informații suplimentare -->
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
              
                <form action="/books/{{ $book->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Șterge</button>
                    </form>
                    <a href="/books/{{ $book->id }}/edit">Editează</a>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
