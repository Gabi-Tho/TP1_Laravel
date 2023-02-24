@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class=" col-12 text-center mt-2">
    <h1 class="display-1">{{ $etudiant->nom }}</h1>
    <hr>
    </div>
  </div>
</div>



<div class="container-md mt-10">


<table class="table table-light">
  <tbody>
    <tr>
      <td> Nom</td>
      <td class="table-active">{{ $etudiant->nom }}</td>
    </tr>
    <tr>
      <td> Addresse</td>
      <td class="table-active">{{ $etudiant->addresse }}</td>
    </tr>
    <tr>
      <td> Phone</td>
      <td class="table-active">{{ $etudiant->phone }}</td>
    </tr>
    <tr>
      <td> Email</td>
      <td class="table-active">{{ $etudiant->email }}</td>
    </tr>
    <tr>
      <td> Date de Naissance</td>
      <td class="table-active">{{ $etudiant->date_naissance}}</td>
    </tr>
    <tr>
      <td> Ville</td>
      <td class="table-active">{{ $etudiant->etudiantHasVille->ville }}</td>
    </tr>
  </tbody>
</table>

<div class="d-flex align-items-center justify-content-center" style="height: 100px;">
    <div class="p-2 m-2  text-white  rounded-2">
        <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="text-center">
            <button type="button" class="btn btn-success">Edit</button>
        </a>
    </div>
</div>

</div>







@endsection