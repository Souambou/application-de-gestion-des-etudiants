@extends('layout')
@section('content')

<h3 class="text-muted mb-1">Détails de l'étudiant</h3>
<table style="border: 0px;">
<tr>
    
    <td> 
    <p><b class="lbl">ID NOTE:</b> {{$notes->id}}</p><br>
    <p><b class="lbl">ID ETUDIANT:</b>{{$notes->id_etudiant}}</p><br>
    <p><b class="lbl">ID MATIERE:</b>{{$notes->id_matieres}}</p><br>
     <p><b class="lbl">NOTE OBTENUE:</b>{{$notes->note}}</p><br>
 
    </td>
</tr>
</table> 
@endsection