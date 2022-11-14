@extends('layout')
@section('content')

<div class="container">


   <a href="{{route('index')}}" class="btn btn-success" style="float: right ;"> Retour sur  la liste  </a>

<div class="row">


<form method="POST"   action="{{route('etudiants.store')}}" enctype="multipart/form-data">
    @csrf

     <div class="form-group">
        <label for="nom">NOM:</label>
        <input type="text" class="form-control" name="nom">
     </div><br>
      <div class="form-group">
        <label for="prenom">PRENOMS:</label>
        <input type="text" class="form-control" name="prenom">
     </div><br>
    

     <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email">
     </div><br>
     
     <div class="form-group">
        <label for="phone">Numero:</label>
        <input type="text" class="form-control" name="numero">
     </div><br>
     
     <div class="form-group">
        <label for="section">FILIERE:</label>
        <select name="filiere" id="" class="form-select">
            <option selected>Choisir une filière</option>
            <option value="Informatique">Informatique</option>
            <option value="Gestion des projets">Gestion des projets</option>
            <option value="Comptabilite">Comptabilité</option>
            <option value="MRH">Gestion des resources humaines</option>
            <option value="MAC">Marketing et action commerciale</option>
            <option value="journalisme">journalisme</option>

        </select>
     </div><br>
     
     <br>
      <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
     <button type="submit" class="btn btn-primary mt-3" style="float: right;">Ajouter l'étudiant </button>
</form>
</div>
</div>

@endsection('')