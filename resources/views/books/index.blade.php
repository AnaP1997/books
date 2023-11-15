<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listă cărți</title>
    <style>
        body {
        
}

    </style>
</head>
<body>
    <h1 style="display:flex;justify-content:center;">Listă cărți</h1>
    <a style="display:flex;justify-content:right;text-decoration:none;color:black;" href="/books/create">Adaugă carte nouă</a>

    <table  style="margin-left:180px;">
        <thead>
            <tr >
                <th style="padding:0  350px 0 80px;">Titlu</th>
                <th >Autor</th>
                
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td style="padding:0  250px 0 80px;">{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
              <td style="padding:0  250px 0 80px; display:flex;justify-content:row;">
              <button style="margin:0 10px 0 10px;"><a style="text-decoration:none;color:black;" href="/books/{{ $book->id }}/edit">Editează</a></button>
                <form action="/books/{{ $book->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Șterge</button>
                    </form>
                    </td>    
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
