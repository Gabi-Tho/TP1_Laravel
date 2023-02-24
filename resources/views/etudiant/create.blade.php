@extends('layouts.app')

@section('content')





<div class="container-md mt-10">



<div class="container">
  <div class="row">
    <div class=" col-12 text-center mt-2">
    <h1 class="display-1">Create Etudiant</h1>
    </div>
  </div>
</div>

<hr>

<form method="post">
@csrf
@method('post')
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="">
  </div>

  <div class="form-group">
    <label for="addresse">Addresse</label>
    <input type="text" class="form-control" id="addresse" name="addresse" placeholder="">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="">
  </div>

  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="courriel" name="email" placeholder="">
  </div>

  <div class="form-group">
    <label for="date_naissance">Date de Naissance</label>
    <input type="text" class="form-control" id="date_naissance" name="date_naissance" placeholder="">
  </div>

  <div class="form-group">
    <label for="ville_id">Ville</label>
    <select class="form-control" id="ville" name="ville_id">
    @foreach($villes as $ville)
      <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group mt-10">
    <input type="submit" value="create">
  </div>
</form>

</div>





@endsection