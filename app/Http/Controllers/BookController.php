<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|min:3|max:700|unique:books,title',
            'author' => 'nullable|string',
            'genre' => 'nullable|string',
            'publication_year' => 'nullable|integer|min:1700|max:2026',
            'language' => 'nullable|string',
            'description' => 'nullable|string',
            'copies_total' => 'nullable|integer|min:1',
        ]);
        Book::create($data);
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function edit(Book $book)
    {
    return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
  public function search(Request $request,AppRepositoryInterfeyses $appRepositoryInterfeyses){
        dd($appRepositoryInterfeyses->search($request->q));
  }
}


