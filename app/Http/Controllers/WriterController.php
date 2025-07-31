<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

// Правильный импорт модели

class WriterController extends Controller
{
    public function index()
    {
        $writer= Writer::all();
        return view('writer.index', compact('writer'));
    }

    public function create()
    {
        return view('writer.create');
    }

    public function store(Request $request)
    {
        //  dd($request->all());
        Writer::create($request->all());
        return redirect()->route('writer.index');
    }

    public function show(Writer $writer)
    {
        return view('writer.show', compact('writer'));
    }

    public function edit(Writer $writer)
    {
        return view('writer.edit', compact('writer'));
    }

    public function update(Request $request, Writer $writer)
    {
        $writer->update($request->all());
        return redirect()->route('writer.index');
    }

    public function destroy(Writer $writer)
    {
        $writer->delete();
        return redirect()->route('writer.index');
    }
}
