<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //create a variable and store all the notes in it from the database

        $notes = Note::all();

        //return a view and pass in the above variable
        return view('index')->with('notes',$notes);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the data
        $request->validate([
            'memo'=>'required',
        ]);


        //store in the database
        $note = new Note;
        $note->content = $request->memo;
        $note->save();
        
        //redirect to another page
        return redirect()->route('dashboard.show', $note->id)->with('success','Note added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $note = Note::find($id);
        return view('dashboard')->with('note',$note);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $note = Note::find($id);
        return view('edit')->with('note',$note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate the data
        $request->validate([
            'memo'=>'required',
        ]);

        //store in the database
        $note = Note::find($id);
        $note->content = $request->memo;
        $note->save();

        //redirect to another page
        return redirect()->route('dashboard.index', $note->id)->with('success','Note updated successfully.');

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('dashboard.index')->with('success','Note deleted successfully.');

    }
}
