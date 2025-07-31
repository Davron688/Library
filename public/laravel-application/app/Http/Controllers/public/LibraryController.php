<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('public.books', compact('books'));
    }
}
