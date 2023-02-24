@extends('layouts.app')

@section('content')


<div class="container">

<div class="container">
  <div class="row">
    <div class=" col-12 text-center mt-2">
    <h1 class="display-1">Les Etudiants</h1>
    </div>
  </div>
</div>
<hr>

    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th> Etudiant</th>
    
                <th>Ville</th>
            </tr>
        </thead>
        <tbody>
        @foreach($etudiants as $etudiant)
            <tr>
                <td><a href="{{ route('etudiant.show', $etudiant->id) }}"> {{ $etudiant->nom }}</a></td>
                <td>{{ $etudiant->etudiantHasVille->ville }}</td>
            </tr>
        @endforeach
        </tbody>
        
    </table>
    {{$etudiants}}

</div>


@endsection