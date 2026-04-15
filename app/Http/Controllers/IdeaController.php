<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequestController;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
$ideas = Idea::all();
return view('ideas/index', ['ideas' => $ideas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //route to create new idea form 
        
            return view('ideas/create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // request()->validate([
        //     'ideas' => 'required','min:10']);
           Idea::create([
        'ideas' =>request('ideas'),
        // 'created_at' => now(),
        // 'updated_at' => now(),
        ]);
        // return view('ideas');
       return redirect('/ideas/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        //
        return view('ideas.view',['idea' => $idea]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        //
        //  $idea = Idea::findOrFail($id);
return view('ideas/edit', ['idea' => $idea]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        //

            $idea->update(['ideas'=> request('idea')]);

    }
    public function viewIdea(Request $request, Idea $id)
    {
        //
        Idea::find($id);
        return view('ideas.view', ['idea' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        //
        Idea::destroy($idea->id);
        return redirect('/ideas/index');
    }
}
