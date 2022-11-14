<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
     protected $fillable=['nom','prenom','email','numero','filiere'];
    use HasFactory;

    public function Notes(){
        return $this->belongsTo('Notes::notes');
    }
}
