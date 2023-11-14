<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
       
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author')
        ]);

        return redirect('/books');
    }

    public function edit($id)
{
    $book = Book::find($id);
    return view('books.edit', ['book' => $book]);
}

public function update(Request $request, $id)
{
    $book = Book::find($id);
    $book->title = $request->input('title');
    $book->author = $request->input('author');
    $book->save();

    return redirect('/books');
}

public function destroy($id)
{
    $book = Book::find($id);
    $book->delete();

    return redirect('/books');
}

}
