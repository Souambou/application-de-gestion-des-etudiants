@extends("layout")
@section("content")

<h3>Liste des notes </h3>

<div class="uper">
  <a href="{{route('notes.create')}}" class="btn btn-primary" style="float: right;"><i class="fa-sharp fa-solid fa-plus mx-3 fa-2x"></i>Ajouter une note</a>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID ETUDIANT</td>
          <td>ID MATIERE</td>
          <td>NOTE</td>
          <td colspan="2">ACTIONS</td>
        </tr>
    </thead>

    <tbody>
        <!--  on utilises la boucle forearch et on recupere la variable créer au niveau du controller -->
        @foreach($notes as $note)
      
        <tr class="mt-2">
            <td>{{$note->id}}</td>
            <td>{{$note->id_etudiant}}</td>
            <td>{{$note->note}}</td>
             
 
            
                        
            <td ><a href="{{ route('notes.edit', $note->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
            <td>
               
                 <form method="POST"   action="{{route ('notes.destroy', $note->id)}}"> 
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