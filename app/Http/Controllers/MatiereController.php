<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::orderby("id","DESC")->get();
       
        return view('matieres.index', compact('matieres'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matieres.create');
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
            'libelle'=>'required|max:255',
            'nom_mat'=>'required|max:255',
            'coef'=>'required',
            'nom_prof'=>'required',    
        ]);
        
        $matiere = new Matiere();
        $matiere->libellé = $request->libelle;
        $matiere->nom = $request->nom_mat;
        $matiere->coeficient = $request->coef;
        $matiere->nom_prof = $request->nom_prof;
        $matiere->save();
       
        return back()->with('success', "Matière ajouté avec succès");
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
        $matieres = Matiere::findOrFail($id);
        return view('matieres.show', compact('matieres'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $matieres = Matiere::findOrFail($id);

         return view('matieres.edit', compact('matieres'));
    }

    /**
     * création d'une application de gestion scolaire  
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'libelle'=>'required|max:255',
            'nom_mat'=>'required|max:255',
            'coef'=>'required|max:255',
            'nom_prof'=>'required',
          
        

        ]);
        
        $matiere = new Matiere();
        $matiere->libellé = $request->libelle;
        $matiere->nom = $request->nom_mat;
        $matiere->coeficient = $request->coef;
        $matiere->nom_prof = $request->nom_prof;
        $matiere->save();

        

        return redirect('/matieres')->with('success', 'Matière mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        $matieres = Matiere::findOrFail($id);
        $matieres->delete();

        return redirect('/matieres')->with('success', "Matière supprimé avec succèss");

    }
}
