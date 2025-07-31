<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library; // Правильный импорт модели

class LibraryController extends Controller
{
    public function index()
    {
        $libraries= Library::all();
        return view('library.index', compact('libraries'));
    }

    public function create()
    {
        return view('library.create');
    }

    public function store(Request $request)
    {
      //  dd($request->all());
        Library::create($request->all());
        return redirect()->route('library.index');
    }

    public function show(Library $library)
    {
        return view('library.show', compact('library'));
    }

    public function edit(Library $library)
    {
        return view('library.edit', compact('library'));
    }

    public function update(Request $request, Library $library)
    {
        $library->update($request->all());
        return redirect()->route('library.index');
    }

    public function destroy(Library $library)
    {
        $library->delete();
        return redirect()->route('library.index');
    }
}
