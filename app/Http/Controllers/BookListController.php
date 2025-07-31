<?php

namespace App\Http\Controllers;

use App\Models\BookList;
use Illuminate\Http\Request;
use function Pest\Laravel\from;

class BookListController extends Controller
{

    public function index()
    {
        $bookslist = BookList::all();
        return view('bookslist.index', compact('bookslist'));
    }


    public function create()
    {
        return view('bookslist.create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
           'title' => 'required|min:5|max:100',
           'author' => 'required|min:5|max:100',
           'genre' => 'required',
           'year' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'file' => 'required|file|mimes:pdf,doc,docx,txt,epub|max:10000',
       ]);
       if ($request->hasFile('image')) {
           $data ['image'] = $request->file('image')->store('bookslist', 'public');
       }
       if ($request->hasFile('file')) {
           $data ['file'] = $request->file('file')->store('bookslist', 'public');
       }
        BookList::create($data);
        return redirect()->route('bookslist.index')->with('success', 'Book created successfully.');
    }

    public function show(BookList $bookslist)
    {
        return view('bookslist.show', compact('bookslist'));
    }

    public function edit(BookList $bookslist)
    {
        return view('bookslist.edit', compact('bookslist'));
    }

    public function update(Request $request, BookList $bookslist)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'image' => 'required',
            'file' => 'required|string',
        ]);
        $bookslist->update($validated);
        return redirect()->route('bookslist.index');
    }

    public function destroy(BookList $bookslist)
    {
        $bookslist->delete();
        return redirect()->route('bookslist.index')->with('success', 'bookslist deleted successfully.');
    }
}
