<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Etudiant::orderby("id","DESC")->get();
       
        return view('index', compact('students'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request)
        $validateData=$request->validate([
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'email'=>'required',
            'numero'=>'required',
            'filiere'=>'required  ',
            

        ]);


            //creer ensuite un profil pour l'image
            /*$image = $request->file("image");
            $destinationPath = 'image/';
            //enfin d'eviter les mêmes noms des images on crer un profil unite avec date
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();   //getClientOringinEXte recupere l'extension original de l'image
            $image->move($destinationPath,$profileImage);   /// on deplace l'image vers $profile image
            $validateData['image']=$profileImage;  //mise à jour avec validate*/
            
            $students = Etudiant::create($validateData); //

            return redirect('/etudiants/create')->with('success', "Etudiant enregistré avec succès");
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
        $student = Etudiant::findOrFail($id);
        return view('show', compact('student'));
        
    }  



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $student = Etudiant::findOrFail($id);

         return view('edit', compact('student'));
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
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'email'=>'required|max:255',
            'numero'=>'required',
            'filiere'=>'required',  
        ]); 

        /*$image = $request->file("image");
        $destinationPath = 'image/';
        //enfin d'eviter les mêmes noms des images on crer un profil unite avec date
        $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();   //getClientOringinEXte recupere l'extension original de l'image
        $image->move($destinationPath,$profileImage);   /// on deplace l'image vers $profile image
        $validateData['image']=$profileImage;  //mise à jour avec validate/*
        
        //$students = student::create($validateData); //

        //    dd($validateData);*/
        Etudiant::whereId($id)->update($validatedData);

        return redirect('/etudiants')->with('success', 'Mise à jour effectué effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        $student = Etudiant::findOrFail($id);  
    
        $student->delete(); 

        return redirect('/etudiants')->with('success', "Etudiant supprimé avec succèss");

    }


   
}