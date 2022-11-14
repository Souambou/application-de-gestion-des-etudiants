@extends('layout')
@section('content')

<div class="container">


   <a href="{{route('matieres.index')}}" class="btn btn-success" style="float: right ;"> Retour sur  la liste  </a>

<div class="row">


<form method="POST"   action="{{route('matieres.store')}}" enctype="multipart/form-data">
    @csrf

     <div class="form-group">
        <label for="nom">LIBELLE:</label>
        <input type="text" class="form-control" name="libelle">
     </div><br>
      <div class="form-group">
        <label for="prenom">NOM MATIERE:</label>
        <input type="text" class="form-control" name="nom_mat">
     </div><br>
    
     
     <div class="form-group">
        <label for="phone">COEFFICIENT:</label>
        <input type="number" class="form-control" name="coef">
     </div><br>
         <div class="form-group">
        <label for="nom_prof">NOM PROF:</label>
        <input type="text" class="form-control" name="nom_prof">
     </div><br>
    
     <br>
          <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
          <button type="submit" class="btn btn-primary mt-3" style="float: right;"> Enregistrer</button>
 </form>
</div>
</div>
@endsection('')