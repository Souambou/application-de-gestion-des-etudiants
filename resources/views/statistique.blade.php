@extends('layout')
@section('content')

  <h2 class="text-uppercase text-warning">Statistique des notes</h2>
  <a href="" class="btn btn-primary">Gestion des étudiants</a>
  <table class="table">
  <thead>
    <tr>
        <th scope="col">ID NOTE</th>
        <th scope="col">ID ETUDIANT</th>
        <th scope="col">ID MATIERE</th>
        <th scope="col">MEILLEURES NOTES</th>
        <th scope="col">MOYENNE</th>
         <
    </tr>
  </thead>
  <tbody>

    @foreach($meilleursNotes as $val)
   
        <tr>
            <td>{{$val->id}}</td>
            <td>{{$val->id_etudiant}}</td>
            <td>{{$val->id_matieres }}</td>
            <td>{{$val->note}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
  
@endsection