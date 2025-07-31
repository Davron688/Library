<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
            return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories') );
    }

    public function store(Request $request)
    {
        $data  = request()->validate([
            'title' => 'required|min:5|max:100',
            'author' => 'required|min:5|max:100',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'src'=>'required|file|mimetypes:application/pdf|max:10240',
        ]);
        if ($request->hasFile('image')) {
            $data ['image'] = $request->file('image')->store('books','public');
        }
        if ($request->hasFile('src')) {
            $data ['src'] = $request->file('src')->store('books','public');
        }
        Book::create($data);
        dd($request->all());
    }

    public function update(Request $request, Book $book)
    {
        dd($request->all());
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
