<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Notes;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
     $meilleursNotes = Notes::join('etudiants', 'etudiants.id', 'notes.id_etudiant')
                            ->join('matieres','matieres.id','notes.id_matieres')
                            ->where('note', '>', 15)
                            ->limit('10')
                            ->select('notes.*', 'etudiants.nom', 'etudiants.prenom','matieres.nom as matieres')
                            ->get();
    
        return view('admin',compact('meilleursNotes'));
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
}
