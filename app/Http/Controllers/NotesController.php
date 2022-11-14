<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Notes::all();
        
        $recupEtus = Etudiant::all();
        foreach($recupEtus as $recupEtu)
        {
                
        } 
           return view('notes.index  ', compact('notes'));
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Etudiant::all();
        $matieres = Matiere::all();
        return view('notes.create',compact('students','matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_etu'=>'required',
            'id_mat'=>'required',
             'note'=>'required',       
        ]);   
        $notes = new Notes();
        $notes->id_etudiant = $request->id_etu;
        $notes->id_matieres = $request->id_mat;
        $notes->note = $request->note;
        $notes->save();
       
        return back()->with('success', " Note attribué   avec succès");
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     * 
     */ 
    public function show($id)
    {
        // dd($student);
        $notes = Notes::findOrFail($id);
        return view('notes.show', compact('notes'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $notes = Notes::findOrFail($id);

         return view('notes.edit', compact('notes'));
    }

    /*
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'id_etu'=>'required',
            'id_mat'=>'required',
            'note'=>'required',
        ]);
        
        $notes = new Notes();
        $notes->id_etudiant = $request->id_etu;
        $notes->id_matieres = $request->id_mat;
        $notes->note=$request->note;
        $notes->save();
        return back()->with('success', ' mise à jour effectué avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $notes = Notes::findOrFail($id);
        $notes->delete();
        return redirect('/notes')->with('success',  "suppression effectué avec succès");
    }
}
