<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Правильный импорт модели

class CategoryController extends Controller
{
    public function index()
    {
        $category= Category::all();
        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        //  dd($request->all());
        Catgeory::create($request->all());
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
