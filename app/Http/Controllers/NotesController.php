<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request,Card $card)
    {
       
       $card->addnote(new Note($request->all()));

       //$card->notes()->create($request->all());

       return back();

    }

    public function edit(Note $note)
    {

       return view('notes.edit',compact('note'));
    }

    public function update(Request $request,Note $note)
    {
       
       $note->update($request->all());

       return back();

    }
}
