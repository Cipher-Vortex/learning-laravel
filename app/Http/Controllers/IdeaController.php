<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = Idea::all();
        return view('ideas.index', ['ideas' => $ideas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ideas' => 'required|min:3',
        ]);

        Idea::create([
            'ideas' => $request->ideas,
        ]);

        return redirect('/ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view('ideas.view', compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        return view('ideas.edit', compact('idea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $request->validate([
            'ideas' => 'required|min:3',
        ]);

        $idea->update([
            'ideas' => $request->ideas,
        ]);

        return redirect('/ideas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect('/ideas');
    }
}