@extends("layout")
@section("content")

<h3>Liste des matières ajoutés</h3>
<a href="{{route('matieres.create')}}" class="btn btn-primary" style="float: right;"><i class="fa-sharp fa-solid fa-plus mx-3 fa-2x"></i>Ajouter une nouvelle matière</a>

<div class="uper">

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>LIBELLE</td>
          <td>NOM MATIERE</td>
          <td>COEFFICIENT</td>
          <td>NOM PROF</td>
         
          
          <td colspan="2">ACTIONS</td>
        </tr>
    </thead>

    <tbody>
        <!--  on utilises la boucle forearch et on recupere la variable créer au niveau du controller -->
        @foreach($matieres as $matiere)
      
        <tr class="mt-2">
            <td>{{$matiere->id}}</td>
            <td>{{$matiere->libellé}}</td>
            <td>{{$matiere->nom}}</td>
             
            <td>{{$matiere->coeficient}}</td>
            <td>{{$matiere->nom_prof}}</td>
             
           
 
            <td class="mt-3"><a href="{{route('matieres.show', $matiere->id)}}" class="btn btn-dark"><i class="fas fa-eye"></i></a></td>
                        
            <td ><a href="{{ route('matieres.edit', $matiere->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
            <td>
               
                 <form method="POST"   action="{{ route('matieres.destroy', $matiere->id)}}"> 
                        @csrf 
                        @method('DELETE')
                
                    <button class="btn btn-danger" type="submit">
                        <i class=" fas fa-trash-alt fa-0x"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection