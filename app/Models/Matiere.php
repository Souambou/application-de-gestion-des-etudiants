<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable=['libelle','nom_mat','coef','nom_prof'];
    use HasFactory;

    public function Notes(){
        return $this->belongsTo('Notes::notes');
    }
}
