<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


class NotepadController extends Controller
{
    public function showDashboard(){
        return view('dashboard');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'memo' => 'required',
        ]);
        
        if ($validatedData) {
            Note::create([
                'content' => $validatedData['memo'],
            ]);
            
            session()->flash('message', 'Note added successfully.');
        } else {
            session()->flash('message', 'Validation failed. Please check your input.');
        }
    
        return redirect()->back();
    }
        
    public function create()
{
    return view('dashboard');
}

}

