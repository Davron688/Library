<?php

namespace App\Http\Controllers;

use App\Models\Entrance;
use Illuminate\Http\Request;

class EntranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrances = Entrance::all();
        return view('entrances.index', compact('entrances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validated = $request->validate([
                'login' => 'required',
                'password' => 'required',

            ]);
            Entrance::create($validated);
            return redirect()->route('entrances.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Entrance $entrances)
    {
        return view('entrances.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrance $entrance)
    {
        return view('entrances.edit',compact('entrance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrance $entrance)
    {
        $validated = $request->validate([
            'login' => 'required',
            'password' => 'required',

        ]);
       $entrance->update($validated);
        return redirect()->route('entrances.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrance $entrance)
    {
        $entrance->delete();
        return redirect()->route('entrances.index')->with('success', 'entrances deleted successfully.');
    }
}
