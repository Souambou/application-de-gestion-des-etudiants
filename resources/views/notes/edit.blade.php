@extends('layout')
@section('content')

<style>
  
</style>

<h3>MOdifier la note de l'étudiant</h3>
<a href="{{route('notes.index')}}" class="btn btn-primary" style="float: right;">Retour sur la liste des notes</a>



      <form method="post" action="{{ route('notes.update', $notes->id ) }}" enctype="multipart/form-data">
          <div class="form-group">
            
              @csrf
              @method('PATCH')
           
              <label for="nom">ID ETUDIANT:</label>
              <input type="text" class="form-control" name="id_etu" value="{{$notes->id_etudiant}}"/>
          </div>
  
          <div class="form-group">
              <label for="prenom">ID MATIERE :</label>
              <input type="text" class="form-control" name="id_mat" value="{{ $notes->id_matieres}}"/>
          </div><br>
          
           <div class="form-group">
               <label for="coef">NOTE:</label>
               <input type="number" class="form-control" name="note" value="{{ $notes->note}}">
          </div><br>
     
     <br>
      <button type="reset" class="btn btn-danger mt-3">Rénitialiser</button>
     <button type="submit" class="btn btn-primary mt-3" style="float: right;">Mettre à jour la matière</button>




      </form>
  </div>
</div>
@endsection