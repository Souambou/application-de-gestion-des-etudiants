@extends('layout')
@section('content')

<style>
  
</style>

<h3>Edition de la matière</h3>
<a href="{{route('matieres.index')}}" class="btn btn-primary" style="float: right;">Retour sur la liste des matières</a>


      <form method="post" action="{{ route('matieres.update', $matieres->id ) }}" enctype="multipart/form-data">
          <div class="form-group">
            
              @csrf
              @method('PATCH')
           
              <label for="nom">LIBELLE:</label>
              <input type="text" class="form-control" name="libelle" value="{{$matieres->libellé}}"/>
          </div>
  
          <div class="form-group">
              <label for="prenom">NOM MATIERE :</label>
              <input type="text" class="form-control" name="nom_mat" value="{{ $matieres->nom}}"/>
          </div><br>
          
           <div class="form-group">
               <label for="coef">COEFICIENT:</label>
               <input type="number" class="form-control" name="coef" value="{{ $matieres->coeficient}}">
          </div><br>
     
           <div class="form-group">
              <label for="nom_prof">NOM PROFESSEUR :</label>
              <input type="text" class="form-control" name="nom_prof" value="{{ $matieres->nom_prof}}"/>
          </div>
    
    
 
     
     <br>
      <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
     <button type="submit" class="btn btn-primary mt-3" style="float: right;">Mettre à jour la matière</button>




      </form>
  </div>
</div>
@endsection