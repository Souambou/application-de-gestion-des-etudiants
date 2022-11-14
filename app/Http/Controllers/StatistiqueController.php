<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StatistiqueController extends Controller
{
    public function statistique(){
        $meilleursNotes = Notes::where('note', '>', 15)->get();
        // dd($statistiques);
        return view('statistique', compact('meilleursNotes')); 
          
    
} 
 
   
}



