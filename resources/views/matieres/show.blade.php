@extends('layout')
@section('content')

<h3 class="text-muted mb-1">Détails de l'étudiant</h3>
<table style="border: 0px;">
<tr>
    
    <td> 
    <p><b class="lbl">ID:</b> {{$matieres->id}}</p><br>
    <p><b class="lbl">NOM:</b>{{$matieres->libellé}}</p><br>
    <p><b class="lbl">PRENOMS:</b>{{$matieres->nom}}</p><br>
     <p><b class="lbl">PRENOMS:</b>{{$matieres->coeficient}}</p><br>
    <p><b class="lbl">EMAIL:</b>{{$matieres->nom_prof}}</p><br>
    </td>
</tr>
</table> 

@endsection