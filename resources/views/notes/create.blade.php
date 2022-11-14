@extends('layout')
@section('content')

<div class="container">
<marquee behavior="alternate" direction="">
   <h1 class="text-lead text-warning" >Attribuer des notes aux étudiants</h1>
</marquee>

   <a href="{{route('notes.index')}}" class="btn btn-success" style="float: right ;"> Retour sur  la liste  </a>

<div class="row">


<form method="POST"   action="{{route('notes.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
         <label for="id_etudiant">IDENTIFIANT</label>
          <select class="form-select" name="id_etu" id="" >
            <option value="">Sélectionner un étudiant</option> 
              @foreach($students as $student)
                <option value="{{$student->id}}">{{$student->nom}} {{$student->prenom}}</option>
              @endforeach
         
          </select>
   </div><br>

    <div class="form-group">
         <label for="id_matiere">MATIERE</label>
          <select class="form-select" name="id_mat" id="" >
            <option value="">Sélectionner sélectionner la matière</option>
              @foreach($matieres as $matiere)
                <option value="{{$matiere->id}}">{{$matiere->nom}}</option>
              @endforeach
         
          </select>
   </div>
     
     
      <div class="form-group">
            <label for="id_etudiant">NOTE</label>
               <input type="number"  class="form-control" name="note">
               
       </div>
     
     
     <br>
      <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
     <button type="submit" class="btn btn-primary mt-3" style="float: right;">Enregistrer</button>
</form>
</div>
</div>
@endsection('')