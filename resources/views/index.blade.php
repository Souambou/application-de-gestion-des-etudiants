@extends("layout")
@section("content")

<h3 class="mb-3">Liste des étudiants</h3>
<div>
  
    <a href="{{route('etudiants.create')}}" class="btn btn-info mx-5" style="float: right ;"><i class="fa-sharp fa-solid fa-plus mx-3 fa-2x"></i>Ajouter un étudiant</a>
  <a href="{{route('notes.index')}}" class="btn btn-success" style="float: right ;">Gestion des notes</a>
   <a href="{{route('matieres.index')}}" class="btn btn-primary mx-5" style="float: right ;">Gestion des matières</a>

</div>

<div class="uper">

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>NOMS</td>
          <td>PRENOMS</td>
          <td>EMAIL</td>
          <td>NUMERO</td>
          <td>FILIERE</td>
          
          <td colspan="2">ACTIONS</td>
        </tr>
    </thead>

    <tbody>
        <!--  on utilises la boucle forearch et on recupere la variable créer au niveau du controller -->
        @foreach($students as $student)
      
        <tr class="mt-2">
            <td>{{$student->id}}</td>
            <td>{{$student->nom}}</td>
            <td>{{$student->prenom}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->numero}}</td>
            <td>{{$student->filiere}}</td> 
           
            <td class="mt-3"><a href="{{route('etudiants.show', $student->id)}}" class="btn btn-dark"><i class="fas fa-eye"></i></a></td>
                        
            <td>
              <a href="{{ route('etudiants.edit', $student->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
              <button class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class=" fas fa-trash-alt fa-0x"></i>
              </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression de l'étudiant</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Voulez-vous supprimez cet étudiant?</p>
                    </div>
                    <div class="modal-footer">
                      <form id="form{{$student->id}}" method="POST"   action="{{route('etudiants.destroy', $student->id)}}"> 
                            @csrf 
                            @method('DELETE')
                      </form>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                      <button type="button" class="btn btn-primary" onclick="document.getElementById('form{{$student->id}}').submit()">Oui</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
        </tr>      
        @endforeach
    </tbody>
  </table>
<div>

@endsection
